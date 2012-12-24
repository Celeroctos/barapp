Ext.define('Bar.store.TransactionsStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.TransactionsModel'],
    model: 'Bar.model.TransactionsModel',
    pageSize: 25,
    autoLoad: false,
    proxy: {
        type: 'ajax',
        url: '/php/index.php/transactions/getTransactions',
        actionMethods: {
            create : 'POST',
            read   : 'POST',
            update : 'POST',
            destroy: 'POST'
        },
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    },
    listeners: {
        beforeload: function(store, operations, eOpts) {
            operations.params = {
                start: 0,
                limit: this.pageSize
            }
        }

    }
});