Ext.define('Bar.view.OwnersGrid', {
    extend: 'Ext.grid.Panel',
    region:'center',
    layout: 'card',
    alias: 'widget.OwnersGrid',
    store: 'OwnersStore',
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    columns: [
        {
            text: '',
            sortable: false,
            dataIndex: 'detailCheckbox',
            width: 30
        },
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
            text: 'Email',
            width: 190,
            dataIndex: 'email'
        },
        {
            text: 'Потраченная сумма',
            width: 200,
            dataIndex: 'moneyOut'
        },
        {
            text: 'Пришедшая сумма',
            width: 200,
            dataIndex: 'moneyIn'
        },
        {
            text: 'Разница',
            width: 200,
            dataIndex: 'difference'
        }
    ],
    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
        }
    },
    initComponent: function() {
        console.log('Bar.view.OwnersGrid');
        Bar.view.OwnersGrid.superclass.initComponent.apply(this, arguments);
    }
});