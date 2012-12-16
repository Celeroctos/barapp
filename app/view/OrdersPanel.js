Ext.define('Bar.view.OrdersPanel', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.OrdersPanel',
    layout: 'vbox',
    region: 'center',
    requires: ['Bar.view.ClientsCombobox',
               'Bar.view.OrdersStatusCombobox',
               'Bar.view.CoctailsCombobox',
               'Bar.view.OrdersGrid'],
    title: 'Заказы',
    items: [
        {
            xtype: 'OrdersGrid',
            id: 'ordersGrid',
            title: '',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
        {
            xtype: 'fieldset',
            id: 'orderAdd',
            width: 300,
            title: 'Добавить заказ',
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'ClientsCombobox',
                    fieldLabel: 'Клиент',
                    id: 'addOrderOwner',
                    editable: false
                },
                {
                    xtype: 'CoctailsCombobox',
                    fieldLabel: 'Коктейль',
                    id: 'addOrderCoctail',
                    editable: false
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Количество',
                    id: 'addOrderQuantity'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Скидка (в ден. ед.)',
                    id: 'addOrderDiscount'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'Приоритет',
                    id: 'addOrderPriority'
                },
                {
                    xtype: 'OrdersStatusCombobox',
                    fieldLabel: 'Статус',
                    id: 'addOrderStatus',
                },
                {
                    xtype: 'button',
                    text: 'ОК',
                    handler: function() {
                        var allData = {
                            client:  Ext.getCmp('addOrderOwner').getValue(),
                            coctail: Ext.getCmp('addOrderCoctail').getValue(),
                            quantity: Ext.getCmp('addOrderQuantity').getValue(),
                            discount: Ext.getCmp('addOrderDiscount').getValue(),
                            priority: Ext.getCmp('addOrderPriority').getValue(),
                            status: Ext.getCmp('addOrderStatus').getValue(),
                            quantity: Ext.getCmp('addOrderQuantity').getValue()
                        };
                        Ext.Ajax.request({
                            url: '/php/index.php/orders/addOrder',
                            params: allData,
                            success: function(response) {
                                var data = Ext.JSON.decode(response.responseText);
                                if(data.success == true) {
                                    // Обновляем филдсет
                                    Ext.getCmp('addOrderOwner').setValue('');
                                    Ext.getCmp('addOrderQuantity').setValue('');
                                    Ext.getCmp('addOrderDiscount').setValue('');
                                    Ext.getCmp('addOrderPriority').setValue('');
                                    Ext.getCmp('addOrderStatus').setValue('');
                                    Ext.getCmp('addOrderCoctail').setValue(''),
                                    Ext.getCmp('addOrderQuantity').setValue(''),
                                    //  Обновляем саму таблицу
                                    Ext.getCmp('ordersGrid').getStore().reload();
                                    console.log(Ext.getCmp('ordersGrid').getStore());
                                }
                            }
                        });
                    }
                },
            ]
        }
    ],
    updatePanel: function() {
        Ext.getCmp('ordersGrid').getStore().reload();
    },

    initComponent: function() {
        Bar.view.OrdersPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.OrdersPanel');
    }
});