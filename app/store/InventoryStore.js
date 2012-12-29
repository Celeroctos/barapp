Ext.define('Bar.store.InventoryStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.InventoryModel'],
    model: 'Bar.model.InventoryModel',
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getInventory',
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