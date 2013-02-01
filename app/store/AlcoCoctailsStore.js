Ext.define('Bar.store.AlcoCoctailsStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.AlcoCoctailsModel'],
    model: 'Bar.model.AlcoCoctailsModel',
    pageSize: 9,
    proxy: {
        type: 'ajax',
        url: '/php/index.php/coctails/getAlcoCoctails',
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