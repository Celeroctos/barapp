Ext.define('Bar.view.AlcoCoctailsGrid', {
    extend: 'Ext.grid.Panel',
    requires: ['Ext.grid.plugin.CellEditing',
               'Bar.view.OwnersCombobox',
               'Bar.view.CoctailExtendInfoWindow'],
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
            width: 380,
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
        },
        {
            text: 'Крепость',
            width: 190,
            dataIndex: 'strength',
            editor: 'textfield'
        },
        {
            text: '', // Поле просмотра коктейля (рецепта)
            width: 50,
            dataIndex: 'id',
            renderer: function(value) {
                return '<a href="#' + value + '"><img src="/img/arrow-curve-000-left.png" alt="Посмотреть данные по коктейлю" width="16" height="16" /></a>';
            }
        }
    ],

    makeToolbar: function() {
        this.tbar = {
            height: 30,
                items: [{
                text: 'Сохранить изменения в таблице',
                listeners: {
                    click: this.saveChanges
                }
            }]
        };
    },
    saveChanges: function(btn, e, options) {
        var grid = Ext.getCmp('alcoCoctailsGrid');
        var edited = grid.edited;
        var store = grid.getStore();
        var toSend = []; // Данные на отправку, новые
        if(edited.length > 0) {
            for(var i = 0; i < edited.length; i++ ) {
                var rec = store.getAt(edited[i]);
                toSend.push({
                    name: rec.get('name'),
                    price: rec.get('price'),
                    strength: rec.get('strength'),
                    id: rec.get('id')
                });
            }

            Ext.Ajax.request({
                url: '/php/index.php/coctails/saveChanges',
                params: {
                    newData: Ext.JSON.encode(toSend)
                },
                success: function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    if(data.success == true) {
                        Ext.Msg.show({
                            title:'Сообщение',
                            msg: 'Данные успешно сохранены.',
                            buttons: Ext.MessageBox.YES,
                            buttonText: 'ОК'
                        });
                    }
                }
            });
        }
    },

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
            if(cellIndex == 6) {
                // Открывается окно с информацией о коктейле, если такого окна ещё нет. В противном случае - окно (уже имеющееся) выползает на передний план
                issetWindow = false;
                for(var i = 0; i < this.openedWindows.length; i++) {
                    if(record.get('id') == this.openedWindows[i].withCoctailId) {
                        issetWindow = true;
                        break;
                    }
                }

                if(!issetWindow) {
                    var window = Ext.create(Bar.view.CoctailExtendInfoWindow, {
                        parentGrid: this,
                        withCoctailId: record.get('id'),
                        coctailRec: record,
                        title: 'Информация о коктейле "' + record.get('name') + '"'
                    }).show();
                    this.openedWindows.push(window);
                } else {
                    this.openedWindows[i].setActive(true); // ?!
                }
            }
        }, this);
    },
    initComponent: function() {
        console.log('Bar.view.AlcoCoctailsGrid');
        this.makeToolbar();
        this.bindHandlers();
        Bar.view.AlcoCoctailsGrid.superclass.initComponent.apply(this, arguments);
    },
    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
        }
    }
});