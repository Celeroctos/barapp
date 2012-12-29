Ext.define('Bar.store.NoAlcoCoctailsStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.AlcoCoctailsModel'],
    model: 'Bar.model.AlcoCoctailsModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/coctails/getNoAlcoCoctails',
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