Ext.define('Bar.store.AllComponentsStore', {
    extend: 'Bar.store.BaseStore',
    requires: ['Bar.model.AlcoModel'],
    model: 'Bar.model.AlcoModel',
    autoload: true,
    proxy: {
        type: 'ajax',
        url: '/php/index.php/components/getAllComponents',
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
        load: function(rec, id) {
            var choosed = Ext.getCmp('alcoCoctailsComponentsAdd').alreadyChoosed;
            this.filterBy(function(rec, id) {
                var id = rec.get('id');
                for(var i = 0; i < choosed.length; i++) {
                    if(choosed[i] == id) {
                        return true;
                    }
                }
                return true;
            }, this);
        }
    }
});