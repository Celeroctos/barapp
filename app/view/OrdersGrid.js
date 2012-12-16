Ext.define('Bar.view.OrdersGrid', {
    extend: 'Ext.grid.Panel',
    requires: ['Ext.grid.plugin.CellEditing',
               'Bar.view.ClientsCombobox',
               'Bar.view.OrdersStatusCombobox',
               'Bar.view.CoctailsCombobox'],
    region: 'center',
    layout: 'auto',
    alias: 'widget.OrdersGrid',
    store: 'OrdersStore',
    id: 'ordersGrid',
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    selType: 'cellmodel',
    colors: ['order-0', 'order-1', 'order-2', 'order-3', 'order-4', 'order-5'], // Цвета строк для статусов
    edited: [], // Строки, которые редактировались
    plugins: [
        Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 2
        })
    ],
    columns: [
        {
            text: 'ID',
            sortable: true,
            dataIndex: 'id',
            width: 40,
        },
        {
            text: 'Название',
            sortable: true,
            dataIndex: 'coctail_name',
            editor: 'CoctailsCombobox',
            width: 150
        },
        {
            text: 'Количество',
            sortable: true,
            dataIndex: 'quantity',
            editor: 'textfield',
            width: 80
        },
        {
            text: 'Клиент',
            width: 150,
            dataIndex: 'nick',
            editor: {
                xtype: 'ClientsCombobox',
                id: 'orderCellCombo'
            },
            renderer: function(value) {
                var combo = Ext.getCmp('orderCellCombo');
                if(typeof(combo) != 'undefined') {
                    var record = combo.findRecord(combo.valueField, value);
                    return record ? record.get(combo.displayField) : combo.valueNotFoundText;
                }

                return value;
            },
        },
        {
            text: 'Дата создания',
            width: 130,
            dataIndex: 'create_date',
        },
        {
            text: 'Цена',
            sortable: true,
            dataIndex: 'price',
            width: 60,
        },
        {
            text: 'Цена полная',
            width: 80,
            dataIndex: 'price_full',
        },
        {
            text: 'Скидка',
            width: 80,
            dataIndex: 'discount',
            editor: 'textfield'
        },
        {
            text: 'Статус',
            width: 100,
            dataIndex: 'status',
            editor: 'OrdersStatusCombobox',
            renderer: function(value) {
                var statuses = ['Заказан',
                                'Оплачивается',
                                'Оплачен',
                                'В процессе',
                                'Готов',
                                'Готов и ожидает'];
                return statuses[value];
            }
        },
        {
            text: 'Оплачено',
            width: 70,
            dataIndex: 'priced',
            editor: 'textfield'
        },
        {
            text: 'Приоритет',
            width: 70,
            dataIndex: 'priority',
            editor: 'textfield'
        },
    ],

    makeToolbar: function() {
        this.tbar = {
            height: 30,
            items: [{
                text: 'Сохранить изменения в таблице',
                listeners: {
                    click: this.saveChanges
                }
            },
            '<strong>С отмеченными:</strong>',
            {
                text: 'удалить',
                listeners: {
                    click: this.deleteChecked
                }
            },{
                text: 'перенести в историю транзакций',
                listeners: {
                    click: this.putToHistory
                }
            },
            'изменить статус на:',
            {
                xtype: 'OrdersStatusCombobox',
                id: 'tbarStatusCombo'
            },
            {
                text: 'ок',
                handler: this.changeStatus
            }]
        };
    },

    changeStatus: function() {
        var selected = Ext.getCmp('ordersGrid').getSelected();
        var status = Ext.getCmp('tbarStatusCombo').getValue();
        if(selected.length > 0 && status != null) {
            var toSend = [];
            for(var i = 0; i < selected.length; i++ ) {
                toSend.push({
                    id: selected[i],
                    status: status
                });
            }

            Ext.Ajax.request({
                url: '/php/index.php/orders/saveChanges',
                params: {
                    forced: 1,
                    newData: Ext.JSON.encode(toSend)
                },
                success: function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    if(data.success == true) {
                        Ext.Msg.show({
                            title:'Сообщение',
                            msg: 'Статус успешно изменён.',
                            buttons: Ext.MessageBox.YES,
                            buttonText: 'ОК'
                        });
                        Ext.getCmp('ordersGrid').getStore().reload();
                    }
                }
            });
        }
    },

    saveChanges: function() {
        var grid = Ext.getCmp('ordersGrid');
        var edited = grid.edited;
        var store = grid.getStore();
        var toSend = []; // Данные на отправку, новые
        if(edited.length > 0) {
            for(var i = 0; i < edited.length; i++ ) {
                var rec = store.getAt(edited[i]);
                toSend.push({
                    id: rec.get('id'),
                    coctail: rec.get('coctail_id'),
                    client: rec.get('owner_id'),
                    discount: rec.get('discount'),
                    status: rec.get('status'),
                    priced: rec.get('priced'),
                    priority: rec.get('priority'),
                    quantity:  rec.get('quantity')
                });
            }

            Ext.Ajax.request({
                url: '/php/index.php/orders/saveChanges',
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
                        Ext.getCmp('ordersGrid').getStore().reload();
                    }
                }
            });
        }
    },

    putToHistory: function() {
        var selected = Ext.getCmp('ordersGrid').getSelected();
        var data = {
            ids: Ext.JSON.encode(selected)
        };
        if(selected.length > 0) {
            Ext.Ajax.request({
                url: '/php/index.php/orders/moveOrdersToHistory',
                params: data,
                success: function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    if(data.success == true) {
                        // Обновляем таблицу
                        Ext.getCmp('ordersGrid').getStore().reload();
                    }
                }
            });
        }
    },

    getSelected: function() {
        var selected = [];
        var selection = Ext.getCmp('ordersGrid').getSelectionModel().getSelection();
        for(var i = 0; i < selection.length; i++) {
            selected.push(selection[i].get('id'));
        }
        return selected;
    },

    deleteChecked: function() {
        var selected = Ext.getCmp('ordersGrid').getSelected();
        var data = {
            ids: Ext.JSON.encode(selected)
        };
        if(selected.length > 0) {
            Ext.Ajax.request({
                url: '/php/index.php/orders/delOrders',
                params: data,
                success: function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    if(data.success == true) {
                        // Обновляем таблицу
                        Ext.getCmp('ordersGrid').getStore().reload();
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

        this.on('afterrender', function(grid, eOpts) {
            grid.getStore().load();
            grid.getView().getRowClass = function(record, rowIndex, rowParams, store){
                return Ext.getCmp('ordersGrid').colors[record.get("status")];
            }
        }, this);
    },

    initComponent: function() {
        console.log('Bar.view.OrdersGrid');
        this.makeToolbar();
        this.bindHandlers();
        Bar.view.OrdersGrid.superclass.initComponent.apply(this, arguments);
    }
});