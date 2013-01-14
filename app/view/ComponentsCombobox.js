Ext.define('Bar.view.ComponentsCombobox', {
   extend: 'Ext.form.ComboBox',
   displayField: 'name',
   valueField: 'id',
   store: Ext.create('Bar.store.AllComponentsStore', {}), // Отсутствие копий
   alias: 'widget.ComponentsCombobox',
   queryMode: 'remote',
   editable: false,
   bindHandlers: function() {
       this.on('select', function(combo, recs, eOpts) {
           var choosed = Ext.getCmp('alcoCoctailsComponentsAdd').alreadyChoosed;
           choosed.push(recs[0].get('id'));
       });
       this.on('change', function(field, newValue, oldValue, eOpts ) {
           var choosed = Ext.getCmp('alcoCoctailsComponentsAdd').alreadyChoosed;
           for(var i = 0; i < choosed.length; i++) {
               if(choosed[i] == oldValue) {
                   choosed[i] = newValue;
               }
           }
       })
       this.on('expand', function(field, eOpts) {
           var choosed = Ext.getCmp('alcoCoctailsComponentsAdd').alreadyChoosed;
           this.getStore().filterBy(function(rec, id) {
               var id = rec.get('id');
               for(var i = 0; i < choosed.length; i++) {
                   if(choosed[i] == id) {
                       return false;
                   }
               }
               return true;
           }, this);
       });
   },
   initComponent: function() {
     //  this.bindHandlers();
       console.log('Bar.view.ComponentsCombobox');
       Bar.view.ComponentsCombobox.superclass.initComponent.apply(this, arguments);
   }
});