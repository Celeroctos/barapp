Ext.define('Bar.view.ClientsPanel', {
   extend: 'Ext.form.Panel',
   requires: ['Bar.view.ClientsInfoGrid',
              'Bar.controller.ClientsController'],
   alias: 'widget.ClientsPanel',
   layout: 'auto',
   region: 'center',
   title: 'Клиенты',
   items: [
       {
           xtype: 'ClientsInfoGrid',
           id: 'clientsGrid',
           title: '',
           maxHeight: 300,
           minHeight: 300,
           width: '100%',
           flex: 1
       },
       {
           xtype: 'fieldset',
           id: 'clientAdd',
           width: 300,
           title: 'Добавить клиента',
           style: 'margin-left: 10px',
           items: [
               {
                   xtype: 'textfield',
                   fieldLabel: 'Никнейм',
                   id: 'addClientNickname'
               },
               {
                   xtype: 'textfield',
                   fieldLabel: 'E-mail',
                   id: 'addClientEmail'
               },
               {
                   xtype: 'button',
                   text: 'ОК',
                   handler: function() {
                       var data = {
                           nick: Ext.ComponentManager.get('addClientNickname').getValue(),
                           email: Ext.ComponentManager.get('addClientEmail').getValue()
                       };
                       Ext.Ajax.request({
                           url: '/php/index.php/users/addClient',
                           params: data,
                           success: function(response) {
                               var data = Ext.JSON.decode(response.responseText);
                               if(data.success == true) {
                                   // Обновляем таблицу
                                   Ext.getCmp('clientsGrid').getStore().reload();
                               }
                           }
                       });
                   }
               }
           ]
       },
       {
           xtype: 'fieldset',
           id: 'clientsDelete',
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
                       var selection = Ext.getCmp('clientsGrid').getSelectionModel().getSelection();
                       for(var i = 0; i < selection.length; i++) {
                           selected.push(selection[i].get('id'));
                       }
                       var data = {
                           ids: Ext.JSON.encode(selected)
                       };
                       if(selected.length > 0) {
                           Ext.Ajax.request({
                               url: '/php/index.php/users/delUsers',
                               params: data,
                               success: function(response) {
                                   var data = Ext.JSON.decode(response.responseText);
                                   if(data.success == true) {
                                       // Обновляем таблицу
                                       Ext.getCmp('clientsGrid').getStore().reload();
                                   }
                               }
                           });
                       }
                   }
               }
           ]
       }
   ],
   initComponent: function() {
       Bar.view.ClientsPanel.superclass.initComponent.apply(this, arguments);
       console.log('Bar.view.ClientsPanel');
   }
});