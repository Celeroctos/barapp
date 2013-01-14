Ext.define('Bar.view.MenuPanel', {
   extend: 'Ext.form.Panel',
   requires: ['Bar.view.AlcoCoctailsGrid',
              'Bar.view.CoctailsPanel',
              'Bar.controller.ResourcesController',
              'Bar.view.ComponentsCombobox',
              'Bar.view.CoctailAddPanel'],
   alias: 'widget.MenuPanel',
   layout: 'auto',
   region: 'center',
   title: 'Список коктейлей',
   id: 'MenuPanel',
   items: [
       {
           title: '',
           xtype: 'CoctailsPanel',
           id: 'coctailsPanel'
       },
       {
           xtype: 'fieldset',
           id: 'alcoCoctailsAdd',
           width: 510,
           title: 'Добавить коктейль',
           style: 'margin-left: 10px;',
           items: [
               {
                   xtype: 'CoctailAddPanel',
                   id: 'coctailAddPanel',
                   style: 'padding 0;'
               }
           ]
       }
   ],
   updatePanel: function() {
       Ext.getCmp('alcoCoctailsGrid').getStore().reload();
       Ext.getCmp('noAlcoCoctailsGrid').getStore().reload();
   },

   initComponent: function() {
       Bar.view.MenuPanel.superclass.initComponent.apply(this, arguments);
       console.log('Bar.view.MenuPanel');
   }
});