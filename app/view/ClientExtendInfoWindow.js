Ext.define('Bar.view.ClientExtendInfoWindow', {
   extend: 'Ext.window.Window',
   layout: 'card',
   width: 500,
   height: 300,
   title: 'Информация о клиенте',
   resizable: true,
   draggable: true,
   ordersArr: [], // Заказы клиента
   openedWindows: [], // Открытые окна

   fillOrdersGrid: function() {
       this.ordersArr = [];
       var orders = this.coctailRec.get('orders');
       console.log(orders);
       for(var i = 0; i < orders.length; i++) {
           this.ordersArr[i] = {
               name: orders[i].coctail_name,
               quantity: orders[i].quantity,
               price: orders[i].price,
               priced: orders[i].priced
           };
       }
   },

   makeItems: function() {
        this.items = [{
            xtype: 'grid',
            title: 'Заказы',
            store: Ext.create('Ext.data.Store', {
                fields:['name', 'quantity', 'price', 'priced'],
                data: {
                    items: this.ordersArr
                },
                proxy: {
                    type: 'memory',
                    reader: {
                        type: 'json',
                        root: 'items'
                    }
                }
            }),
            columns: [
                { text: 'Коктейль',  dataIndex: 'name', width: 200 },
                { text: 'Количество', dataIndex: 'quantity', flex: 1, width: 100 },
                { text: 'Цена', dataIndex: 'price', flex: 1, width: 100 },
                { text: 'Уплачено', dataIndex: 'priced', flex: 1},
            ],
            width: 500
        }];
    },

    listeners: {
        close: function(panel, eOpts) {
            // Ищем тот, что можно закрыть. Удаляем индекс окна
            var gridPanel = panel.parentGrid;
            for(var i = 0; i < gridPanel.openedWindows.length; i++) {
                if(gridPanel.openedWindows[i].withCoctailId == panel.withUserId) {
                    gridPanel.openedWindows = gridPanel.openedWindows.slice(0, i - 1).concat(gridPanel.openedWindows.slice(i + 1));
                    return;
                }
            }
        }
    },
    initComponent: function() {
        this.fillOrdersGrid();
        this.makeItems();
        console.log('Bar.view.ClientExtendInfoWindow');
        Bar.view.ClientExtendInfoWindow.superclass.initComponent.apply(this, arguments);
    }
});