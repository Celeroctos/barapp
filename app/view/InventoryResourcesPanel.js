Ext.define('Bar.view.InventoryResourcesPanel', {
    extend: 'Ext.form.Panel',
    requires: ['Bar.view.InventoryResourcesGrid',
               'Bar.controller.ResourcesController',
               'Bar.view.OwnersCombobox'],
    alias: 'widget.InventoryResourcesPanel',
    layout: 'auto',
    region: 'center',
    title: '',
    items: [
        {
            xtype: 'InventoryResourcesGrid',
            id: 'inventoryGrid',
            title: '',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
        {
            xtype: 'fieldset',
            id: 'inventoryAdd',
            width: 300,
            title: 'Добавить компонент',
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'textfield',
                    fieldLabel: 'Название',
                    id: 'addInventoryName'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Объём',
                    id: 'addInventoryCapacity'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Цена',
                    id: 'addInventoryPrice'
                },
                {
                    xtype: 'OwnersCombobox',
                    fieldLabel: 'Владелец',
                    id: 'addInventoryOwner'
                },
                {
                    xtype: 'button',
                    text: 'ОК',
                    handler: function() {
                        var data = {
                            name: Ext.ComponentManager.get('addInventoryName').getValue(),
                            capacity: Ext.ComponentManager.get('addInventoryCapacity').getValue(),
                            price: Ext.ComponentManager.get('addInventoryPrice').getValue(),
                            owner: Ext.ComponentManager.get('addInventoryOwner').getValue()
                        };
                        Ext.Ajax.request({
                            url: '/php/index.php/components/addInventory',
                            params: data,
                            success: function(response) {
                                var data = Ext.JSON.decode(response.responseText);
                                if(data.success == true) {
                                    // Обновляем таблицу
                                    Ext.getCmp('addInventoryName').setValue('');
                                    Ext.getCmp('addInventoryCapacity').setValue('');
                                    Ext.getCmp('addInventoryPrice').setValue('');
                                    Ext.getCmp('addInventoryOwner').setValue('');
                                    Ext.getCmp('inventoryGrid').getStore().reload();
                                }
                            }
                        });
                    }
                }
            ]
        },
        {
            xtype: 'fieldset',
            id: 'inventoryDelete',
            width: 300,
            title: 'С отмеченными',
            maxHeight: 100,
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'button',
                    text: 'Удалить',
                    handler: function() {
                        var selected = [];
                        var selection = Ext.getCmp('inventoryGrid').getSelectionModel().getSelection();
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
                                        Ext.getCmp('inventoryGrid').getStore().reload();
                                    }
                                }
                            });
                        }
                    }
                }
            ]
        },
        {
            xtype: 'fieldset',
            id: 'inventoryUpdate',
            width: 300,
            title: 'Дополнительно',
            maxHeight: 70,
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'button',
                    text: 'Обновить таблицу',
                    handler: function() {
                        Ext.getCmp('inventoryGrid').getStore().reload();
                    }
                }
            ]
        }
    ],
    updatePanel: function() {
        Ext.getCmp('inventoryGrid').getStore().reload();
    },
    initComponent: function() {
        Bar.view.InventoryResourcesPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.InventoryResourcesPanel');
    }
});