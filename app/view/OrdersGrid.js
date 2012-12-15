Ext.define('Bar.view.OrdersGrid', {
    extend: 'Ext.grid.Panel',
    requires: ['Ext.grid.plugin.CellEditing',
               'Bar.view.ClientsCombobox',
               'Bar.view.OrdersStatusCombobox'],
    region: 'center',
    layout: 'auto',
    alias: 'widget.OrdersGrid',
    store: 'OrdersStore',
    id: 'ordersGrid',
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    selType: 'cellmodel',
    colors: ['order-0', 'order-1', 'order-2', 'order-3', 'order-4', 'order-5'], // Цвета строк для статусов
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
            editor: 'textfield',
            width: 180
        },
        {
            text: 'Клиент',
            width: 180,
            dataIndex: 'nick',
            editor: 'ClientsCombobox'
        },
        {
            text: 'Цена',
            sortable: true,
            dataIndex: 'price',
            width: 100,
        },
        {
            text: 'Цена полная',
            width: 100,
            dataIndex: 'price_full',
            editor: 'textfield'
        },
        {
            text: 'Скидка',
            width: 100,
            dataIndex: 'discount',
            editor: 'textfield'
        },
        {
            text: 'Статус',
            width: 130,
            dataIndex: 'status',
            editor: 'OrdersStatusCombobox'
        },
        {
            text: 'Оплачено',
            width: 100,
            dataIndex: 'priced',
            editor: 'textfield'
        },
        {
            text: 'Приоритет',
            width: 80,
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
            },{
                text: 'Удалить отмеченные',
                listeners: {
                    click: this.deleteChecked
                }
            }]
        };
    },

    saveChanges: function() {

    },

    deleteChecked: function() {
        var selected = [];
        var selection = Ext.getCmp('ordersGrid').getSelectionModel().getSelection();
        for(var i = 0; i < selection.length; i++) {
            selected.push(selection[i].get('id'));
        }
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

    initComponent: function() {
        console.log('Bar.view.OrdersGrid');
        this.makeToolbar();
        Bar.view.OrdersGrid.superclass.initComponent.apply(this, arguments);
    },
    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
            grid.getView().getRowClass = function(record, rowIndex, rowParams, store){
                return Ext.getCmp('ordersGrid').colors[record.get("status")];
            }
        }
    }
});