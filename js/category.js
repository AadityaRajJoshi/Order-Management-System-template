var CategoryService = {
	data: false,
	CreateCategory: function( data ){
		var onCreate = function( response ){
			App.navigate('CategoryList');
			// console.log( response );
			// $( '#catmessage' ).html(response.message);
		};

		var onError = function ( error ){
			if(error.status = 400){
				alert('Cannot create Category');
			}
		};
		App.api.post({
			success : onCreate,
			error   : onError,
			url     : 'createCategory',
			data    : data,
		});
	},

	GetCategory: function( fn ){
		var OnGet = function( response ){
			// CategoryService.data = response.data;
			fn(response.data);
		};

		var OnError = function( error ){
			console.log(error);
		};

		App.api.get({
			success: OnGet,
			error: OnError,
			url: 'GetCategory'
		});
	},

	UpdateCategory: function( data, id ){
		var OnSuccess = function( response ){
		// console.log(response);
		App.navigate('CategoryList');
			
		}

		var onError = function( error ){
			alert( 'error' );
		}

		App.api.put({
			success : OnSuccess,
			error   : onError,
			url     : 'UpdateCategory',
			data    : data,
			id      : id
		});
	},

	DeleteCategory: function( data){
		var OnSuccess = function( response ){
		// console.log(response);
		App.navigate('CategoryList');	
		};

		var onError = function( error ){
			alert( 'error' );
		};

		App.api.delete({
			success : OnSuccess,
			error   : onError,
			url     : 'DeleteCategory',
			data    : data,
		});
	}


}


$( document ).on('click', '#category-btn', function(e){ //create category
	e.preventDefault();
	var data = {};
	data[ 'name' ] = $( "input[ name=categoryname ]" ).val();
	CategoryService.CreateCategory( data );
});

// $( document ).ready(function(){
// var role = ( $.cookie("role_id") );
// 	if(role == 3){	
// 	CategoryService.GetCategory(); //get category
// 	}
// });



Finch.route(App.route.createCategory.route, function(){ //routing for create Category
	
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
	App.handlebar(context, createcategory);
});

Finch.route(App.route.CategoryList.route, function(){ //routing for  Category List
	
	var role = ( $.cookie("role_id") );
	var username = ( $.cookie("username") );
	var email = ( $.cookie("email") );
	context = {
		user: username,
		email: email,
		// mydata: CategoryService.data,
		id: role,
		isSA : '1' == role,
		isCompany: '2' == role,
		isRestaurant: '3' == role
	}
	if(role == 3){	
	CategoryService.GetCategory( category => {
		context['mydata'] = category;
	App.handlebar(context, CategoryList);
	});
	//get category
	}
		
});

$( document ).on( 'click','#getCateogryId', function(){ //autofill text field for update Category
	var id = $( this ).data( 'id' );
	Finch.route(App.route.UpdateCategory.route, function(){
	var n = id.toString();
	// console.log(n);
	CategoryService.GetCategory( category => {
	var data = category;
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
	App.handlebar(context, UpdateCategory);
	});
});
});

$( document ). on('click', '#Updatecategory-btn', function(e){  // udate category
	e.preventDefault();
	var id = $( this ).data( 'id' );
	// console.log(id);
	var data= {};
	data[ 'name' ] = $( "input[ name=updatecategoryname ]" ).val();
	CategoryService.UpdateCategory(data, id);
});

$( document ). on('click', '#deleteCategory', function(){ // delete category
	var data = $( this ).data( 'id' );
	var row = $(this).closest("tr")[0];
	CategoryService.DeleteCategory( data );
	row.remove();

});
