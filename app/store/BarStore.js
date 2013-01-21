Ext.define('Bar.store.BarStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.BarModel'],
    model: 'Bar.model.BarModel',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        url: '/php/index.php/bars/getBars',
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
        load: function() {

        }

    }
});