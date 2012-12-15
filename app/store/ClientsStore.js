Ext.define('Bar.store.ClientsStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.ClientsModel'],
    model: 'Bar.model.ClientsModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/users/getClients',
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