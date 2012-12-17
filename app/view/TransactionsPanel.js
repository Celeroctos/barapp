Ext.define('Bar.view.TransactionsPanel', {
    extend: 'Ext.form.Panel',
    alias: 'widget.TransactionsPanel',
    requires: ['Bar.view.TransactionsGrid',
               'Bar.controller.OwnersController'],
    layout: 'auto',
    region: 'center',
    title: 'Транзакции',
    items: [
        {
            xtype: 'TransactionsGrid',
            id: 'transactionsGrid',
            title: '',
            width: '100%',
            flex: 1
        }
    ],

    updatePanel: function() {
        Ext.getCmp('transactionsGrid').getStore().reload();
    },

    initComponent: function() {
        console.log('Bar.view.TransactionsPanel');
        Bar.view.TransactionsPanel.superclass.initComponent.apply(this, arguments);
    }
});