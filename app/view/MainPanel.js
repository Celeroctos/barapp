Ext.define('Bar.view.MainPanel', {
    extend: 'Ext.panel.Panel',
    requires: ['Bar.view.TreePanel',
               'Bar.view.ActionsPanel',
               'Bar.view.ClientsPanel',
               'Bar.view.OrdersPanel',
               'Bar.view.OwnersPanel',
               'Bar.view.BarResourcesPanel'],
    layout: 'border',
    renderTo: Ext.getBody(),
    width: '100%',
    height: 1000,
    items: [
        {
            xtype: 'TreePanel',
            title: 'Действия',
            root: {
                nodeType: 'async',
                text: 'Мой бар',
                draggable: false,
                id: 'myBar',
                expanded: true,
                children: [
                    {
                        nodeType: 'async',
                        text: 'Заказы',
                        draggable: false,
                        id: 'barOrders',
                        leaf: true
                    },
                    {
                        nodeType: 'async',
                        text: 'Клиенты',
                        draggable: false,
                        id: 'barClients',
                        leaf: true
                    },
                    {
                        nodeType: 'async',
                        text: 'Владельцы',
                        draggable: false,
                        id: 'barOwners',
                        leaf: true
                    },
                    {
                        nodeType: 'async',
                        text: 'Финансы',
                        draggable: false,
                        id: 'barGolds',
                        leaf: true
                    },
                    {
                        nodeType: 'async',
                        text: 'Ресурсы бара',
                        draggable: false,
                        id: 'barResources',
                        leaf: true
                    },
                    {
                        nodeType: 'async',
                        text: 'Меню коктейлей',
                        draggable: false,
                        id: 'barMenu',
                        children: [
                            {
                                nodeType: 'async',
                                text: 'Алкогольные',
                                draggable: false,
                                id: 'barAlco',
                                leaf: true
                            },
                            {
                                nodeType: 'async',
                                text: 'Безалкогольные',
                                draggable: false,
                                id: 'barNoAlco',
                                leaf: true
                            }
                        ]
                    },
                    {
                        nodeType: 'async',
                        text: 'Настройки',
                        draggable: false,
                        id: 'barSettings',
                        children: [
                            {
                                nodeType: 'async',
                                text: 'Настройки приложения',
                                draggable: false,
                                id: 'barAppSettings',
                                leaf: true
                            }
                        ]
                    },
                ]
            }
        },
        {
            xtype: 'ActionsPanel'
        }
    ],

    listeners: {
        resize: function(panel, width, height, oldWidth, oldHeight, eOpts) {
            height = getClientHeight();
        }
    },

    initComponent: function() {
        var panels = {barClients: 'Bar.view.ClientsPanel',
                      barOrders:  'Bar.view.OrdersPanel',
                      barOwners: 'Bar.view.OwnersPanel',
                      barResources: 'Bar.view.BarResourcesPanel',
                      barAlco: 'Bar.view.AlcoCoctailsPanel'};

        Bar.view.MainPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.MainPanel');

        this.treePanel = this.items.getAt(0);
        this.actionsPanel = this.items.getAt(1);

        this.treePanel.on('itemclick', function(view, record, item, index, e, eOpts) {
            var layout = this.actionsPanel.getLayout();
            if(record.getId() in panels) {
                // Загружаем панель, если есть. Если панель уже создана, подгружаем созданное.
                var panel = panels[record.getId()];
                if(typeof(panel) == 'string') {
                    panels[record.getId()] = Ext.create(panel);
                }
                layout.setActiveItem(panels[record.getId()]);

                if('updatePanel' in panels[record.getId()]) {
                    panels[record.getId()].updatePanel();
                }
            }
        }, this)

    }
});

