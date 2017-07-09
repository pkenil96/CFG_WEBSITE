<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Reaching hands</title>

    <style type="text/css">
      #main{
        margin-top: 0px;
      }

      #jumbotron-header{
        margin-bottom: 0px;
      }

      body{
        background-image: url('./1.jpeg');
        background-repeat: no-repeat;
      }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
 </head>

  <body>
    <div class="jumbotron" id="jumbotron-header">
      <img src="img.png" alt="logo" align="left" float="left">
    </div>

    <div class="container" id="main">    
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                            
        <div class="panel panel-info" >
          <div class="panel-heading">
            <div class="panel-title">Sign In</div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a>
            </div>
          </div>     

          <div style="padding-top:30px" class="panel-body"></div>
          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
        <form method="POST" action="login.php" id="loginform" class="form-horizontal" role="form">
          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="text" class="form-control" name="username" id="uname" value="" placeholder="username or email">                                        
          </div>
                                
          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="login-password" type="password" class="form-control" name="password"  placeholder="password">
          </div>                                    

          <div class="input-group">
            <div class="checkbox">
              <label>
                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
              </label>
            </div>
          </div>

          <div style="margin-top:10px" class="form-group">
          <div class="col-sm-12 controls">
            <input id="btn-login" class="btn btn-success" type="submit" value="Login" onsubmit="return login();" />
          </div>
          </div>                                
        </form>  
      </div>  
    </div>  
  </div>
</div>
        

<script type="text/javascript">
  function login(){
    var uname=document.getElementById('login-username').value;
    var pass=document.getElementById('login-password').value;

      if(uname.length==0 || pass.length==0){
        alert("Username or Password cannot be blank!");
        return false;
      }

          //return true;
  }  
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->    
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
</body>
</html>
