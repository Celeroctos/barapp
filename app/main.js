Ext.Loader.setConfig({
    enabled: true,
    disableCaching: true,
    paths: {
        Bar: 'app',
        Ext: 'extjs/src'
    }
});

/*Ext.override(Ext.form.ComboBox , {
    setValue  : function(v){
        var text = v;
        if(this.valueField){
           // console.log(this);
            if(this.queryMode == 'remote' && !Ext.isDefined(this.store.totalLength)){
                this.store.on('load', Ext.bind(this.setValue, this, arguments), null, {single: true});
                if(this.store.lastOptions === null){
                    var params;
                    if(this.valueParam) {
                        params = {};
                        params[this.valueParam] = v;
                    } else {
                        var q = this.allQuery;
                        this.lastQuery = q;
                        this.store.setBaseParam(this.queryParam, q);
                        params = this.getParams(q);
                    }
                    console.log(params);
                    this.store.load({params: params});
                }
                return;
            }
            var r = this.findRecord(this.valueField, v);
            if(r){
                text = r.data[this.displayField];
            }else if(this.valueNotFoundText !== undefined){
                text = this.valueNotFoundText;
            }
        }
        this.lastSelectionText = text;
        if(this.hiddenField){
            this.hiddenField.value = v;
        }
        Ext.form.ComboBox.superclass.setValue.call(this, text);
        this.value = v;
    }
});*/

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
                 'OrdersModel',
                 'BarModel'],
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
                 'AllClientsStore',
                 'BarStore',
                 'BarFilteredStore'],
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
