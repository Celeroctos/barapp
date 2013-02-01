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

   makeItems: function() {
       this.items = [
           this.coctailsPanel = Ext.create('Bar.view.CoctailsPanel', {
               title: '',
               id: 'coctailsPanel'
           }),
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
                       style: 'padding 0;',
                       mode: 'add'
                   }
               ]
           }
       ];
   },
   updatePanel: function() {
       console.log(this.coctailsPanel);
       this.coctailsPanel.updatePanel();
   },

   initComponent: function() {
       this.makeItems();
       Bar.view.MenuPanel.superclass.initComponent.apply(this, arguments);
       console.log('Bar.view.MenuPanel');
   }
});