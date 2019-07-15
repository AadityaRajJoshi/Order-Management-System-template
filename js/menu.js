var MenuService = {
	data: false,
	mydata: false,
	menudata: false,
	getCategory: function( fn ){
		var OnGet = function( response ){
			// MenuService.data = response.data;
			// console.log(MenuService.data);
			fn(response.data);
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.get({
			success : OnGet,
			error   : OnError,
			url     : 'GetCategory', 
		});
	},

	getItem: function( fn ){
		var OnGet = function( response ){
			  // console.log(response);
			// MenuService.mydata = response.data;
			fn(response.data);
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.get({
			success : OnGet,
			error   : OnError,
			url     : 'GetItem', 
		});
	},

	createMenu: function( data ){
		var OnCreate = function( response ){
			App.navigate('FoodList');
		};

		var OnError = function( error ){
			console.log(error);
		};

		App.api.post({
			success: OnCreate,
			error : OnError,
			url: 'CreateMenu',
			data : data
		});
	},

	FoodList: function( fn ){
		var OnFoodlist = function( response ){
			fn(response.data );
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.get({
			success : OnFoodlist,
			error   : OnError,
			url     : 'FoodList' 
		});
	},

	UpdateMenu: function( data, id ){
		var OnUpdate = function( response ){
			// console.log( response );
			App.navigate('FoodList');
		};

		var OnError = function( error ){
			console.log(error);
		};

		App.api.put({
			success : OnUpdate,
			error   : OnError,
			url     : 'UpdateMenu',
			data    : data,
			id      : id
		});
	},

	DeleteMenu: function( data ){
		var OnDelete = function( response ){
			App.navigate('FoodList');
		};

		var OnError = function( error ){
			console.log( error );
		};

		App.api.delete({
			success : OnDelete,
			error   : OnError,
			url     : 'DeleteMenu',
			data    : data
		});
	}
}


//getting category and item for drop down 
//  $( document ).ready(function(){
// 	var role = ( $.cookie("role_id") );
// 	if(role == 3 ){	
// 	MenuService.getCategory();
// 	 MenuService.getItem();
// 	 MenuService.FoodList();
// 	}
// });
	

Finch.route(App.route.CreateMenu.route, function(){ //routing for create menu and populating dropdown 
	
	var role = ( $.cookie("role_id") );
	var username = ( $.cookie("username") );
	var email = ( $.cookie("email") );
	context = {
		user: username,
		email: email,
		// data: MenuService.data,
		// mydata: MenuService.mydata,
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}
	if(role == 3 ){	
	MenuService.getCategory( category => {
		context['data'] = category;
	App.handlebar(context, createmenu);
	});
	 MenuService.getItem( item => {
	 	context['mydata'] = item;
	 	App.handlebar(context, createmenu);
	 });
	 // MenuService.FoodList();
	}
	// console.log(context);
		
});

$( document ).on('click', '#menu-btn', function(e){ //creating new menu 
	e.preventDefault();
	var data = {};
	data[ 'item_id' ]  = $('#myItem').find(":selected").val();
	data[ 'category_id' ] = $('#myCategory').find(":selected").val();
	data[ 'price' ] = $( "input[ name=price ]" ).val();
	//console.log(data);
	MenuService.createMenu(data);

});


Finch.route(App.route.FoodList.route, function(){ //routing for Food list and populating food table 
	
	var role = ( $.cookie("role_id") );
	var username = ( $.cookie("username") );
	var email = ( $.cookie("email") );
	context = {
		user: username,
		email: email,
		// mydata: MenuService.menudata,
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}
	if(role == 3 ){	
	// MenuService.getCategory();
	 // MenuService.getItem();
	 MenuService.FoodList( menu => {
	 context['mydata'] = menu;
	 App.handlebar(context, foodlist);
	 });
	}
		
});

$( document ).on( 'click','#getFoodId', function(){ //autofill text field for update Food list
	var id = $( this ).data( 'id' );
	Finch.route(App.route.UpdateMenu.route, function(){
	var n = id.toString();

	MenuService.FoodList( food => {
	MenuService.getItem( item =>  {
	MenuService.getCategory ( category =>   {

	var data = food;
	var user_id = _.findIndex( data, {'id': n} );

	var role = ( $.cookie("role_id") );
	var username = ( $.cookie("username") );
	var email = ( $.cookie("email") );
	context = {
		user: username,
		email: email,
		// mydata: data[user_id],
		// itemdata: MenuService.mydata,
		// categorydata: MenuService.data,
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}
	// console.log(context);
	context['mydata'] = data[user_id];
	context['itemdata'] = item;
	context['categorydata'] = category;
	App.handlebar(context, EditMenu);

	});
	});
	});
});
});


$( document ). on('click', '#Update-menu-btn', function(e){ //update menu
	e.preventDefault();
	var id = $( this ).data( 'id' );
	var data= {};
	data[ 'item_id' ] = $('#MyItem').find(":selected").val();
	data[ 'category_id' ] =$('#MyCategory').find(":selected").val();
	data[ 'price' ] = $( "input[ name=Updateprice ]" ).val();
	MenuService.UpdateMenu( data, id );
	// console.log(data);
		
});

$( document ).on('click', '#deleteMenu', function(e){
	e.preventDefault();
	var data = $( this ).data('id');
	var row = $(this).closest("tr")[0];
	MenuService.DeleteMenu( data );
	row.remove();
});

