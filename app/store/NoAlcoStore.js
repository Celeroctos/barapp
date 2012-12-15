Ext.define('Bar.store.NoAlcoStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.NoAlcoModel'],
    model: 'Bar.model.NoAlcoModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getNoAlcoComponents',
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