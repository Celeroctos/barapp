Ext.define('Bar.view.ClientsInfoGrid', {
    extend: 'Ext.grid.Panel',
    requires: ['Bar.view.ClientExtendInfoWindow',
               'Bar.view.FilterModeCombobox'],
    region:'center',
    layout: 'card',
    alias: 'widget.ClientsInfoGrid',
    store: 'ClientsStore',
    openedWindows: [], // Открытые окна с информацией о пользователях
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
            text: '', // Поле просмотра заказов клиента
            width: 50,
            dataIndex: 'id',
            renderer: function(value) {
                return '<a href="#' + value + '"><img src="/img/arrow-curve-000-left.png" alt="Посмотреть данные по пользователю" width="16" height="16" /></a>';
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
            },
            '<strong>Фильтровать:</strong>',
            {
                xtype: 'FilterModeCombobox',
                id: 'clientsFilterCombo'
            },
            {
                xtype: 'textfield',
                id: 'clientsFilterField',
                listeners: {
                    change: function(field, newValue, oldValue, eOpts) {
                        Ext.getCmp('clientsGrid').getStore().filterBy(function(rec, id) {
                            var comboValue = Ext.getCmp('clientsFilterCombo').getValue();
                            if(comboValue === 0) {
                                return rec.get('nick').toUpperCase().indexOf(newValue.toUpperCase()) == 0;
                            } else if(comboValue == 1) {
                                return rec.get('nick').toUpperCase().indexOf(newValue.toUpperCase()) != -1;
                            }
                            return true;
                        });
                    }
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
            if(cellIndex == 7) {
               // Открывается окно с информацией о пользователе, если такого окна ещё нет. В противном случае - окно выползает на передний план
               issetWindow = false;
               for(var i = 0; i < this.openedWindows.length; i++) {
                   if(record.get('id') == this.openedWindows[i].withUserId) {
                       issetWindow = true;
                       break;
                   }
               }

               if(!issetWindow) {
                   var window = Ext.create(Bar.view.ClientExtendInfoWindow, {
                       parentGrid: this,
                       withCoctailId: record.get('id'),
                       coctailRec: record,
                       title: 'Информация о пользователе ' + record.get('nick')
                   }).show();
                   this.openedWindows.push(window);
               } else {
                   this.openedWindows[i].setActive(true); // ?!
               }
            }
        }
    }
});