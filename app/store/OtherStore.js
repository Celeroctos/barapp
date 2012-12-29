Ext.define('Bar.store.OtherStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.OtherModel'],
    model: 'Bar.model.OtherModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getOther',
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