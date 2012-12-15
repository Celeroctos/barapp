Ext.define('Bar.model.ClientsModel', {
   extend: 'Ext.data.Model',
   fields: [
       {
           name: 'id'
       },
       {
           name: 'nick'
       },
       {
           name: 'email'
       },
       {
           name: 'moneyOut'
       },
       {
           name: 'moneyIn'
       },
       {
           name: 'difference'
       }
   ]
});