Ext.define('Bar.view.CoctailsCombobox', {
   extend: 'Ext.form.ComboBox',
   displayField: 'name',
   valueField: 'id',
   store: 'AlcoCoctailsStore',
   alias: 'widget.CoctailsCombobox',
   queryMode: 'remote',
   initComponent: function() {
        console.log('Bar.view.CoctailsCombobox');
        Bar.view.CoctailsCombobox.superclass.initComponent.apply(this, arguments);
   }
});