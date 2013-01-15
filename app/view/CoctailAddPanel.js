Ext.define('Bar.view.CoctailAddPanel', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.CoctailAddPanel',
    layout: 'vbox',
    region: 'center',
    requires: [],
    border: 0,
    padding: 5,
    title: '',
    prefix: '', // Префикс для раздачи разных айдишников компонентам
    lastComponentId: false, // Количество панелек, котоыре см. ниже
    currentComponentId: 0, // Компонент, на котором сейчас стоит фокус
    itemsLinks: [], // Ссылки на компоненты, чтобы не использовать id

    makeItems: function() {
        this.items.add(this.itemsLinks['addAlcoCoctailsName'] = Ext.create('Ext.form.TextField', {
            fieldLabel: 'Название',
            width: 400
        }));
        this.items.add(this.itemsLinks['addAlcoCoctailsProzent'] = Ext.create('Ext.form.TextField', {
            fieldLabel: 'Процент прибыли (в %)',
        }));
        this.items.add(this.itemsLinks['addAlcoCoctailsRecipe'] = Ext.create('Ext.form.field.HtmlEditor', {
            fieldLabel: 'Рецепт',
            width: 400,
            //resizable: true
        }));
        this.items.add(this.itemsLinks['alcoCoctailsComponentsAdd'] = Ext.create('Ext.form.FieldSet',{
            title: 'Компоненты',
            style: 'margin: 20px 0 0 10px;',
            width: 460,
            alreadyChoosed: [], // id тех, кто уже выбран
            items: [],
        }));
        this.items.add(Ext.create('Ext.Button', {
            xtype: 'button',
            text: 'ОК',
            style: 'margin-top: 10px;',
            handler: Ext.bind(function() {
                var items =  this.itemsLinks['alcoCoctailsComponentsAdd'].items;
                var data = [];
                // Минус пустой последний элемент
                for(var i = 0; i < items.length - 1; i++) {
                    data[i] = {
                        combo: items.getAt(i).items.getAt(0).trueValue != null ? items.getAt(i).items.getAt(0).trueValue : items.getAt(i).items.getAt(0).getValue(),
                        textfield: items.getAt(i).items.getAt(1).getValue()
                    };
                }
                var allData = {
                    name:  this.itemsLinks['addAlcoCoctailsName'].getValue(),
                    prozent:  this.itemsLinks['addAlcoCoctailsProzent'].getValue(),
                    recipe:  this.itemsLinks['addAlcoCoctailsRecipe'].getValue(),
                    components: Ext.encode(data)
                }
                if(this.mode == 'add') {
                    var url =  '/php/index.php/coctails/addAlcoCoctail';
                } else if(this.mode == 'edit' && this.hasOwnProperty('coctailRec')) {
                    var url = '/php/index.php/coctails/editCoctail';
                    console.log(this.coctailRec);
                    allData.coctail =  this.coctailRec.get('id'); // идентификатор коктейля, который нужно менять
                }

                Ext.Ajax.request({
                    url: url,
                    params: allData,
                    success: Ext.bind(function(response) {
                        var data = Ext.JSON.decode(response.responseText);
                        if(data.success == true) {
                            if(this.mode == 'add') {
                                // Обновляем таблицу
                                this.itemsLinks['addAlcoCoctailsName'].setValue('');
                                this.itemsLinks['addAlcoCoctailsProzent'].setValue('');
                                this.itemsLinks['addAlcoCoctailsRecipe'].setValue(''),
                                // Необходимо удалить все компоненты, а потом клонировать один узел.
                                this.itemsLinks['alcoCoctailsComponentsAdd'].removeAll();
                                // Клонируем узел
                                this.currentComponentId = 0;
                                this.lastComponentId = false;
                                this.cloneNode();
                            }
                            if(this.mode == 'edit') {
                                this.openedWindow.close();
                            }
                            Ext.getCmp('alcoCoctailsGrid').getStore().reload();
                            Ext.getCmp('noAlcoCoctailsGrid').getStore().reload();
                        }
                    }, this)
                });
            }, this)
        }));
    },

    addOrRemoveComponent: function(component, eventObj, listener) {
        // Если поля комбобокса и поля текстфилда пустые - нужно удалить этот компонент, если он не первый, а если непустые - раскрыть ещё одну панельку для компонента
        if(this.lastComponentId == this.currentComponentId) {
            if(Ext.getCmp(this.prefix + 'componentCombo' + this.lastComponentId).getValue() != null &&
                Ext.String.trim(Ext.getCmp(this.prefix + 'componentTextField' + this.lastComponentId).getValue()) != '') {
                var items = this.itemsLinks['alcoCoctailsComponentsAdd'].items;
                if(items.length - 1 > 0) { // К первому элементу крестик не нужен
                    this.makeDeleteButton(items.getAt(items.length - 1));
                }
                this.cloneNode();
            }
        }
    },
    changeSelectedComponent: function(component, eventObj, listener) {
        this.currentComponentId = component.numId;
        // Если поля комбобокса и поля текстфилда пустые - нужно удалить этот компонент, если он не первый, а если непустые - раскрыть ещё одну панельку для компонента
        // Если он не единственнный
        if(this.currentComponentId == this.lastComponentId) {
            this.addOrRemoveComponent();
            return;
        }
        if(this.itemsLinks['alcoCoctailsComponentsAdd'].items.length > 1) {
            if(Ext.getCmp(this.prefix + 'componentCombo' +  this.currentComponentId ).getValue() == null &&
                Ext.String.trim(Ext.getCmp(this.prefix + 'componentTextField' +  this.currentComponentId ).getValue()) == '') {
                this.itemsLinks['alcoCoctailsComponentsAdd'].remove(this.prefix + 'componentPanel' + this.currentComponentId);
            }
        }

        if(this.lastComponentId == this.currentComponentId) {
            if(Ext.getCmp(this.prefix + 'componentCombo' + this.lastComponentId).getValue() != null &&
                Ext.String.trim(Ext.getCmp(this.prefix + 'componentTextField' + this.lastComponentId).getValue()) != '') {
                this.cloneNode();
            }
        }
        this.addOrRemoveComponent();
    },
    bindHandlers: function() {
        this.on('afterrender', function() {
            this.cloneNode(false);
        }, this);
        // Для изменения данных в ячейках
    },

    // Клонирование ноды компонента
    cloneNode: function(createDeleteButton, comboValue, comboDisplay, textFieldValue) {
        if(this.lastComponentId === false) {
            this.lastComponentId = 0;
        } else {
            this.lastComponentId++;
        }

        var panel = Ext.create('Ext.panel.Panel', {
            layout: 'hbox',
            width: 460,
            border: 0,
            style: 'margin-bottom: 10px',
            id: this.prefix + 'componentPanel' + this.lastComponentId
        });
        var combo = null;
        panel.add(combo = Ext.create('Bar.view.ComponentsCombobox', {
            fieldLabel: '',
            width: 150,
            trueValue: comboValue,
            id: this.prefix + 'componentCombo' + this.lastComponentId,
            listeners: {
                focus: Ext.bind(this.addOrRemoveComponent, this),
                blur: Ext.bind(this.changeSelectedComponent, this)
            },
            numId: this.lastComponentId
        }));
        if(typeof comboValue != 'undefined') {
            combo.setValue(comboValue);
            combo.setRawValue(comboDisplay);
        }

        var textField = '';
        panel.add(textField = Ext.create('Ext.form.TextField', {
            fieldLabel: 'количество',
            style: 'margin-left: 10px',
            value: typeof textFieldValue != 'undefined' ? textFieldValue : '',
            id: this.prefix + 'componentTextField' + this.lastComponentId,
            listeners: {
                focus: Ext.bind(this.addOrRemoveComponent, this),
                blur: Ext.bind(this.changeSelectedComponent, this)
            },
            numId: this.lastComponentId
        }));

        if(this.lastComponentId > 0 && createDeleteButton) {
            this.makeDeleteButton(panel);
        }

        this.itemsLinks['alcoCoctailsComponentsAdd'].add(panel);
    },

    makeDeleteButton: function(panel) {
        panel.add(Ext.create('Ext.Button', {
            html: '<img src="/img/cross-script.png" alt="" width="16" height="16" />',
            style: 'margin: 0 0 0 10px',
            width: 30,
            componentNum: this.lastComponentId,
            id: this.prefix + 'removeComponent' + this.lastComponentId,
            listeners: {
                click: Ext.bind(function(component, e, options) {
                    this.itemsLinks['alcoCoctailsComponentsAdd'].remove(this.prefix + 'componentPanel' + component.componentNum);
                }, this)
            }
        }));
    },

    updatePanel: function() {

    },

    makeDataForEditing: function() {
        if(this.hasOwnProperty('coctailRec')) {
            this.itemsLinks['addAlcoCoctailsName'].setValue(this.coctailRec.get('name'));
            this.itemsLinks['addAlcoCoctailsProzent'].setValue(this.coctailRec.get('profit_prozent'));
            this.itemsLinks['addAlcoCoctailsRecipe'].setValue(this.coctailRec.get('recipe'));
            var components = this.coctailRec.get('components');
            for(var i = 0; i < components.length; i++) {
                this.cloneNode(true, components[i].component_id, components[i].name, components[i].c_capacity);
            }
        }
        console.log(this.coctailRec);
    },

    initComponent: function() {
        Bar.view.CoctailAddPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.CoctailAddPanel');
        this.makeItems();
        this.makeDataForEditing();
        this.bindHandlers();
    }
});