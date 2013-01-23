Ext.define('Bar.view.BarResourcesPanel', {
    extend: 'Ext.TabPanel',
    requires: ['Bar.view.AlcoResourcesPanel',
               'Bar.view.NoAlcoResourcesPanel',
               'Bar.view.OtherResourcesPanel',
               'Bar.view.InventoryResourcesPanel',
               'Bar.view.BarCombobox',
               'Bar.controller.ResourcesController'],
    alias: 'widget.BarResourcesPanel',
    layout: 'auto',
    region: 'center',
    title: '',
    firstLoad: true,
    items: [
        {
            title: 'Алкоголь',
            xtype: 'AlcoResourcesPanel',
            id: 'alcoTab'
        },
        {
            title: 'Безалкогольное (сиропы, соки и.т.д)',
            xtype: 'NoAlcoResourcesPanel',
            id: 'noAlcoTab'
        },
        {
            title: 'Фрукты, специи, овощи',
            xtype: 'OtherResourcesPanel',
            id: 'otherTab'
        },
        {
            title: 'Стекло и барный инвентарь',
            xtype: 'InventoryResourcesPanel',
            id: 'inventoryTab'
        }
    ],
    updatePanel: function() {
        Ext.getCmp('alcoTab').updatePanel();
        Ext.getCmp('noAlcoTab').updatePanel();
        Ext.getCmp('otherTab').updatePanel();
        Ext.getCmp('inventoryTab').updatePanel();
        // Первый раз не нужно грузить
        if(!this.firstLoad) {
            this.barCombo.fireEvent('afterrender', this.barCombo);
        } else {
            this.firstLoad = false;
        }
    },

    deleteChecked: function() {
        var selected = this.getSelected();

        var dataIn = {
            ids: Ext.JSON.encode(selected)
        };
        if(selected.length > 0) {
            Ext.Ajax.request({
                url: '/php/index.php/components/getDependences',
                params: dataIn,
                success: Ext.bind(function(response) {
                    var data = Ext.JSON.decode(response.responseText);
                    if(data.success == true) {
                        if(data.coctailsNames != false) {
                            Ext.Msg.show({
                                title:'Сообщение',
                                msg: 'Следующие коктейли будут недоступны: ' + data.coctailsNames + '. Вы уверены, что хотите удалить компоненты?',
                                buttons: Ext.MessageBox.YESNO,
                                fn: Ext.bind(function(btn) {
                                    console.log(this);
                                    if(btn == 'yes') {
                                        this.deleteStep2(dataIn, grid);
                                    }
                                }, this)
                            });
                        } else {
                            this.deleteStep2(dataIn, grid);
                        }
                    }
                }, this)
            });
        }
    },

    deleteStep2: function(dataIn, grid) {
        var activeTab = this.getActiveTab();
        var grid = activeTab.getGrid();
        Ext.Ajax.request({
            url: '/php/index.php/components/delComponents',
            params: dataIn,
            success: function(response) {
                var data = Ext.JSON.decode(response.responseText);
                if(data.success == true) {
                    // Обновляем таблицу
                    Ext.getCmp(grid.id).getStore().reload();
                }
            }
        });
    },

    makeToolbar: function() {
        return this.tbar = {
            height: 30,
            items: [{
                    text: 'Сохранить изменения в таблице',
                    listeners: {
                        click: Ext.bind(this.saveChanges, this)
                    }
                },
                '<strong>С отмеченными:</strong>',
                {
                    text: 'удалить',
                    listeners: {
                        click: Ext.bind(this.deleteChecked, this)
                    }
                },
                '|',
                'перенести в бар',
                this.barCombo = Ext.create('Bar.view.BarCombobox', {
                    id: 'moveComponentsToCombo',
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
                    text: 'обновить таблицу',
                    listeners: {
                        click: Ext.bind(this.updatePanel, this)
                    }
                }
            ]
        };
    },

    getSelected: function() {
        var selected = [];
        var activeTab = this.getActiveTab();
        var grid = activeTab.getGrid();

        var selection = Ext.getCmp(grid.id).getSelectionModel().getSelection();
        for(var i = 0; i < selection.length; i++) {
            selected.push(selection[i].get('id'));
        }
        return selected;
    },

    moveToBar: function() {
        var activeTab = this.getActiveTab();
        var grid = activeTab.getGrid();
        var selected = this.getSelected();
        var dataIn = {
            ids: Ext.JSON.encode(selected),
            to: Ext.getCmp('moveComponentsToCombo').getValue()
        };
        if(selected.length > 0) {
            Ext.Ajax.request({
                url: '/php/index.php/components/moveToBar',
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

    saveChanges: function() {
        var tabs = this.items;
        var toSend = []; // Данные на отправку, новые
        for(var i = 0; i < tabs.length; i++) {
            var grid = tabs.getAt(i).getGrid();
            var edited = grid.edited;
            var store = grid.getStore();
            if(edited.length > 0) {
                for(var j = 0; j < edited.length; j++ ) {
                    var rec = store.getAt(edited[j]);
                    toSend.push({
                        id: rec.get('id'),
                        name: rec.get('name'),
                        capacity: rec.get('capacity'),
                        strength: rec.get('strength'),
                        current_capacity: rec.get('current_capacity'),
                        price: rec.get('price'),
                        owner: rec.get('owner_id')
                    });
                }
            }
        }

        Ext.Ajax.request({
            url: '/php/index.php/components/saveChanges',
            params: {
                newData: Ext.JSON.encode(toSend)
            },
            success: function(response) {
                var data = Ext.JSON.decode(response.responseText);
                if(data.success == true) {
                    var data = Ext.JSON.decode(response.responseText);
                    Ext.Msg.show({
                        title:'Сообщение',
                        msg: data.data,
                        buttons: Ext.MessageBox.YES,
                        buttonText: 'ОК'
                    });
                    for(var i = 0; i < tabs.length; i++) {
                        tabs.getAt(i).getGrid().getStore().reload();
                    }
                }
            }
        });
    },

    initComponent: function() {
        console.log('Bar.view.BarResourcesPanel');
        this.makeToolbar();
        Bar.view.BarResourcesPanel.superclass.initComponent.apply(this, arguments);
    }
});