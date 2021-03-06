Ext.define('Bar.view.ClientsCombobox', {
   extend: 'Ext.form.ComboBox',
   displayField: 'nick',
   valueField: 'id',
   hiddenName: 'nick',
   hiddenValue: 'id',
   store: 'AllClientsStore',
   alias: 'widget.ClientsCombobox',
   queryMode: 'remote',
   editable: false,
   initComponent: function() {
        console.log('Bar.view.ClientsCombobox');
        Bar.view.ClientsCombobox.superclass.initComponent.apply(this, arguments);
   }
});