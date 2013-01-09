Ext.define('Bar.store.AllCoctailsStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.AlcoCoctailsModel'],
    model: 'Bar.model.AlcoCoctailsModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/coctails/getAllCoctails',
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