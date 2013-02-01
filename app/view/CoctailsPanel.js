Ext.define('Bar.view.CoctailsPanel', {
    extend: 'Ext.TabPanel',
    requires: ['Bar.view.AlcoCoctailsGrid',
               'Bar.view.NoAlcoCoctailsGrid',
               'Bar.controller.ResourcesController',
               'Bar.view.BarCombobox'],
    alias: 'widget.CoctailsPanel',
    layout: 'auto',
    region: 'center',
    firstLoad: true,
    title: '',
    items: [
        {
            xtype: 'AlcoCoctailsGrid',
            id: 'alcoCoctailsGrid',
            title: 'Алкогольные',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
        {
            xtype: 'NoAlcoCoctailsGrid',
            id: 'noAlcoCoctailsGrid',
            title: 'Безалкогольные',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
    ],

    makeToolbar: function() {
        this.tbar = {
            height: 30,
            items: [{
                text: 'Сохранить изменения в таблице',
                listeners: {
                    click: Ext.bind(this.saveChanges, this)
                }
            },
            '<strong>C отмеченными:</strong>',
            {
                xtype: 'button',
                text: 'удалить',
                handler: Ext.bind(this.deleteChecked, this)
            },
            'перенести в бар',
            this.barCombo = Ext.create('Bar.view.BarCombobox', {
                id: 'moveCoctailsToCombo',
                setDefault: false,
                store: Ext.create('Bar.store.BarFilteredStore', {
                    settings: this.settings
                })
            }),
            {
                text: 'ок',
                listeners: {
                    click: Ext.bind(this.moveToBar, this)
                }
            },
            '<strong>Дополнительно:</strong>',
            {
                xtype: 'button',
                text: 'Обновить таблицу',
                handler: function() {
                    Ext.getCmp('alcoCoctailsGrid').getStore().reload();
                    Ext.getCmp('noAlcoCoctailsGrid').getStore().reload();
                }
            }]
        };
    },

    getActiveGrid: function() {
        return this.getActiveTab();
    },


    getSelected: function() {
        var selected = [];
        var grid = this.getActiveTab();

        var selection = Ext.getCmp(grid.id).getSelectionModel().getSelection();
        for(var i = 0; i < selection.length; i++) {
            selected.push(selection[i].get('id'));
        }
        return selected;
    },

    moveToBar: function() {
        var selected = this.getSelected();
        var grid = this.getActiveTab();
        var dataIn = {
            ids: Ext.JSON.encode(selected),
            to: Ext.getCmp('moveCoctailsToCombo').getValue()
        };
        if(selected.length > 0) {
            Ext.Ajax.request({
                url: '/php/index.php/coctails/moveToBar',
                params: dataIn,
                success: Ext.bind(function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    Ext.Msg.show({
                        title:'Сообщение',
                        msg: data.data,
                        buttons: Ext.MessageBox.YES,
                        buttonText: 'ОК'
                    });
                    Ext.getCmp(grid.id).getStore().reload();
                })
            })
        }
    },

    deleteChecked: function() {
        var selected = this.getSelected();
        var grid = this.getActiveTab();
        var data = {
            ids: Ext.JSON.encode(selected)
        };
        if(selected.length > 0) {
            Ext.Ajax.request({
                url: '/php/index.php/coctails/delCoctail',
                params: data,
                success: function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    if(data.success == true) {
                        // Обновляем таблицу
                        Ext.getCmp(grid.id).getStore().reload();
                    }
                }
            });
        }
    },

    saveChanges: function(btn, e, options) {
        var grid = this.getActiveGrid();
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
                    profit_prozent: rec.get('profit_prozent'),
                    profit_prozent_saved: rec.get('profit_prozent_saved'),
                    id: rec.get('id')
                });
            }
            grid.edited = [];

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
                        grid.getStore().reload();
                    }
                }
            });
        }
    },

    updatePanel: function() {
        Ext.getCmp('alcoCoctailsGrid').getStore().reload();
        Ext.getCmp('noAlcoCoctailsGrid').getStore().reload();
        // Первый раз не нужно грузить
        if(!this.firstLoad) {
            this.barCombo.fireEvent('afterrender', this.barCombo);
        } else {
            this.firstLoad = false;
        }
    },

    initComponent: function() {
        console.log('Bar.view.CoctailsPanel');
        this.makeToolbar();
        Bar.view.CoctailsPanel.superclass.initComponent.apply(this, arguments)
    }
});