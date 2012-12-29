Ext.define('Bar.store.OwnersStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.OwnersModel'],
    model: 'Bar.model.OwnersModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/users/getOwners',
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