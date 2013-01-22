Ext.define('Bar.view.OwnersCombobox', {
   extend: 'Ext.form.ComboBox',
   displayField: 'nick',
   valueField: 'id',
   store: 'OwnersStore',
   alias: 'widget.OwnersCombobox',
   queryMode: 'remote',
   editable: false,
   initComponent: function() {
        console.log('Bar.view.OwnersCombobox');
        Bar.view.OwnersCombobox.superclass.initComponent.apply(this, arguments);
   }
});