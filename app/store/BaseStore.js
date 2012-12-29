Ext.define('Bar.store.BaseStore', {
    extend: 'Ext.data.Store',
    pageSize: 100,
    autoLoad: false,
    listeners: {
        beforeload: function(store, operations, eOpts) {
            operations.params = {
                start: 0,
                limit: this.pageSize
            }
        }

    }
});