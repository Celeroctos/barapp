Ext.define('Bar.store.OwnersStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.OwnersModel'],
    model: 'Bar.model.OwnersModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/users/getOwners',
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