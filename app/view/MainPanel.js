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
            id: 'treePanel',
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
                        text: 'Транзакции',
                        draggable: false,
                        id: 'barTransactions',
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
                        text: 'Меню',
                        draggable: false,
                        id: 'barCoctails',
                        leaf: true
                    },
                    {
                        nodeType: 'async',
                        text: 'Настройки',
                        draggable: false,
                        id: 'barSettings',
                        leaf: true
                    },
                ]
            }
        },
        {
            xtype: 'ActionsPanel',
            id: 'actionPanel'
        }
    ],

    listeners: {
        resize: function(panel, width, height, oldWidth, oldHeight, eOpts) {
            height = getClientHeight();
        }
    },

    bindEvents: function() {
        var panels = {barClients: 'Bar.view.ClientsPanel',
                        barOrders:  'Bar.view.OrdersPanel',
                        barOwners: 'Bar.view.OwnersPanel',
                        barResources: 'Bar.view.BarResourcesPanel',
                        barCoctails: 'Bar.view.MenuPanel',
                        barTransactions: 'Bar.view.TransactionsPanel',
                        barSettings: 'Bar.view.SettingsPanel'};

        this.treePanel = this.items.getAt(0);
        this.actionsPanel = this.items.getAt(1);

        var layout = this.actionsPanel.getLayout();

        this.treePanel.on('itemclick', function(view, record, item, index, e, eOpts) {
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
        }, this);

        var loadedPanel = 'barCoctails';
        // Раскрываем по умолчанию панель заказов
        panels[loadedPanel] = Ext.create(panels[loadedPanel]);
        layout.setActiveItem(panels[loadedPanel]);
        panels[loadedPanel].updatePanel();
    },

    initComponent: function() {
        Bar.view.MainPanel.superclass.initComponent.apply(this, arguments);
        console.log('Bar.view.MainPanel');
        this.bindEvents();
    }
});

