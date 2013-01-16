Ext.define('Bar.view.AlcoResourcesPanel', {
   extend: 'Ext.form.Panel',
   requires: ['Bar.view.AlcoResourcesGrid',
              'Bar.controller.ResourcesController',
              'Bar.view.OwnersCombobox'],
   alias: 'widget.AlcoResourcesPanel',
   layout: 'auto',
   region: 'center',
   title: '',
   items: [
       this.grid = {
           xtype: 'AlcoResourcesGrid',
           id: 'alcoGrid',
           title: '',
           maxHeight: 300,
           minHeight: 300,
           width: '100%',
           flex: 1
       },
       {
           xtype: 'fieldset',
           id: 'alcoAdd',
           width: 300,
           title: 'Добавить компонент',
           style: 'margin-left: 10px',
           items: [
               {
                   xtype: 'textfield',
                   fieldLabel: 'Название',
                   id: 'addAlcoName'
               },
               {
                   xtype: 'textfield',
                   fieldLabel: 'Объём (мл)',
                   id: 'addAlcoCapacity'
               },
               {
                   xtype: 'textfield',
                   fieldLabel: 'Цена',
                   id: 'addAlcoPrice'
               },
               {
                   xtype: 'OwnersCombobox',
                   fieldLabel: 'Владелец',
                   id: 'addAlcoOwner'
               },
               {
                   xtype: 'textfield',
                   fieldLabel: 'Крепкость (%, градусов)',
                   id: 'addAlcoStrength'
               },
               {
                   xtype: 'button',
                   text: 'ОК',
                   handler: function() {
                       var data = {
                           name: Ext.ComponentManager.get('addAlcoName').getValue(),
                           capacity: Ext.ComponentManager.get('addAlcoCapacity').getValue(),
                           price: Ext.ComponentManager.get('addAlcoPrice').getValue(),
                           owner: Ext.ComponentManager.get('addAlcoOwner').getValue(),
                           strength: Ext.ComponentManager.get('addAlcoStrength').getValue()
                       };
                       Ext.Ajax.request({
                           url: '/php/index.php/components/addAlcoComponent',
                           params: data,
                           success: function(response) {
                               var data = Ext.JSON.decode(response.responseText);
                               if(data.success == true) {
                                   // Обновляем таблицу
                                   Ext.getCmp('addAlcoName').setValue('');
                                   Ext.getCmp('addAlcoCapacity').setValue('');
                                   Ext.getCmp('addAlcoPrice').setValue('');
                                   Ext.getCmp('addAlcoOwner').setValue('');
                                   Ext.getCmp('addAlcoStrength').setValue('');
                                   Ext.getCmp('alcoGrid').getStore().reload();
                               }
                           }
                       });
                   }
               }
           ]
       }
   ],

   updatePanel: function() {
       Ext.getCmp('alcoGrid').getStore().reload();
   },
   getGrid: function() {
       return Ext.getCmp('alcoGrid');
   },
   initComponent: function() {
       Bar.view.AlcoResourcesPanel.superclass.initComponent.apply(this, arguments);
       console.log('Bar.view.AlcoResourcesPanel');
   }
});