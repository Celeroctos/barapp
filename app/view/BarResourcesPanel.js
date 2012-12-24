Ext.define('Bar.view.BarResourcesPanel', {
    extend: 'Ext.TabPanel',
    requires: ['Bar.view.AlcoResourcesPanel',
               'Bar.view.NoAlcoResourcesPanel',
               'Bar.view.OtherResourcesPanel',
               'Bar.view.InventoryResourcesPanel',
               'Bar.controller.ResourcesController'],
    alias: 'widget.BarResourcesPanel',
    layout: 'auto',
    region: 'center',
    title: '',
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
    },

    deleteChecked: function() {
        var activeTab = this.getActiveTab();
        var grid = activeTab.getGrid();

        var selected = [];
        var selection = Ext.getCmp(grid.id).getSelectionModel().getSelection();
        for(var i = 0; i < selection.length; i++) {
            selected.push(selection[i].get('id'));
        }
        var data = {
            ids: Ext.JSON.encode(selected)
        };
        if(selected.length > 0) {
            Ext.Ajax.request({
                url: '/php/index.php/components/delComponents',
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

    makeToolbar: function() {
        return this.tbar = {
            height: 30,
            items: [
                '<strong>С отмеченными:</strong>',
                {
                    text: 'удалить',
                    listeners: {
                        click: Ext.bind(this.deleteChecked, this)
                    }
                },
                '<strong>Дополнительно:</strong>',
                {
                    text: 'обновить таблицу',
                    listeners: {
                        click: this.updatePanel
                    }
                },
            ]
        };
    },

    initComponent: function() {
        console.log('Bar.view.BarResourcesPanel');
        this.makeToolbar();
        Bar.view.BarResourcesPanel.superclass.initComponent.apply(this, arguments);
    }
});