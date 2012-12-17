Ext.define('Bar.store.TransactionsStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.TransactionsModel'],
    model: 'Bar.model.TransactionsModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/transactions/getTransactions',
        reader: {
            type: 'json',
            root: 'data'
        }
    },
    listeners: {
        load: function() {

        }

    }
});