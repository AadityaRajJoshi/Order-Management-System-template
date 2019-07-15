<script id="login" type="text/template">
	<div style="height: 660px; "class="page-wrapper">
	    <div style="background-image: url('images/icon/login.jpg');" class="page-content--bge5">
	        <div  class="container">
	           
	            <div class="login-wrap">
	                <div  class="login-content">
	                	
	                    <i><h6 class="slogan">Ramailo</h6></i>
	                    {{id}}
	                    <div class="login-logo">
	                            <img src="images/icon/logo.jpg" alt="CoolAdmin">
	                    </div>
	                    <div class="login-form">
	                        <form  method="post" id="login-form">
	                            <div class="form-group">
	                                <label>User Name</label>
	                                <input class="au-input au-input--full" type="text"  name="username" placeholder="User name" >
	                            </div>
	                            <div class="form-group">
	                                <label>Password</label>
	                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
	                            </div>
	                            <div class="login-checkbox">
	                                <label for="remember">
	                                    <input type="checkbox" id="chkSelect" name="remember">Remember Me
	                                </label>
	                                <label>
	                                    <a href="#">Forgotten Password?</a>
	                                </label>
	                            </div>
	                            <button id = 'login-btn' class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        
	        </div>
	    </div>
	</div>
</script>