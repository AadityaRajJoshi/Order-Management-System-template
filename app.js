var App = {
	config: {
		base : 'http://localhost/order-management-system/api/',
	},
	route: {
		
		'logIn' : {
			'template' : '#login',
			'route'    : '/',
			'api'      : 'user/login'
		},
		'dashboard'     :{
			'template' : '#dashboard',
			'route'    :  '/dashboard'
		},

		'orderfood'    : {
			'template' : '#orderfood',
			'route'    : '/orderfood',
			'api'      : 'order_menu'
		},

		'createuser'   : {
			'template' : '#createuser',
			'route'    : '/createuser',
			'api'      : 'user'
		},

		'updateUser'   : {
		'template' : '#updateCreateUser',
		'route'    : '/edituser',
		'api'      : 'user' ,

		},

		'DeleteUser'   : {
		'api'      : 'user' ,
		},

		'UserList'     : {
			'template' : '#userlist',
			'route'    : '/userlist',
			'api'      : 'user',
 		},

 		'FoodList'     : {
			'template' : '#foodlist',
			'route'    : '/foodlist',
			'api'      : 'menu',
 		},

		'CreateItem' : {
			'template' : '#CreateItem',
			'route'    : '/createitem',
			'api'      : 'Item'
		},

		'GetItem' : {
			'api'      : 'Item'
		},

		'createCategory'   : {
			'template' : '#createcategory',
			'route'    : '/createcategory',
			'api'      : 'category'
		},

		'GetCategory' : {

			'api'      : 'category'
		},

		'CreateMenu'   : {
			'template' : '#createmenu',
			'route'    : '/createmenu',
			'api'      : 'menu'
		},

		'UpdateMenu' : {
			'template'  : '#EditMenu',
			'route'     : '/editmenu', 
			'api'       : 'menu'
		},

		'DeleteMenu'  : {
			'api'     : 'menu'
		},

		'ItemList'  : {
			'template' : '#ItemList',
			'route'    : '/itemlist',
			'api'      : 'item'
		},

		'UpdateItem'  : {
			'template' : '#UpdateItem',
			'route'    : '/updateItem',
			'api'      : 'item'
		},

		'deleteItem'  : {
			'api'   : 'item'
		},

		'CategoryList' : {
			'template' : '#CategoryList',
			'route'    : '/categorylist',
			'api'      : 'category'
		},

		'UpdateCategory': {
			'template'  : '#UpdateCategory',
			'route'     : '/updatecategory',
			'api'       : 'category' 
		},
		
		'DeleteCategory' : {
			'api' : 'category'
		},

		'CreateOrder'  : {
			'template' : '#createorder',
			'route'    : '/createorder',
			'api'      : 'order'
		},

		'OrderfoodList' : {
			'template' : '#orderfoodlist',
			'route'    : '/Editorderlist',
			'api'      : 'order_menu'
		},

		'OrderList'  : {
			'template' : "OrderList",
			'route'    : '/orderlist',
			'api'      : 'order'
		},

		'logout' : {
			'api' : 'user/logout'
		}

		
	},

	navigate: function( slug ){
		Finch.call( App.route[ slug ].route );
		Finch.navigate( App.route[ slug ].route );
	},
	api: {
		getUrl: function( url ){
			//console.log(App.config.base + App.route[ 'UserList' ].api);
				return App.config.base + App.route[ url ].api;	
		},
		run: function( payload ){
			$.ajax( payload );
		},
		post: function( payload ){
			const { getUrl, run } = App.api;
			payload.url  = getUrl( payload.url );
			payload.type = 'POST';

			run( payload );
		},

		get: function( payload ){
			const { getUrl, run } = App.api;
			payload.url  = getUrl( payload.url ); 
			payload.type = 'GET';
// console.log(payload.url);
			run( payload );
		},

		put: function( payload ){
			// console.log(payload);
			const { getUrl, run } = App.api;
			payload.url  = getUrl( payload.url ) + '/' + payload.id;
			payload.type = 'PUT';
// console.log(payload.url);
			run( payload );
		},

		delete: function( payload ){
			const { getUrl, run } = App.api;
			payload.url  = getUrl( payload.url ) + '/' + payload.data;
			 // console.log(payload.url);
			payload.type = 'DELETE';
			run( payload );
		},

		Customerget: function( payload ){
		const { getUrl, run } = App.api;
		payload.url  = getUrl( payload.url )  + '/' + '?' + 'restaurant_id='+ payload.id; 
		payload.type = 'GET';

		run( payload );
		},

		Userget: function( payload ){
		const { getUrl, run } = App.api;
		payload.url  = getUrl( payload.url )  + '/' + '?' + 'page='+ payload.page;
		// console.log(payload.url); 
		payload.type = 'GET';

		run( payload );
		}
	},
	handlebar:function(payload, template ){
		myTemplate = $(template).html();
		var template = Handlebars.compile(myTemplate);
		el_html = template(payload);
		$("#root").html(el_html);
	}
}

$( document ).ready( function(){
    Finch.route( App.route.logIn.route, function(){
    	var myTemplate = $('#login').html();
    	var template = Handlebars.compile(myTemplate);
    	 $("#root").html(template);
    });

	Finch.listen();
});

