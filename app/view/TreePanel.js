Ext.define('Bar.view.TreePanel', {
    extend: 'Ext.tree.Panel',
    region:'west',
    width: 200,
    layout: 'fit',
    alias: 'widget.TreePanel',
    resizable: true,
    listeners: {

    },
    initComponent: function() {
        Bar.view.TreePanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.TreePanel');
    }
});