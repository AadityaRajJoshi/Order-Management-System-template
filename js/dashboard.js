var Dashboard = {
	GetOrderMenu: function( fn ){
		var OnGet = function( response ){
			// OrderfoodService.food = response.data;
			// console.log(response.data);
			
			fn(response.data);	
		};

		var OnError = function( error ){
			console.log(error);
		};

		App.api.get({
			success : OnGet,
			error   : OnError,
			url     : 'orderfood',
		});
	},
}



Finch.route(App.route.dashboard.route, function(){
var role = ( $.cookie("role_id") );
var username = ( $.cookie("username") );
var email = ( $.cookie("email") );
	context = {
		user: username,	
		email: email,
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}
	// console.log(context.not);
	if(role == 2){
		Dashboard.GetOrderMenu( menu => {
			context['food'] = menu;
			App.handlebar(context, dashboard);
		});
	}else{

	App.handlebar(context, dashboard);
	}
	
});






	