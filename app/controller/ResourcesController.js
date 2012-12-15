Ext.define('Bar.controller.ResourcesController', {
    extend: 'Ext.app.Controller',
    id: 'ResourcesController',
    stores: [
        'AlcoStore',
        'NoAlcoStore',
        'InventoryStore',
        'OtherStore'
    ],
    models: [
        'OtherModel',
        'InventoryModel',
        'AlcoModel',
        'NoAlcoModel'
    ],
    views: [
        'AlcoResourcesGrid',
        'NoAlcoResourcesGrid',
        'InventoryResourcesGrid',
        'OtherResourcesGrid'
    ],

    bindHandlers: function() {

    },

    init: function() {
        this.bindHandlers();
        console.log("Bar.controller.ResourcesController");
    }
});
