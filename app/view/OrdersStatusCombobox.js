Ext.define('Bar.view.OrdersStatusCombobox', {
   extend: 'Ext.form.ComboBox',
   displayField: 'status',
   valueField: 'value',
   hiddenName: 'status',
   hiddenValue: 'value',
   store: Ext.create('Ext.data.Store', {
       fields:['status', 'value'],
       data: {
           items: [
               {status: 'Заказан', value: 0},
               {status: 'Оплачивается', value: 1},
               {status: 'Оплачен', value: 2},
               {status: 'В процессе', value: 3},
               {status: 'Готов', value: 4},
               {status: 'Готов и ожидает', value: 5},
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
   alias: 'widget.OrdersStatusCombobox',
   queryMode: 'remote',
   editable: false,
   initComponent: function() {
        console.log('Bar.view.OrdersStatusCombobox');
        Bar.view.OrdersStatusCombobox.superclass.initComponent.apply(this, arguments);
   }
});