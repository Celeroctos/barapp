Ext.define('Bar.view.OwnersGrid', {
    extend: 'Ext.grid.Panel',
    region:'center',
    layout: 'card',
    alias: 'widget.OwnersGrid',
    store: 'OwnersStore',
    selModel: new Ext.create('Ext.selection.CheckboxModel', {}),
    columns: [
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
            width: 150,
            dataIndex: 'moneyOut'
        },
        {
            text: 'Пришедшая сумма',
            width: 150,
            dataIndex: 'moneyIn'
        },
        {
            text: 'Баланс',
            width: 150,
            dataIndex: 'difference',
            renderer: function(value) {
                if(value >= 0) {
                   var className = 'blue';
                } else {
                   var className = 'red';
                }
                return "<strong class='" + className + "'>" + value + "</strong>";
            }
        },
        {
            text: 'Чистая прибыль',
            width: 150,
            dataIndex: 'clean_profit',
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
                xtype: 'button',
                text: 'удалить',
                handler: this.deleteChecked
            }]
        };
    },

    saveChanges: function() {

    },

    deleteChecked: function() {
        var selected = [];
        var selection = Ext.getCmp('ownersGrid').getSelectionModel().getSelection();
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
                        Ext.getCmp('ownersGrid').getStore().reload();
                    }
                }
            });
        }
    },

    listeners: {
        afterrender: function(grid, eOpts) {
            grid.getStore().load();
        }
    },
    initComponent: function() {
        console.log('Bar.view.OwnersGrid');
        this.makeToolbar();
        Bar.view.OwnersGrid.superclass.initComponent.apply(this, arguments);
    }
});