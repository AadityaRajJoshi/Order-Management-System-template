var OrderService = {
	data:false,
	CreateOrder: function( data ){
		var OnCreate = function( response ){
			// console.log( response );
			$('#orderCreate').html(response.message);
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.post({
			success: OnCreate,
			error  : OnError,
			url    : 'CreateOrder',
			data   : data 
		});
	},

	GetRestaurant: function( fn ){
		var OnGet = function( response ){
			fn(response.data);

		};

		var OnError = function( error ){
			console.log(error);
		};

		App.api.get({
			success : OnGet,
			error   : OnError,
			url     : 'UserList',
		});	

	},

	GetOrder: function( fn ){
		var OnGet = function( response ){
			fn(response.data);
			// console.log(response);
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.get({
			success: OnGet,
			error: OnError,
			url: 'OrderList'
		});
	},

	DeleteOrder: function( id ){
		var OnDelete = function( response ){
			console.log(response);
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.delete({
			success : OnDelete,
			error   : OnError,
			url     : 'OrderList',
			data  : id
		})
	}
} 
 
Finch.route(App.route.CreateOrder.route, function(){ //routing for create order 
		var role = ( $.cookie("role_id") );
		var username = ( $.cookie("username") );
		var email = ( $.cookie("email") );
		context = {
		user: username,
		email: email,
		// mydata: OrderService.data,
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}
	if(role == 2){
		OrderService.GetRestaurant( restro =>{
			context['mydata'] = restro;
			App.handlebar(context, createorder);
		});
		
	}

});

$( document ).on('click', '#order-btn', function(e){
	e.preventDefault();
	var data = {};
	data[ 'restaurant_id' ] = $('#MyRestaurant').find(":selected").val();
	data[ 'remark' ]        = $( "input[ name=remarks ]" ).val();
	data[ 'lock' ]          = $( "input[ name=lock ]" ).val();
	data[ 'status' ]        = $( "input[ name=status ]" ).val();
OrderService.CreateOrder( data );
});

// $( document ).ready(function(){
// 	var role = ( $.cookie("role_id") );
// 	if(role == 2){
// 		OrderService.GetRestaurant();
// 	}
// });

Finch.route(App.route.OrderList.route, function(){ //routing for create order 
		var role = ( $.cookie("role_id") );
		var username = ( $.cookie("username") );
		var email = ( $.cookie("email") );
		context = {
		user: username,
		email: email,
		// mydata: OrderService.data,
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}
	if(role == 2){
		OrderService.GetOrder( order => {
			context['mydata'] = order;
	App.handlebar(context, OrderList);
		});
	}
});

$( document ).on('click', '#deleteorder', function( e ){
	e.preventDefault();

	var id = $( this ).data( 'id' );
	// console.log( id );
	var row = $(this).closest("tr")[0];
	 OrderService.DeleteOrder( id );
	//  row.remove();
});
