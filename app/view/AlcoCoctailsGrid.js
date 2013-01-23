Ext.define('Bar.view.AlcoCoctailsGrid', {
    extend: 'Bar.view.BaseGrid',
    requires: ['Ext.grid.plugin.CellEditing',
               'Bar.view.OwnersCombobox',
               'Bar.view.CoctailExtendInfoWindow',
               'Bar.view.EditCoctailWindow'],
    region:'center',
    layout: 'auto',
    alias: 'widget.AlcoCoctailsGrid',
    store: 'AlcoCoctailsStore',
    id: 'AlcoCoctailsGrid',
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    selType: 'cellmodel',
    edited: [], // пока так. Если на строке кликали, её могли менять. Нехорошо, потому что строку могли и не менять =/
    openedWindows: [], // Открытые окна с коктейлями
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
            text: 'Название',
            sortable: true,
            dataIndex: 'name',
            width: 250,
            editor: 'textfield'
        },
        {
            text: 'Цена',
            sortable: true,
            dataIndex: 'price',
            editor: 'textfield'
        },
        {
            text: 'Процент прибыли',
            sortable: true,
            dataIndex: 'profit_prozent',
            editor: 'textfield'
        },
        {
            text: 'Объём',
            width: 190,
            dataIndex: 'capacity',
        },
        {
            text: 'Крепость',
            width: 150,
            dataIndex: 'strength',
            editor: 'textfield'
        },
        {
            text: '', // Поле просмотра коктейля (рецепта)
            width: 40,
            dataIndex: 'id',
            renderer: function(value) {
                return '<a href="#' + value + '"><img src="/img/arrow-curve-000-left.png" alt="Посмотреть данные по коктейлю" width="16" height="16" /></a>';
            }
        },
        {
            text: '', // Поле редактирования коктейля
            width: 40,
            dataIndex: 'id',
            renderer: function(value) {
                return '<a href="#' + value + '"><img src="/img/edit-signiture.png" alt="Редактировать коктейль" width="16" height="16" /></a>';
            }
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

        this.on('cellclick', function(grid, td, cellIndex, record, tr, rowIndex, e, eOpts) {
            if(cellIndex == 7 || cellIndex == 8) {
                // Открывается окно с информацией о коктейле, если такого окна ещё нет. В противном случае - окно (уже имеющееся) выползает на передний план
                issetWindow = false;
                for(var i = 0; i < this.openedWindows.length; i++) {
                    if((cellIndex == 7 && this.openedWindows[i].id == 'view' + record.get('id'))
                        || (cellIndex == 8 && this.openedWindows[i].id == 'edit' + record.get('id'))) {
                        issetWindow = true;
                        break;
                    }
                }

                if(!issetWindow) {
                    if(cellIndex == 7) {
                        var window = Ext.create(Bar.view.CoctailExtendInfoWindow, {
                            parentGrid: this,
                            withCoctailId: record.get('id'),
                            coctailRec: record,
                            id: 'view' + record.get('id'),
                            title: 'Информация о коктейле "' + record.get('name') + '"'
                        }).show();
                    }
                    if(cellIndex == 8) {
                        var window = Ext.create(Bar.view.EditCoctailWindow, {
                            parentGrid: this,
                            withCoctailId: record.get('id'),
                            coctailRec: record,
                            id: 'edit' + record.get('id'),
                            title: 'Редактирование коктейля "' + record.get('name') + '"'
                        }).show();
                    }
                    this.openedWindows.push(window);
                } else {
                    this.openedWindows[i].setActive(true); // ?!
                }
            }
        }, this);
    },
    initComponent: function() {
        console.log('Bar.view.AlcoCoctailsGrid');
        this.bindHandlers();
        Bar.view.AlcoCoctailsGrid.superclass.initComponent.apply(this, arguments);
    },
    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
        }
    }
});