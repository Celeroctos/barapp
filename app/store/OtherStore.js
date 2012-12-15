Ext.define('Bar.store.OtherStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.OtherModel'],
    model: 'Bar.model.OtherModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getOther',
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