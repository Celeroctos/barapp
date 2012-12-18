Ext.define('Bar.view.CoctailsPanel', {
    extend: 'Ext.TabPanel',
    requires: ['Bar.view.AlcoCoctailsGrid',
               'Bar.view.NoAlcoCoctailsGrid',
               'Bar.controller.ResourcesController'],
    alias: 'widget.CoctailsPanel',
    layout: 'auto',
    region: 'center',
    title: '',
    items: [
        {
            xtype: 'AlcoCoctailsGrid',
            id: 'alcoCoctailsGrid',
            title: 'Алкогольные',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
        {
            xtype: 'NoAlcoCoctailsGrid',
            id: 'noAlcoCoctailsGrid',
            title: 'Безалкогольные',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
    ],
    updatePanel: function() {
        Ext.getCmp('alcoCoctailsGrid').updatePanel();
        Ext.getCmp('noAlcoCoctailsGrid').updatePanel();
    },

    initComponent: function() {
        console.log('Bar.view.CoctailsPanel');
        Bar.view.CoctailsPanel.superclass.initComponent.apply(this, arguments);
    }
});