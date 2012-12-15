Ext.define('Bar.view.CoctailExtendInfoWindow', {
   extend: 'Ext.window.Window',
   layout: 'card',
   width: 400,
   minHeight: 300,
   resizable: true,
   draggable: true,
   layout: 'vbox',
   componentsArr: [], // Компоненты для данного коктейля
   charsArr: [], // Характеристики коктейля
   profitsArr: [], // Профит от коктейля

   // Заполнить компонентную таблицу компонентами
   fillComponentsGrid: function() {
        var components = this.coctailRec.get('components');
        for(var i = 0; i < components.length; i++) {
            this.componentsArr[i] = {
                name: components[i].name,
                capacity: components[i].c_capacity
            };
        }
   },
   fillProfitGrid: function() {
       var profits = this.coctailRec.get('ownersProfit');
       var counter = 0;
       for(var i in profits) {
            this.profitsArr[counter] = {
                nick: i,
                profit: profits[i]
            };
            counter++;
       }
    },

   makeItems: function() {
       this.items = [{
           xtype: 'grid',
           title: 'Характеристики',
           store: Ext.create('Ext.data.Store', {
               fields:['field', 'value'],
               data: {
                   items: this.charsArr
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
               {
                   text: 'Характеристика',
                   dataIndex: 'field'
               },
               {
                   text: 'Значение',
                   dataIndex: 'value',
                   flex: 1,
                   renderer: function(value) {
                        return '<div style="white-space: normal; width: 250px;">' + value + '</div>'
                   }
               },
           ],
           width: 400
       }, {
           xtype: 'grid',
           title: 'Компоненты',
           store: Ext.create('Ext.data.Store', {
               fields:['name', 'capacity'],
               data: {
                   items: this.componentsArr
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
               { text: 'Компонент',  dataIndex: 'name', width: 300 },
               { text: 'Объём', dataIndex: 'capacity', flex: 1 },
           ],
           width: 400
       }, {
           xtype: 'grid',
           title: 'Профит хозяевам бара',
           store: Ext.create('Ext.data.Store', {
               fields:['nick', 'profit'],
               data: {
                   items: this.profitsArr
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
               { text: 'Ник',  dataIndex: 'nick', width: 300 },
               { text: 'Сумма', dataIndex: 'profit', flex: 1 },
           ],
           width: 400
       }];
   },

   fillCharsGrid: function() {
       this.charsArr = [
           { field: 'Крепость',  value: this.coctailRec.get('strength')  },
           { field: 'Объём',  value: this.coctailRec.get('capacity') },
           { field: 'Цена',  value: this.coctailRec.get('price')  },
           { field: 'Рецепт', value: this.coctailRec.get('recipe') }
       ]
   },

   listeners: {
       close: function(panel, eOpts) {
           // Ищем тот, что можно закрыть. Удаляем индекс окна
           var gridPanel = panel.parentGrid;
           for(var i = 0; i < gridPanel.openedWindows.length; i++) {
               if(gridPanel.openedWindows[i].withCoctailId == panel.withCoctailId) {
                    gridPanel.openedWindows = gridPanel.openedWindows.slice(0, i - 1).concat(gridPanel.openedWindows.slice(i + 1));
                    return;
               }
           }
       }
   },
   initComponent: function() {
       this.fillComponentsGrid();
       this.fillProfitGrid();
       this.fillCharsGrid();
       this.makeItems();
       console.log('Bar.view.CoctailExtendInfoWindow');
       Bar.view.CoctailExtendInfoWindow.superclass.initComponent.apply(this, arguments);
   }
});