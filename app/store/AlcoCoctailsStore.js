Ext.define('Bar.store.AlcoCoctailsStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.AlcoCoctailsModel'],
    model: 'Bar.model.AlcoCoctailsModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/coctails/getAlcoCoctails',
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