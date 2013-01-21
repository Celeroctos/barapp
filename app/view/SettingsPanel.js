Ext.define('Bar.view.SettingsPanel', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.SettingsPanel',
    layout: 'vbox',
    region: 'center',
    requires: ['Bar.view.BarCombobox'],
    title: 'Настройки',

    makeItems: function() {
        this.defaultBarPanelCombo = Ext.create('Ext.form.ComboBox', {
            fieldLabel: 'Панель бара по умолчанию',
            id: 'defaultBarPanel',
            editable: false,
            queryMode: 'local',
            store: Ext.create('Ext.data.Store', {
                fields:['field', 'value'],
                data: {
                    items: [{'field' : 'Заказы', 'value' : 'Bar.view.OrdersPanel'},
                        {'field' : 'Клиенты', 'value' : 'Bar.view.ClientsPanel'},
                        {'field' : 'Владельцы', 'value' : 'Bar.view.OwnersPanel'},
                        {'field' : 'Транзакции', 'value' : 'Bar.view.TransactionsPanel'},
                        {'field' : 'Ресурсы бара', 'value' : 'Bar.view.BarResourcesPanel'},
                        {'field' : 'Меню', 'value' : 'Bar.view.MenuPanel'},
                        {'field' : 'Настройки', 'value' : 'Bar.view.SettingsPanel'}
                    ],
                },
                proxy: {
                    type: 'memory',
                    reader: {
                        type: 'json',
                        root: 'items'
                    }
                }
            }),
            displayField: 'field',
            valueField: 'value',
            hiddenName: 'setting'
        });
        this.items = [
            {
                xtype: 'fieldset',
                id: 'appBarSettings',
                width: 300,
                title: 'Бар',
                style: 'margin-left: 10px',
                items: [
                    this.defaultBarCombo = Ext.create('Bar.view.BarCombobox', {
                        fieldLabel: 'Текущий бар',
                        id: 'currentBar',
                        editable: false
                    }),
                    {
                        fieldLabel: 'Или новый бар:',
                        xtype: 'textfield',
                        id: 'newBarName'
                    },
                    {
                        xtype: 'button',
                        text: 'ОК',
                        listeners: {
                            'click': Ext.bind(this.changeCurrentBar, this)
                        }
                    }
                ]
            },
            {
                xtype: 'fieldset',
                id: 'appSettings',
                width: 300,
                title: 'Приложение',
                style: 'margin-left: 10px',
                items: [
                    this.defaultBarPanelCombo,
                    {
                        xtype: 'button',
                        text: 'ОК',
                        listeners: {
                            'click': Ext.bind(this.saveAppSettings, this, [[this.defaultBarPanelCombo], ['defaultBarPanel']], true),
                            'afterrender': Ext.bind(this.getDefaultBarPanel, this)
                        }
                    }
                ]
            }
        ];
    },

    changeCurrentBar: function(component, e, listeners) {
        var newBarName = Ext.getCmp('newBarName');
        // Если вбито имя бара, то нужно прописать его, как новый бар.
        var components = [];
        if(Ext.String.trim(newBarName.getValue()) != '') {
            components[0] = newBarName;
            // Добавим бар
            Ext.Ajax.request({
                url: '/php/index.php/bars/addNewBar',
                params: {
                    name: Ext.String.trim(newBarName.getValue())
                },
                success: Ext.bind(function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    if(data.success == true) {
                        var combo = this.defaultBarCombo;
                        var panel = this;
                        combo.getStore().load(function(records, operation, success) {
                            combo.setValue(data.data);
                            combo.setRawValue(newBarName.getValue());
                            newBarName.setValue('');
                            panel.saveAppSettings(component, e, listeners, [{ getValue: function() { return data.data } }], ['defaultBar']);
                        });
                    }
                }, this)
            });
        } else {
            components[0] = this.defaultBarCombo;
            this.saveAppSettings(component, e, listeners, components, ['defaultBar']);
        }
    },

    getDefaultBarPanel: function() {
        Ext.Ajax.request({
            url: '/php/index.php/settings/getDefaultBarPanel',
            success: Ext.bind(function(response) {
                var data = Ext.JSON.decode(response.responseText);
                if(data.success == true) {
                    this.defaultBarPanelCombo.setValue(data.data);
                }
            }, this)
        });
    },

    saveAppSettings: function(component, e, listeners, components, settings) {
        toSend = [];
        var url = '';
        for(var i = 0; i < components.length; i++) {
           var obj = {
                        'value' : components[i].getValue(),
                        'name' : settings[i]
                     };
           toSend.push(obj);
        }

        Ext.Ajax.request({
            url: '/php/index.php/settings/saveSettings',
            params: {
                newData: Ext.JSON.encode(toSend)
            },
            success: Ext.bind(function(response) {
                var data = Ext.JSON.decode(response.responseText);
                if(data.success == true) {
                    Ext.Msg.show({
                        title:'Сообщение',
                        msg: data.data,
                        buttons: Ext.MessageBox.YES,
                        buttonText: 'ОК'
                    });
                }
            }, this)
        });
    },

    updatePanel: function() {

    },

    initComponent: function() {
        this.makeItems();
        Bar.view.SettingsPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.SettingsPanel');
    }
});