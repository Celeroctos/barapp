Ext.define('Bar.store.InventoryStore', {
    extend: 'Ext.data.Store',
    requires: ['Bar.model.InventoryModel'],
    model: 'Bar.model.InventoryModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getInventory',
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