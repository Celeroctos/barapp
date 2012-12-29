Ext.define('Bar.view.AlcoResourcesGrid', {
    extend: 'Bar.view.BaseGrid',
    requires: ['Ext.grid.plugin.CellEditing',
               'Bar.view.OwnersCombobox'],
    region:'center',
    layout: 'auto',
    alias: 'widget.AlcoResourcesGrid',
    store: 'AlcoStore',
    id: 'AlcoResourcesGrid',
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    selType: 'cellmodel',
    plugins: [
        Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 2
        })
    ],
    columns: [
        {
            text: 'ID',
            sortable: true,
            dataIndex: 'id'
        },
        {
            text: 'Наименование',
            sortable: true,
            dataIndex: 'name',
            editor: 'textfield',
            width: 200
        },
        {
            text: 'Цена',
            sortable: true,
            dataIndex: 'price',
            editor: 'textfield'
        },
        {
            text: 'Крепость',
            width: 90,
            dataIndex: 'strength',
            editor: 'textfield'
        },
        {
            text: 'Объём',
            width: 90,
            dataIndex: 'capacity',
            editor: 'textfield'
        },
        {
            text: 'Оставшийся объём',
            width: 120,
            dataIndex: 'current_capacity',
            editor: 'textfield'
        },
        {
            text: 'Владелец',
            width: 200,
            dataIndex: 'owner',
            editor: 'OwnersCombobox'
        }
    ],
    initComponent: function() {
        console.log('Bar.view.AlcoResourcesGrid');
        Bar.view.AlcoResourcesGrid.superclass.initComponent.apply(this, arguments);
    },
    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
        }
    }
});