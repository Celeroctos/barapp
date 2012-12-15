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
            xtype: 'OtherResourcesPanel'
        },
        {
            title: 'Стекло и барный инвентарь',
            xtype: 'InventoryResourcesPanel'
        }
    ],
    updatePanel: function() {
        Ext.getCmp('alcoTab').updatePanel();
    },

    initComponent: function() {
        console.log('Bar.view.BarResourcesPanel');
        Bar.view.BarResourcesPanel.superclass.initComponent.apply(this, arguments);
    }
});