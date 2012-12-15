Ext.define('Bar.view.ClientsInfoGrid', {
    extend: 'Ext.grid.Panel',
    requires: ['Bar.view.ClientExtendInfoWindow'],
    region:'center',
    layout: 'card',
    alias: 'widget.ClientsInfoGrid',
    store: 'ClientsStore',
    openedWindows: [], // Открытые окна с информацией о пользователях
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    columns: [
        {
            text: '',
            sortable: false,
            dataIndex: 'detailCheckbox',
            width: 30
        },
        {
            text: 'ID',
            sortable: true,
            dataIndex: 'id'
        },
        {
            text: 'ФИО / Ник',
            sortable: true,
            dataIndex: 'nick'
        },
        {
            text: 'Email',
            width: 190,
            dataIndex: 'email'
        },
        {
            text: 'Потраченная сумма',
            width: 200,
            dataIndex: 'moneyOut'
        }
    ],
    initComponent: function() {
        console.log('Bar.view.ClientsInfoGrid');
        Bar.view.ClientsInfoGrid.superclass.initComponent.apply(this, arguments);
    },
    listeners: {
        cellclick: function(grid, td, cellIndex, record, tr, rowIndex, e, eOpts) {
            if(cellIndex == 0) {
               // Открывается окно с информацией о пользователе, если такого окна ещё нет. В противном случае - окно выползает на передний план
               issetWindow = false;
               for(var i = 0; i < this.openedWindows.length; i++) {
                   if(record.get('id') == this.openedWindows[i].withUserId) {
                       issetWindow = true;
                       break;
                   }
               }

               if(!issetWindow) {
                   var window = Ext.create(Bar.view.ClientExtendInfoWindow);
                   this.openedWindows.push(window);
                   window.withUserId = record.get('id');
                   window.show();
               } else {
                   this.openedWindows[i].setActive(true); // ?!
               }
            }
        }
    }
});