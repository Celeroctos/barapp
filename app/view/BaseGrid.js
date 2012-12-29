Ext.define('Bar.view.BaseGrid', {
    extend: 'Ext.grid.Panel',
    region:'center',
    layout: 'card',
    alias: 'widget.BaseGrid',
    border: 0,

    makePagination: function() {
        var store = this.getStore();
        this.dockedItems = [{
            xtype: 'pagingtoolbar',
            store: store,
            dock: 'bottom',
            displayInfo: true,
            displayMsg: 'Отображаются {0} - {1} из {2} записей',
        }];
    },
    initComponent: function() {
        console.log('Bar.view.BaseGrid');
        this.makePagination();
        Bar.view.BaseGrid.superclass.initComponent.apply(this, arguments);
    }
});