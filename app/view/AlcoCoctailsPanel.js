Ext.define('Bar.view.AlcoCoctailsPanel', {
   extend: 'Ext.form.Panel',
   requires: ['Bar.view.AlcoCoctailsGrid',
              'Bar.controller.ResourcesController',
              'Bar.view.ComponentsCombobox'],
   alias: 'widget.AlcoCoctailsPanel',
   layout: 'auto',
   region: 'center',
   title: 'Список коктейлей',
   id: 'AlcoCoctailsPanel',
   lastComponentId: false, // Количество панелек, котоыре см. ниже
   currentComponentId: 0, // Компонент, на котором сейчас стоит фокус
   items: [
       {
           xtype: 'AlcoCoctailsGrid',
           id: 'alcoCoctailsGrid',
           title: '',
           maxHeight: 300,
           minHeight: 300,
           width: '100%',
           flex: 1
       },
       {
           xtype: 'fieldset',
           id: 'alcoCoctailsAdd',
           width: 500,
           title: 'Добавить коктейль',
           style: 'margin-left: 10px',
           items: [
               {
                   xtype: 'textfield',
                   fieldLabel: 'Название',
                   id: 'addAlcoCoctailsName',
                   width: 400
               },
               {
                   xtype: 'textfield',
                   fieldLabel: 'Процент прибыли (в %)',
                   id: 'addAlcoCoctailsProzent'
               },
               {
                   xtype: 'htmleditor',
                   fieldLabel: 'Рецепт',
                   width: 400,
                   id: 'addAlcoCoctailsRecipe',
                   resizable: true
               },
               {
                   xtype: 'fieldset',
                   id: 'alcoCoctailsComponentsAdd',
                   title: 'Компоненты',
                   style: 'margin-left: 10px',
                   width: 450,
                   alreadyChoosed: [], // id тех, кто уже выбран
                   items: [],
               },
               {
                   xtype: 'button',
                   text: 'ОК',
                   handler: function() {
                       var items = Ext.getCmp('alcoCoctailsComponentsAdd').items;
                       var data = [];
                       // Минус пустой последний элемент
                       for(var i = 0; i < items.length - 1; i++) {
                           data[i] = {
                                combo: items.getAt(i).items.getAt(0).getValue(),
                                textfield: items.getAt(i).items.getAt(1).getValue()
                           };
                       }
                       var allData = {
                           name: Ext.ComponentManager.get('addAlcoCoctailsName').getValue(),
                           prozent: Ext.ComponentManager.get('addAlcoCoctailsProzent').getValue(),
                           recipe: Ext.ComponentManager.get('addAlcoCoctailsRecipe').getValue(),
                           components: Ext.encode(data)
                       }
                       Ext.Ajax.request({
                           url: '/php/index.php/coctails/addAlcoCoctail',
                           params: allData,
                           success: function(response) {
                               var data = Ext.JSON.decode(response.responseText);
                               if(data.success == true) {
                                   // Обновляем таблицу
                                   Ext.getCmp('addAlcoCoctailsName').setValue('');
                                   Ext.getCmp('addAlcoCoctailsProzent').setValue('');
                                   Ext.getCmp('addAlcoCoctailsRecipe').setValue(''),
                                   // Необходимо удалить все компоненты, а потом клонировать один узел.
                                   Ext.getCmp('alcoCoctailsComponentsAdd').removeAll();
                                   // Клонируем узел
                                   var alcoPanel = Ext.getCmp('AlcoCoctailsPanel');
                                   alcoPanel.currentComponentId = 0;
                                   alcoPanel.lastComponentId = false;
                                   alcoPanel.cloneNode();
                                   Ext.getCmp('alcoCoctailsGrid').getStore().reload();
                               }
                           }
                       });
                   }
               }
           ]
       },
       {
           xtype: 'fieldset',
           id: 'alcoCoctailsDelete',
           width: 300,
           title: 'С отмеченными',
           maxHeight: 100,
           style: 'margin-left: 10px',
           items: [
               {
                   xtype: 'button',
                   text: 'Удалить',
                   handler: function() {
                       var selected = [];
                       var selection = Ext.getCmp('alcoCoctailsGrid').getSelectionModel().getSelection();
                       for(var i = 0; i < selection.length; i++) {
                           selected.push(selection[i].get('id'));
                       }
                       var data = {
                           ids: Ext.JSON.encode(selected)
                       };
                       if(selected.length > 0) {
                           Ext.Ajax.request({
                               url: '/php/index.php/coctails/delCoctail',
                               params: data,
                               success: function(response) {
                                   var data = Ext.JSON.decode(response.responseText);
                                   if(data.success == true) {
                                       // Обновляем таблицу
                                       Ext.getCmp('alcoCoctailsGrid').getStore().reload();
                                   }
                               }
                           });
                       }
                   }
               }
           ]
       },
       {
           xtype: 'fieldset',
           id: 'alcoCoctailsUpdate',
           width: 300,
           title: 'Дополнительно',
           maxHeight: 70,
           style: 'margin-left: 10px',
           items: [
               {
                   xtype: 'button',
                   text: 'Обновить таблицу',
                   handler: function() {
                       Ext.getCmp('alcoCoctailsGrid').getStore().reload();
                   }
               }
           ]
       }
   ],
   updatePanel: function() {
       Ext.getCmp('alcoCoctailsGrid').getStore().reload();
   },
   addOrRemoveComponent: function(component, eventObj, listener) {
       var panel = Ext.getCmp('AlcoCoctailsPanel');
       // Если поля комбобокса и поля текстфилда пустые - нужно удалить этот компонент, если он не первый, а если непустые - раскрыть ещё одну панельку для компонента
       if(panel.lastComponentId == panel.currentComponentId) {
           if(Ext.getCmp('componentCombo' + panel.lastComponentId).getValue() != null &&
              Ext.String.trim(Ext.getCmp('componentTextField' + panel.lastComponentId).getValue()) != '') {
                 panel.cloneNode();
           }
       }
   },
   changeSelectedComponent: function(component, eventObj, listener) {
       var panel = Ext.getCmp('AlcoCoctailsPanel');
       panel.currentComponentId = component.numId;
       // Если поля комбобокса и поля текстфилда пустые - нужно удалить этот компонент, если он не первый, а если непустые - раскрыть ещё одну панельку для компонента
       // Если он не единственнный
       if(panel.currentComponentId == panel.lastComponentId) {
           panel.addOrRemoveComponent();
           return;
       }
       if(Ext.getCmp('alcoCoctailsComponentsAdd').items.length > 1) {
           if(Ext.getCmp('componentCombo' +  panel.currentComponentId ).getValue() == null &&
              Ext.String.trim(Ext.getCmp('componentTextField' +  panel.currentComponentId ).getValue()) == '') {
                  Ext.getCmp('alcoCoctailsComponentsAdd').remove('componentPanel' + panel.currentComponentId);
           }
       }

       if(panel.lastComponentId == panel.currentComponentId) {
           if(Ext.getCmp('componentCombo' + panel.lastComponentId).getValue() != null &&
               Ext.String.trim(Ext.getCmp('componentTextField' + panel.lastComponentId).getValue()) != '') {
               panel.cloneNode();
           }
       }
       panel.addOrRemoveComponent();
   },
   bindHandlers: function() {
       this.on('afterrender', function() {
            this.cloneNode();
       }, this);
       // Для изменения данных в ячейках
   },

   // Клонирование ноды компонента
   cloneNode: function() {
       if(this.lastComponentId === false) {
           this.lastComponentId = 0;
       } else {
           this.lastComponentId++;
       }

       var panel = Ext.create('Ext.panel.Panel', {
           layout: 'hbox',
           width: 450,
           border: 0,
           style: 'margin-bottom: 10px',
           id: 'componentPanel' + this.lastComponentId
       });
       panel.add(Ext.create('Bar.view.ComponentsCombobox', {
               fieldLabel: '',
               width: 150,
               id: 'componentCombo' + this.lastComponentId,
               listeners: {
                    focus: this.addOrRemoveComponent,
                    blur: this.changeSelectedComponent
               },
               numId: this.lastComponentId
           })
       );

       panel.add(Ext.create('Ext.form.TextField', {
                fieldLabel: 'количество',
                style: 'margin-left: 10px',
                id: 'componentTextField' + this.lastComponentId,
                listeners: {
                    focus: this.addOrRemoveComponent,
                    blur: this.changeSelectedComponent
                },
                numId: this.lastComponentId
           })
       );

       Ext.getCmp('alcoCoctailsComponentsAdd').add(panel);
   },
   initComponent: function() {
       this.bindHandlers();
       Bar.view.AlcoCoctailsPanel.superclass.initComponent.apply(this, arguments);
       console.log('Bar.view.AlcoCoctailsPanel');
   }
});