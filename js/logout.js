var LogoutService = {
	logout: function(){
		var onlogout = function( response ){
			// console.log( response.message );
			$.removeCookie('role_id', { path: '/' });
			$.removeCookie('username', { path: '/' });
			$.removeCookie('email', { path: '/' });
	
			App.navigate('logIn');
		};

		var onError  = function( error ){
			console.log( error );
		};

		App.api.post({
			success: onlogout,
			error: onError,
			url: 'logout'
		});
	}
}

$( document ).ready(function(){
	$( "#btn" ).click(function(){
		// console.log('dasdasd');
		LogoutService.logout();
	});
});

