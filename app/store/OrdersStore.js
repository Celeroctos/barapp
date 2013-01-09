Ext.define('Bar.store.OrdersStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.OrdersModel'],
    model: 'Bar.model.OrdersModel',
    pageSize: 10,
    proxy: {
        type: 'ajax',
        url: '/php/index.php/orders/getOrders/0',
        reader: {
            type: 'json',
            root: 'data'
        },
        actionMethods: {
            create : 'POST',
            read   : 'POST',
            update : 'POST',
            destroy: 'POST'
        }
    },
    listeners: {
        beforeload: function(store, operation, eOpts) {

        }

    }
});