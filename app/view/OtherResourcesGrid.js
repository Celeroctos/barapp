Ext.define('Bar.view.OtherResourcesGrid', {
    extend: 'Ext.grid.Panel',
    requires: ['Ext.grid.plugin.CellEditing',
               'Bar.view.OwnersCombobox'],
    region:'center',
    layout: 'auto',
    alias: 'widget.OtherResourcesGrid',
    store: 'OtherStore',
    id: 'OtherResourcesGrid',
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
            editor: 'textfield'
        },
        {
            text: 'Цена',
            sortable: true,
            dataIndex: 'price',
            editor: 'textfield'
        },
        {
            text: 'Объём',
            width: 190,
            dataIndex: 'capacity',
            editor: 'textfield'
        },
        {
            text: 'Оставшийся объём',
            width: 190,
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
        console.log('Bar.view.OtherResourcesGrid');
        Bar.view.OtherResourcesGrid.superclass.initComponent.apply(this, arguments);
    },
    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
        }
    }
});