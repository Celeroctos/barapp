Ext.define('Bar.view.EditCoctailWindow', {
   extend: 'Ext.window.Window',
   layout: 'card',
   width: 500,
   minHeight: 300,
   resizable: true,
   draggable: true,
   layout: 'vbox',
   requires: ['Bar.view.CoctailAddPanel'],
   componentsArr: [], // Компоненты для данного коктейля
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
   makeItems: function() {
       this.items.add(Ext.create('Bar.view.CoctailAddPanel', {
            prefix: this.id
       }));
   },
   initComponent: function() {
       console.log('Bar.view.EditCoctailWindow');
       Bar.view.EditCoctailWindow.superclass.initComponent.apply(this, arguments);
       this.makeItems();
   }
});