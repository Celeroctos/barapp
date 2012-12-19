Ext.define('Bar.view.FilterModeCombobox', {
   extend: 'Ext.form.ComboBox',
   displayField: 'status',
   valueField: 'value',
   hiddenName: 'status',
   hiddenValue: 'value',

   store: Ext.create('Ext.data.Store', {
       fields:['status', 'value'],
       data: {
           items: [
               {status: 'Начинается с', value: 0},
               {status: 'Содержит', value: 1},
           ]
       },
       proxy: {
           type: 'memory',
           reader: {
               type: 'json',
               root: 'items'
           }
       }
   }),
   alias: 'widget.FilterModeCombobox',
   queryMode: 'remote',
   editable: false,
   initComponent: function() {
        console.log('Bar.view.FilterModeCombobox');
        Bar.view.FilterModeCombobox.superclass.initComponent.apply(this, arguments);
   }
});