var OrderfoodService = {
	data   : false,
	mydata : false,
	myid: false,
	food : false,

	GetOrder: function( fn ){
		var OnGet = function( response ){
			 // console.log( response );
			// OrderfoodService.data = response.data;
			fn(response.data);
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.get({
			success : OnGet,
			error   : OnError,
			url     : 'CreateOrder'
		});
	},

	GetMenu: function( fn ){
		var OnGet = function( response ){
			// console.log(OrderfoodService.mydata);
			// OrderfoodService.mydata = response.data;
			fn(response.data);
			// data={};
			// $.each( response.data, function( key, value ) {
			// 	if(response.data[key].category !== 'veg'){
			// 		data['nonveg'] = (response.data[key]);
			// 	}
			// });
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.Customerget({
			success : OnGet,
			error   : OnError,
			url     : 'CreateMenu',
			id      : ( $.cookie("restaurant") )
		});
	},

	CreateOrdermenu: function( data ){
		var OnCreate = function( response ){
			alert( 'your order has been placed');
			// console.log(response);
			// OrderfoodService.food = response.data;
			
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.post({
			success : OnCreate,
			error   : OnError,
			url     : 'orderfood',
			data    : data
		});
	},

	GetOrderMenu: function( fn ){
		var OnGet = function( response ){
			// OrderfoodService.food = response.data;
			// console.log(response)
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

	DeleteOrdermenu: function( id ){
		var OnDelete = function( response ){
			alert( response.message );
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.delete({
			success : OnDelete,
			error   : OnError,
			url     : 'OrderfoodList',
			data  : id
		})
	}

}


Finch.route(App.route.orderfood.route, function(){ //routing for order food
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
	// var id = OrderfoodService.mydata[0];
	
	if(role == 4){	
		OrderfoodService.GetOrder( order => {
		OrderfoodService.GetMenu( menu => {	
			context['data'] = order;
			context['mydata'] = menu;

		App.handlebar(context, orderfood);

		});
		});
	}
	// console.log(context);
});


$( document ).on('click', '#myCheck', function(){ //sum of total price
	var total = 0;
 $("#myTable input[type=checkbox]:checked").each(function(){
		 var row = $(this).closest("tr")[0];
		 // console.log(row);
		  var q = $(this).closest('tr').find("td:eq(2) input").val();
		  // console.log(q);
		  if(q==false){
		  	total += +this.value;
		  }else{
		  	total += +this.value * q;
		  }
    	$('#p').html(total);
	});
}); 


$( document ).on('click', '#orderFood', function( e ){
	e.preventDefault();
	var data = {};
	data[ 'order_id' ] = $( '.restro' ).text();

	$("#myTable input[type=checkbox]:checked").each(function(){
		 var row = $(this).closest("tr")[0];
		 // console.log(row);
		  	var id = $( this ).data( 'id' );
			data[ 'menu_id' ] = id;
			data['qty']       =  $(this).closest('tr').find("td:eq(2) input").val();
			data['price']     = row.cells[3].innerHTML;
			data['tax']       = row.cells[5].innerHTML;
			data['total_price'] = $( "#p" ).text();
	});
	OrderfoodService.CreateOrdermenu( data );
	// console.log(data);
});

Finch.route(App.route.OrderfoodList.route, function(){ //routing for order food list
	var role = ( $.cookie("role_id") );
	var username = ( $.cookie("username") );
	var email = ( $.cookie("email") );
	context = {
		// food : OrderfoodService.food, 
		user: username,
		email: email,
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}

	if(role == 2){
		OrderfoodService.GetOrderMenu( restro =>{
			context['food'] = restro;
			App.handlebar(context, orderfoodlist);
		});
	}
	// console.log(context);
});

$( document ).on('click', '#deletefoodlist', function(e){ //delete food list
	e.preventDefault();
	var id = $( this ).data( 'id' );
	var row = $(this).closest("tr")[0];
	// console.log(id);
	OrderfoodService.DeleteOrdermenu( id );
	row.remove();
});