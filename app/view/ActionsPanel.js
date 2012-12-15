Ext.define('Bar.view.ActionsPanel', {
    extend: 'Ext.panel.Panel',
    region:'center',
    layout: 'card',
    alias: 'widget.ActionsPanel',
    initComponent: function() {
        Bar.view.ActionsPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.ActionsPanel');
    }
});