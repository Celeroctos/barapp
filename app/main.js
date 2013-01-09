Ext.Loader.setConfig({
    enabled: true,
    disableCaching: true,
    paths: {
        Bar: 'app',
        Ext: 'extjs/src'
    }
});

Ext.require(['Bar.view.MainPanel']);

Ext.onReady(function() {
    Ext.application({
        name: 'Bar',
        controllers: ['ClientsController',
                      'OwnersController',
                      'ResourcesController'],
        models: ['ClientsModel',
                 'OwnersModel',
                 'AlcoModel',
                 'NoAlcoModel',
                 'OtherModel',
                 'InventoryModel',
                 'OrdersModel'],
        stores: ['ClientsStore',
                 'OwnersStore',
                 'InventoryStore',
                 'AlcoStore',
                 'NoAlcoStore',
                 'OtherStore',
                 'AllComponentsStore',
                 'AlcoCoctailsStore',
                 'NoAlcoCoctailsStore',
                 'OrdersStore',
                 'TransactionsStore',
                 'AllCoctailsStore',
                 'AllClientsStore'],
        views: ['ClientsCombobox'],
        launch: function() {
            Ext.create('Bar.view.MainPanel').show();
        },
        init: function() {
            console.log('Entrypoint');
        }
    });
});


function getClientHeight() {
    return window.innerHeight ? window.innerHeight : (document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.offsetHeight);
}
