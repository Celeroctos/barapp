Ext.define('Bar.view.OwnersPanel', {
    extend: 'Ext.form.Panel',
    alias: 'widget.OwnersPanel',
    requires: ['Bar.view.OwnersGrid',
               'Bar.controller.OwnersController'],
    layout: 'auto',
    region: 'center',
    title: 'Владельцы бара',
    items: [
        {
            xtype: 'OwnersGrid',
            id: 'ownersGrid',
            title: '',
            maxHeight: 300,
            minHeight: 300,
            width: '100%',
            flex: 1
        },
        {
            xtype: 'fieldset',
            id: 'ownersAdd',
            width: 300,
            title: 'Добавить владельца',
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'textfield',
                    fieldLabel: 'Никнейм',
                    id: 'addOwnerNickname'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: 'E-mail',
                    id: 'addOwnerEmail'
                },
                {
                    xtype: 'button',
                    text: 'ОК',
                    handler: function() {
                        var data = {
                            nick: Ext.ComponentManager.get('addOwnerNickname').getValue(),
                            email: Ext.ComponentManager.get('addOwnerEmail').getValue()
                        };
                        Ext.Ajax.request({
                            url: '/php/index.php/users/addOwner',
                            params: data,
                            success: function(response) {
                                var data = Ext.JSON.decode(response.responseText);
                                if(data.success == true) {
                                    // Обновляем таблицу
                                    Ext.getCmp('ownersGrid').getStore().reload();
                                }
                            }
                        });
                    }
                }
            ]
        },
        {
            xtype: 'fieldset',
            id: 'ownersDelete',
            width: 300,
            title: 'С отмеченными',
            maxHeight: 100,
            style: 'margin-left: 10px',
            items: [
                {
                    xtype: 'button',
                    text: 'Удалить',
                    handler: function() {
                        var selected = [];
                        var selection = Ext.getCmp('ownersGrid').getSelectionModel().getSelection();
                        for(var i = 0; i < selection.length; i++) {
                            selected.push(selection[i].get('id'));
                        }
                        var data = {
                            ids: Ext.JSON.encode(selected)
                        };
                        if(selected.length > 0) {
                            Ext.Ajax.request({
                                url: '/php/index.php/users/delUsers',
                                params: data,
                                success: function(response) {
                                    var data = Ext.JSON.decode(response.responseText);
                                    if(data.success == true) {
                                        // Обновляем таблицу
                                        Ext.getCmp('ownersGrid').getStore().reload();
                                    }
                                }
                            });
                        }
                    }
                }
            ]
        }
    ],
    initComponent: function() {
        console.log('Bar.view.OwnersPanel');
        Bar.view.OwnersPanel.superclass.initComponent.apply(this, arguments);
    }
});