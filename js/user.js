var UserService = {
	data: false,
	noti: false,
	mydata: false,

	getOrder: function(fn){
		var onGet = function( response ){
			fn(response.data);
		};

		var onError = function( error ){

		};

		App.api.get({
			success: onGet,
			error : onError,
			url : 'CreateOrder'
		});
	},

	logIn: function( data ){
		var onLogin = function( response ){
			// console.log(response);
			if ( response.status == 200 )  {
			 var role_id = response.data.role_id;
			 var username = response.data.username;
			 var email = response.data.email;

			 if(role_id == 4 ){
			 	var restaurant_id = response.data.restaurant;
			 	$.cookie( "restaurant", restaurant_id, { path: '/' } );

			 	UserService.getOrder( order =>{
			 		// console.log(order);
			 		// $("#not").html(order);
			 		alert(order[0].remark);
			 	});
			 }
			
			  $.cookie( "role_id", role_id, { path: '/' } );
			  $.cookie( "username", username, { path: '/' } );
			  $.cookie( "email", email, { path: '/' } );
						
			  App.navigate( 'dashboard' );
			}
			// console.log(id);
		};

		var onError = function( error ){
			if(error.status = 400){
				alert('Please check Username or Password');
			}
		};

		App.api.post({
			success : onLogin,
			error   : onError,
			url     : 'logIn',
			data    : data,
		});
	},

	createuser: function( data ){
		var onCreate = function( response ){
			if( response.status == 201){
			// $("#usermessage").html(response.message);
			App.navigate('UserList');
			// UserService.mydata = response.data;
			UserService.noti = response;
			// console.log(UserService.noti);
			}
		};

		var onError = function( error ){
			if(error.status = 400){
				alert('error creating user');
			}
		};

		App.api.post({
			success : onCreate,
			error   : onError,
			url     : 'createuser',
			data    : data,
		});
	},

	UserList: function(  fn ){
		var OnSuccess = function( response ){
			// console.log(response);
			if( response.status == 200 ){
				// var userdata = response.data;
				  // UserService.data = response.data;
				  fn( response.data );
				 
			}	
			// console.log(UserService.data);
		};

		var onError = function( error ){
			console.log('not super admin');
		};

		App.api.get({
			success : OnSuccess,
			error   : onError,
			url     : 'UserList',
			
		});
	},

	List: function(  fn ){
		var OnSuccess = function( response ){
			// console.log(response);
			if( response.status == 200 ){
				// var userdata = response.data;
				  // UserService.data = response.data;
				  fn( response.data );
			}	
			// console.log(UserService.data);
		};

		var onError = function( error ){
			console.log('not super admin');
		};

		App.api.Userget({
			success : OnSuccess,
			error   : onError,
			url     : 'UserList',
			page    : 1
		});
	},

	UpdateUser: function( data, id ){
		//console.log( id );
		var OnSuccess = function( response ){
			// console.log( response );
			App.navigate('UserList');
		};

		var onError = function( error ){
			alert( 'error' );
		};

		App.api.put({
			success : OnSuccess,
			error   : onError,
			url     : 'updateUser',
			data    : data,
			id  : id
		});
	}, 

	DeleteUser: function( id ){
		var OnSuccess = function( response ){
			App.navigate('UserList');
			// console.log(response)
		};

		var OnError = function( error ){
			alert('error');
		};

		App.api.delete({
			success : OnSuccess,
			error   : OnError,
			url     : 'DeleteUser',
			data  : id
		});
	},
}



$( document ).on( 'click', '#login-btn', function(e) { //login 
	e.preventDefault();
	var data = {};
	data[ 'username' ] = $( "input[ name=username ]" ).val();
	data[ 'password' ] = $( "input[ name=password ]" ).val();
	UserService.logIn( data );
});

$( document ).on( 'click', '#createuser-btn', function(e) { //createuser
	e.preventDefault();
	var data = {};
	var role = ( $.cookie("role_id") );
	// console.log(role);
	if ( role == 1 ) {
		data[ 'username' ] = $( "input[ name=username1 ]" ).val();
		data[ 'email' ]    = $( "input[ name=useremail ]" ).val();
		data[ 'password' ] = $( "input[ name=userpassword ]" ).val();
		data[ 'nicename' ] = $( "input[ name=usernicename  ]" ).val();
	}
	else if( (role == 2) ){
		data[ 'username' ] = $( "input[ name=username1 ]" ).val();
		data[ 'email' ]    = $( "input[ name=useremail ]" ).val();
		data[ 'password' ] = $( "input[ name=userpassword ]" ).val();
		data[ 'role_id' ]  = $('#myselect').find(":selected").val();
		data[ 'nicename' ] = $( "input[ name=usernicename  ]" ).val();
	}
	UserService.createuser( data );
	  
 });


$( document ).on( 'click','#getUserId', function(){ //autofill text field for update user
	var id = $( this ).data( 'id' );
	Finch.route(App.route.updateUser.route, function(){
	var n = id.toString();
	 UserService.UserList( userdata =>{
	 	var data = userdata;
	var user_id = _.findIndex( data, {'id': n} );
//console.log(data);
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
			context['mydata'] = userdata[ user_id ];
			// console.log(context);
			App.handlebar(context, updateCreateUser);
		
	 }); 
	
});
});


$( document ).on('click', '#updateuser-btn', function(e){ //update user
	e.preventDefault();
	var id = $( this ).data( 'id' );
	var data = {};
	var role = ( $.cookie("role_id") );
	if ( role == 1 ) {
		data[ 'username' ] = $( "input[ name=username1 ]" ).val();
		data[ 'email' ]    = $( "input[ name=useremail ]" ).val();
		data[ 'nicename' ] = $( "input[ name=usernicename  ]" ).val();
	}
	//console.log(id);
	UserService.UpdateUser( data, id );
});

$( document ).on('click', '#deleteUserId', function( e ){ //delete user
	e.preventDefault();
	// alert('das');
	var id = $( this ).data( 'id' );
	var row = $(this).closest("tr")[0];
	// console.log(id);
	UserService.DeleteUser( id );
	row.remove();

});

Finch.route(App.route.createuser.route, function(){ //routing for create user
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
	App.handlebar(context, createuser);
		
});


Finch.route(App.route.UserList.route, function(){ //routing for user list

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
	
	if(role == 1 || role == 2){
		UserService.List( ( userdata ) => {
			context['mydata'] = userdata;
			// console.log(context);
			App.handlebar(context, userlist);
		});
	}	
});



