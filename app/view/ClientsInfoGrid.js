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
        },
        {
            text: 'Пришедшая сумма',
            width: 200,
            dataIndex: 'moneyIn'
        },
        {
            text: 'Баланс',
            width: 200,
            dataIndex: 'difference',
            renderer: function(value) {
                if(value >= 0) {
                    var className = 'blue';
                } else {
                    var className = 'red';
                }
                return "<strong class='" + className + "'>" + value + "</strong>";
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
            },
            '<strong>С отмеченными:</strong>',
            {
                text: 'удалить',
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
        var selection = Ext.getCmp('clientsGrid').getSelectionModel().getSelection();
        for(var i = 0; i < selection.length; i++) {
            selected.push(selection[i].get('id'));
        }
        var data = {
            ids: Ext.JSON.encode(selected)
        };
        if(selected.length > 0) {
            Ext.Ajax.request({
                url: '/php/index.php/users/delUsers',
                params: data,
                success: function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    if(data.success == true) {
                        // Обновляем таблицу
                        Ext.getCmp('clientsGrid').getStore().reload();
                    }
                }
            });
        }
    },

    initComponent: function() {
        console.log('Bar.view.ClientsInfoGrid');
        this.makeToolbar();
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