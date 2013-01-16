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
        this.grid = {
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
    ],
    updatePanel: function() {
        Ext.getCmp('inventoryGrid').getStore().reload();
    },
    getGrid: function() {
        return Ext.getCmp('inventoryGrid');
    },
    initComponent: function() {
        Bar.view.InventoryResourcesPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.InventoryResourcesPanel');
    }
});