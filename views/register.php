<?php

echo'
<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="'.adm.'assets/css/normalize.css">

    
        <link rel="stylesheet" href="'.adm.'/assets/css/style.css">
<br><br><br>
<div class="form">
      
      
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>
          
          <form action="'.root.'controlers/register_control.php" method="post">
          
          <div class="field-wrap">
            <label>
              Your Full Name<span class="req">*</span>
            </label>
            <input type="text" name="nama" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              User Name<span class="req">*</span>
            </label>
            <input type="text" name="user" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="input type="password" name="password" id="password"required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
             Re Password<span class="req">*</span>
            </label>
            <input type="password" name="repassword" id="repassword" onkeyup="cekpas()"autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
             Your College<span class="req">*</span>
            </label>
            <input type="text" name="college" />
          </div>
          <div class="field-wrap">
            <label>
             Your College<span class="req">*</span>
            </label>
            <select class="field-wrap" name="level">
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
          </div>
          
          <input type="submit" name="register" value="REGISTER" id="button" disabled="false">
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="'.adm.'/assets/js/index.js"></script>

    

		<p id="error"></p>
';

?>
<script>
function cekpas()
{
	var pass = document.getElementById('password').value;
	var repass = document.getElementById('repassword').value;

	if(pass == repass)
		{
		document.getElementById('button').disabled = false;
		document.getElementById('error').innerHTML = 'sama';
		}
	else
	{

			document.getElementById('button').disabled = true;
			document.getElementById('error').innerHTML = 'error';
		
	}
}
</script>