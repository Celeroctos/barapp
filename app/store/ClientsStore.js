Ext.define('Bar.store.ClientsStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.ClientsModel'],
    model: 'Bar.model.ClientsModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/users/getClients',
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