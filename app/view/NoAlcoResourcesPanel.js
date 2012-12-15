Ext.define('Bar.view.NoAlcoResourcesPanel', {
    extend: 'Ext.form.Panel',
    requires: ['Bar.view.NoAlcoResourcesGrid',
               'Bar.controller.ResourcesController',
               'Bar.view.OwnersCombobox'],
    alias: 'widget.NoAlcoResourcesPanel',
    layout: 'auto',
    region: 'center',
    title: '',
    items: [
        {
            xtype: 'NoAlcoResourcesGrid',
            id: 'noAlcoGrid',
            title: '',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
        {
            xtype: 'fieldset',
            id: 'noAlcoAdd',
            width: 300,
            title: 'Добавить компонент',
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'textfield',
                    fieldLabel: 'Название',
                    id: 'addNoAlcoName'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Объём (мл)',
                    id: 'addNoAlcoCapacity'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Цена',
                    id: 'addNoAlcoPrice'
                },
                {
                    xtype: 'OwnersCombobox',
                    fieldLabel: 'Владелец',
                    id: 'addNoAlcoOwner'
                },
                {
                    xtype: 'button',
                    text: 'ОК',
                    handler: function() {
                        var data = {
                            name: Ext.ComponentManager.get('addNoAlcoName').getValue(),
                            capacity: Ext.ComponentManager.get('addNoAlcoCapacity').getValue(),
                            price: Ext.ComponentManager.get('addNoAlcoPrice').getValue(),
                            owner: Ext.ComponentManager.get('addNoAlcoOwner').getValue()
                        };
                        Ext.Ajax.request({
                            url: '/php/index.php/components/addNoAlcoComponent',
                            params: data,
                            success: function(response) {
                                var data = Ext.JSON.decode(response.responseText);
                                if(data.success == true) {
                                    // Обновляем таблицу
                                    Ext.getCmp('addNoAlcoName').setValue('');
                                    Ext.getCmp('addNoAlcoCapacity').setValue('');
                                    Ext.getCmp('addNoAlcoPrice').setValue('');
                                    Ext.getCmp('addNoAlcoOwner').setValue('');
                                    Ext.getCmp('noAlcoGrid').getStore().reload();
                                }
                            }
                        });
                    }
                }
            ]
        },
        {
            xtype: 'fieldset',
            id: 'noAlcoDelete',
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
                        var selection = Ext.getCmp('noAlcoGrid').getSelectionModel().getSelection();
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
                                        Ext.getCmp('noAlcoGrid').getStore().reload();
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
            id: 'noAlcoUpdate',
            width: 300,
            title: 'Дополнительно',
            maxHeight: 70,
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'button',
                    text: 'Обновить таблицу',
                    handler: function() {
                        Ext.getCmp('noAlcoGrid').getStore().reload();
                    }
                }
            ]
        }
    ],
    updatePanel: function() {
        Ext.getCmp('noAlcoGrid').getStore().reload();
    },
    initComponent: function() {
        Bar.view.NoAlcoResourcesPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.NoAlcoResourcesPanel');
    }
});