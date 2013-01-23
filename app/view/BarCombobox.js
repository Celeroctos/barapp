Ext.define('Bar.view.BarCombobox', {
   extend: 'Ext.form.ComboBox',
   displayField: 'name',
   valueField: 'id',
   hiddenName: 'name',
   hiddenValue: 'id',
   store: 'BarStore',
   alias: 'widget.BarCombobox',
   queryMode: 'remote',
   editable: false,
   setDefault: true,
   bindHandlers: function() {
       this.on('afterrender', function(combo, eOpts ) {
           var store = combo.getStore();
           store.load(function(records, operation, success) {
               if(combo.setDefault) {
                   for(var i = 0; i < records.length; i++) {
                       if(records[i].get('isDefault') == 1) {
                           // Поставить, как текущий бар
                           combo.setValue(records[i].get('id'));
                           break;
                       }
                   }
               } else {
                   if(records.length > 0) {
                       combo.setValue(records[0].get('id'));
                   }
               }
           });
       }, this);
   },
   initComponent: function() {
       console.log('Bar.view.BarCombobox');
       Bar.view.BarCombobox.superclass.initComponent.apply(this, arguments);
       this.bindHandlers();
   }
});