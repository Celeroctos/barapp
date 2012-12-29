Ext.define('Bar.store.AlcoStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.AlcoModel'],
    model: 'Bar.model.AlcoModel',
    pageSize: 12,
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getAlcoComponents',
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