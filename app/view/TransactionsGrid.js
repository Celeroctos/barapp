Ext.define('Bar.view.TransactionsGrid', {
    extend: 'Bar.view.BaseGrid',
    region:'center',
    layout: 'card',
    alias: 'widget.TransactionsGrid',
    store: 'TransactionsStore',
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    border: 0,
    columns: [
        {
            text: 'ID',
            sortable: true,
            dataIndex: 'id'
        },
        {
            text: 'ФИО / Ник',
            sortable: true,
            dataIndex: 'nick'
        },
        {
            text: 'Заказ',
            width: 190,
            dataIndex: 'order_id',
            renderer: function(value) {
                return value == -1 ? 'Операция со счётом' : value;
            }
        },
        {
            text: 'Сумма',
            width: 200,
            dataIndex: 'money'
        },
        {
            text: 'Тип транзации',
            width: 200,
            dataIndex: 'type',
            renderer: function(value) {
                var imgSrc = value == 0 ? 'icon_dn' : 'icon_up';
                return '<img src="/img/' + imgSrc + '.gif" width="7" height="8" />';
            }
        }
    ],

    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
        }
    },
    initComponent: function() {
        console.log('Bar.view.TransactionsGrid');
        Bar.view.TransactionsGrid.superclass.initComponent.apply(this, arguments);
    }
});