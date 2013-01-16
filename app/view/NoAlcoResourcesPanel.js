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
        this.grid = {
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
        }
    ],

    updatePanel: function() {
        Ext.getCmp('noAlcoGrid').getStore().reload();
    },
    getGrid: function() {
        return Ext.getCmp('noAlcoGrid');
    },
    initComponent: function() {
        Bar.view.NoAlcoResourcesPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.NoAlcoResourcesPanel');
    }
});