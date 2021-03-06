Ext.define('Bar.model.OwnersModel', {
    extend: 'Ext.data.Model',
    fields: [
        {
            name: 'detailCheckbox'
        },
        {
            name: 'id'
        },
        {
            name: 'nick'
        },
        {
            name: 'email'
        },
        {
            name: 'moneyOut'
        },
        {
            name: 'moneyIn'
        },
        {
            name: 'difference'
        },
        {
            name: 'clean_profit'
        },
        {
            name: 'orders'
        }
    ]
});