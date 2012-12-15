Ext.define('Bar.view.OrdersPanel', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.OrdersPanel',
    layout: 'card',
    region: 'center',
    title: 'Заказы',
    initComponent: function() {
        Bar.view.OrdersPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.OrdersPanel');
    }
});