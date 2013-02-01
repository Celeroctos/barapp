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
    edited: [], // Строки, которые редактировались
    plugins: [
        Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 2
        })
    ],

    makeColumns: function() {
        this.columns = [
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
                editor: this.ownersCombo = Ext.create('Bar.view.OwnersCombobox')
            }
        ];
    },
    bindHandlers: function() {
        this.on('validateedit', function(editor, e, options) {
            var rowIdx = e.rowIdx;
            e.record.set('owner_id', this.ownersCombo.getValue());
            var store = this.ownersCombo.getStore();
            store.each(function(rec) {
                if(rec.get('id') == this.ownersCombo.getValue()) {
                    e.record.set('owner', rec.get('nick'));
                    return;
                }
            }, this);
            for(var i = 0; i < this.edited.length; i++) {
                if(this.edited[i] == rowIdx) {
                    return;
                }
            }
            this.edited.push(rowIdx);
        }, this);
    },
    initComponent: function() {
        console.log('Bar.view.AlcoResourcesGrid');
        this.makeColumns();
        Bar.view.AlcoResourcesGrid.superclass.initComponent.apply(this, arguments);
        this.bindHandlers();
    },
    listeners: {
        'afterrender': function(grid, eOpts) {
            grid.getStore().load();
        }
    }
});