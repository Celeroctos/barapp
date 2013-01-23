Ext.define('Bar.store.BarFilteredStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.BarModel'],
    model: 'Bar.model.BarModel',
    autoLoad: false,
    proxy: {
        type: 'ajax',
        url: '/php/index.php/bars/getBarsWithoutDefault',
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
    }
});