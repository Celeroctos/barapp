Ext.define('Bar.store.OrdersStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.OrdersModel'],
    model: 'Bar.model.OrdersModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/orders/getOrders',
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