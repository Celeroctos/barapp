Ext.define('Bar.view.SettingsPanel', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.SettingsPanel',
    layout: 'vbox',
    region: 'center',
    requires: ['Bar.view.ClientsCombobox',
               'Bar.view.OrdersStatusCombobox',
               'Bar.view.CoctailsCombobox',
               'Bar.view.OrdersGrid'],
    title: 'Настройки',
    items: [
        {
            xtype: 'fieldset',
            id: 'appSettings',
            width: 300,
            title: 'Бар',
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'ClientsCombobox',
                    fieldLabel: 'Текущий бар',
                    id: 'currentBar',
                    editable: false
                },
                {
                    fieldLabel: 'Или новый бар:',
                    xtype: 'textfield',
                    id: 'newBarName'
                },
                {
                    xtype: 'button',
                    text: 'ОК',
                    handler: this.changeCurrentBar
                }
            ]
        }
    ],

    changeCurrentBar: function() {


    },

    updatePanel: function() {

    },

    initComponent: function() {
        Bar.view.SettingsPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.SettingsPanel');
    }
});