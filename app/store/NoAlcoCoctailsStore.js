Ext.define('Bar.store.NoAlcoCoctailsStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.AlcoCoctailsModel'],
    model: 'Bar.model.AlcoCoctailsModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/coctails/getNoAlcoCoctails',
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