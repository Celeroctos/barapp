Ext.define('Bar.model.TransactionsModel', {
    extend: 'Ext.data.Model',
    fields: [
        {
            name: 'id'
        },
        {
            name: 'order_id'
        },
        {
            name: 'nick'
        },
        {
            name: 'money'
        },
        {
            name: 'type'
        }
    ]
});