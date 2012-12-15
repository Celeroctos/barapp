Ext.define('Bar.store.AlcoStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.AlcoModel'],
    model: 'Bar.model.AlcoModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getAlcoComponents',
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