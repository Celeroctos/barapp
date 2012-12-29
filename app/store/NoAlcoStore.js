Ext.define('Bar.store.NoAlcoStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.NoAlcoModel'],
    model: 'Bar.model.NoAlcoModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getNoAlcoComponents',
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