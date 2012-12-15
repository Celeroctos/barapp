Ext.define('Bar.controller.OwnersController', {
    extend: 'Ext.app.Controller',
    id: 'OwnersController',
    stores: [
        'OwnersStore'
    ],
    models: [
        'OwnersModel'
    ],
    init: function() {
        console.log("Bar.controller.OwnersController");
    }
});
