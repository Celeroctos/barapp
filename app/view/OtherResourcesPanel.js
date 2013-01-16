Ext.define('Bar.view.OtherResourcesPanel', {
    extend: 'Ext.form.Panel',
    requires: ['Bar.view.OtherResourcesGrid',
               'Bar.controller.ResourcesController',
               'Bar.view.OwnersCombobox'],
    alias: 'widget.OtherResourcesPanel',
    layout: 'auto',
    region: 'center',
    title: '',
    items: [
        this.grid = {
            xtype: 'OtherResourcesGrid',
            id: 'otherGrid',
            title: '',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
        {
            xtype: 'fieldset',
            id: 'otherAdd',
            width: 300,
            title: 'Добавить компонент',
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'textfield',
                    fieldLabel: 'Название',
                    id: 'addOtherName'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Объём',
                    id: 'addOtherCapacity'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Цена',
                    id: 'addOtherPrice'
                },
                {
                    xtype: 'OwnersCombobox',
                    fieldLabel: 'Владелец',
                    id: 'addOtherOwner'
                },
                {
                    xtype: 'button',
                    text: 'ОК',
                    handler: function() {
                        var data = {
                            name: Ext.ComponentManager.get('addOtherName').getValue(),
                            capacity: Ext.ComponentManager.get('addOtherCapacity').getValue(),
                            price: Ext.ComponentManager.get('addOtherPrice').getValue(),
                            owner: Ext.ComponentManager.get('addOtherOwner').getValue()
                        };
                        Ext.Ajax.request({
                            url: '/php/index.php/components/addOther',
                            params: data,
                            success: function(response) {
                                var data = Ext.JSON.decode(response.responseText);
                                if(data.success == true) {
                                    // Обновляем таблицу
                                    Ext.getCmp('addOtherName').setValue('');
                                    Ext.getCmp('addOtherCapacity').setValue('');
                                    Ext.getCmp('addOtherPrice').setValue('');
                                    Ext.getCmp('addOtherOwner').setValue('');
                                    Ext.getCmp('otherGrid').getStore().reload();
                                }
                            }
                        });
                    }
                }
            ]
        }
    ],

    updatePanel: function() {
        Ext.getCmp('otherGrid').getStore().reload();
    },
    getGrid: function() {
        return Ext.getCmp('otherGrid');
    },
    initComponent: function() {
        Bar.view.OtherResourcesPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.OtherResourcesPanel');
    }
});