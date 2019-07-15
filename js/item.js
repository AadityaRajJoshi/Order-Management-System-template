var ItemService = {
	data: false,
	CreateItem: function( data ){
		var onCreate = function( response ){
			// $('#message').html(response.message);
			 //console.log( response );
			 App.navigate('ItemList');
		};

		var onError = function ( error ){
			if(error.status = 400){
				alert('Cannot create item');
			}
		};
		App.api.post({
			success : onCreate,
			error   : onError,
			url     : 'CreateItem',
			data    : data,
		});
	},

	GetItem: function( fn ){
		var OnGet = function( response ){
			// console.log(response);
			// ItemService.data = response.data;
			fn(response.data);
		};

		var OnError = function( error ){
			console.log(error);
		};

		App.api.get({
			success: OnGet,
			error: OnError,
			url: 'GetItem'
		});
	},

	UpdateItem: function( data, id ){
		var OnSuccess = function( response ){
		//console.log(response);
		App.navigate('ItemList');
			
		}

		var onError = function( error ){
			alert( 'error' );
		}

		App.api.put({
			success : OnSuccess,
			error   : onError,
			url     : 'UpdateItem',
			data    : data,
			id     : id
		});
	},

	DeleteItem: function( data ){
		var OnSuccess = function( response ){
		// console.log(response);	
		alert('Item deleted');
		};

		var onError = function( error ){
			alert( 'error' );
		};

		App.api.delete({
			success : OnSuccess,
			error   : onError,
			url     : 'deleteItem',
			data : data
		});
	}


}


$( document ).on('click', '#item-btn', function(e){ //item create
	e.preventDefault();
	var data = {};
	data[ 'name' ] = $( "input[ name=itemname ]" ).val();
	ItemService.CreateItem( data );
});

// $( document ).ready(function(){
// var role = ( $.cookie("role_id") );
// 	if(role == 3){	
// 	ItemService.GetItem();
// 	 //get Item
// 	}
// });


$( document ).on( 'click','#getItemId', function(){ //autofill text field for update Item
	var id = $( this ).data( 'id' );
	Finch.route(App.route.UpdateItem.route, function(){
	var n = id.toString();
	// console.log(n);
	// var data = ItemService.data;
	ItemService.GetItem( Itemdata =>{
	 	var data = Itemdata;
	var user_id = _.findIndex( data, {'id': n} );
	var role = ( $.cookie("role_id") );
	var username = ( $.cookie("username") );
	var email = ( $.cookie("email") );
	context = {
		user: username,
		email: email,
		// mydata: data[ user_id ],
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}
	context['mydata'] = data[ user_id ];
	App.handlebar(context, UpdateItem);
});
});
});


$( document ).on('click', '#updateitem-btn', function(e){ // item update
	e.preventDefault();
	var id = $( this ).data( 'id' );
	var data= {};
	data[ 'name' ] = $( "input[ name=Updateitemname ]" ).val();
	ItemService.UpdateItem( data, id );
});

$( document ).on('click', '#deleteItem', function(e){ // item delete
	e.preventDefault();
	var data = $( this ).data( 'id' );
	var row = $(this).closest("tr")[0];
	  // console.log(data);
	ItemService.DeleteItem( data );
	row.remove();
});



Finch.route(App.route.CreateItem.route, function(){ //routing for create Item
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
	App.handlebar(context, CreateItem);
		
});

Finch.route(App.route.ItemList.route, function(){ //routing for  Item List and populating table
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
	if(role == 3){	
	ItemService.GetItem( item =>{
		context['mydata'] = item;
	App.handlebar(context, ItemList);
	});
	 //get Item
	}
		
});




