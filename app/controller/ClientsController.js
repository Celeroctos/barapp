Ext.define('Bar.controller.ClientsController', {
    extend: 'Ext.app.Controller',
    id: 'ClientsController',
    stores: [
        'ClientsStore'
    ],
    models: [
        'ClientsModel'
    ],
    init: function() {
        console.log("Bar.controller.ClientsController");

        var store =  this.getStore("ClientsStore");
        if(store.getProxy().type == 'localstorage') {
            store.each(function(record) {
                record.set('detailCheckbox', '<a href="#' + record.get('id') + '" id="client' + record.get('id') + '"><img src="/img/arrow-curve-000-left.png" width="16" height="16" /><a/>');
            });
        } else {
            store.load();
        }
    }
});
