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
            text: 'Баланс',
            width: 200,
            dataIndex: 'difference',
            renderer: function(value) {
                if(value >= 0) {
                   var className = 'blue';
                } else {
                   var className = 'red';
                }
                return "<strong class='" + className + "'>" + value + "</strong>";
            }
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