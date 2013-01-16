Ext.define('Bar.view.InventoryResourcesGrid', {
    extend: 'Bar.view.BaseGrid',
    requires: ['Ext.grid.plugin.CellEditing',
               'Bar.view.OwnersCombobox'],
    region:'center',
    layout: 'auto',
    alias: 'widget.InventoryResourcesGrid',
    store: 'InventoryStore',
    id: 'InventoryResourcesGrid',
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    selType: 'cellmodel',
    edited: [],
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
            text: 'Количество / объём',
            width: 190,
            dataIndex: 'capacity',
            editor: 'textfield'
        },
        {
            text: 'Оставшийся объём / количество',
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
    bindHandlers: function() {
        this.on('validateedit', function(editor, e, options) {
            var rowIdx = e.rowIdx;
            for(var i = 0; i < this.edited.length; i++) {
                if(this.edited[i] == rowIdx) {
                    return;
                }
            }
            this.edited.push(rowIdx);
        }, this);
    },
    initComponent: function() {
        console.log('Bar.view.InventoryResourcesGrid');
        Bar.view.InventoryResourcesGrid.superclass.initComponent.apply(this, arguments);
        this.bindHandlers();
    },
    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
        }
    }
});