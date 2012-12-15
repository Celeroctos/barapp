Ext.define('Bar.model.InventoryModel', {
    extend: 'Ext.data.Model',
    fields: [
        {
            name: 'id'
        },
        {
            name: 'name'
        },
        {
            name: 'price'
        },
        {
            name: 'capacity'
        },
        {
            name: 'current_capacity'
        },
        {
            name: 'owner'
        }
    ]
});