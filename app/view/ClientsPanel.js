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
                   xtype: 'textfield',
                   fieldLabel: 'ID профиля на соникмире',
                   id: 'addProfileId'
               },
               {
                   xtype: 'button',
                   text: 'ОК',
                   handler: function() {
                       var data = {
                           nick: Ext.ComponentManager.get('addClientNickname').getValue(),
                           email: Ext.ComponentManager.get('addClientEmail').getValue(),
                           profile_id: Ext.ComponentManager.get('addProfileId').getValue(),
                       };
                       Ext.Ajax.request({
                           url: '/php/index.php/users/addClient',
                           params: data,
                           success: function(response) {
                               var data = Ext.JSON.decode(response.responseText);
                               if(data.success == true) {
                                   // Обновляем таблицу
                                   Ext.getCmp('addClientNickname').setValue('');
                                   Ext.getCmp('addProfileId').setValue('');
                                   Ext.getCmp('addClientEmail').setValue('');
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
           id: 'clientAddMoney',
           width: 300,
           title: 'Операции со средствами',
           style: 'margin-left: 10px',
           items: [
               {
                   xtype: 'ClientsCombobox',
                   fieldLabel: 'Клиент',
                   id: 'addMoneyOwner',
                   editable: false
               },
               {
                   xtype: 'textfield',
                   fieldLabel: 'Количество',
                   id: 'addMoneyQuantity'
               },
               {
                   xtype: 'button',
                   text: 'Добавить',
                   handler: function() {
                       var data = {
                           client: Ext.getCmp('addMoneyOwner').getValue(),
                           quantity: Ext.getCmp('addMoneyQuantity').getValue(),
                           t_type: 1
                       };
                       Ext.Ajax.request({
                           url: '/php/index.php/transactions/moveToTransactions',
                           params: data,
                           success: function(response) {
                               var data = Ext.JSON.decode(response.responseText);
                               if(data.success == true) {
                                   // Обновляем таблицу
                                   Ext.getCmp('addMoneyOwner').setValue('');
                                   Ext.getCmp('addMoneyQuantity').setValue('');
                                   Ext.getCmp('clientsGrid').getStore().reload();
                               }
                           }
                       });
                   }
               },
               {
                   xtype: 'button',
                   text: 'Отнять',
                   style: 'margin-left: 10px;',
                   handler: function() {
                       var data = {
                           client: Ext.getCmp('addMoneyOwner').getValue(),
                           quantity: Ext.getCmp('addMoneyQuantity').getValue(),
                           t_type: 2
                       };
                       Ext.Ajax.request({
                           url: '/php/index.php/transactions/moveToTransactions',
                           params: data,
                           success: function(response) {
                               var data = Ext.JSON.decode(response.responseText);
                               if(data.success == true) {
                                   // Обновляем таблицу
                                   Ext.getCmp('addMoneyOwner').setValue('');
                                   Ext.getCmp('addMoneyQuantity').setValue('');
                                   Ext.getCmp('clientsGrid').getStore().reload();
                               }
                           }
                       });
                   }
               }
           ]
       }
   ],
   updatePanel: function() {
       Ext.getCmp('clientsGrid').getStore().reload();
   },
   initComponent: function() {
       Bar.view.ClientsPanel.superclass.initComponent.apply(this, arguments);
       console.log('Bar.view.ClientsPanel');
   }
});