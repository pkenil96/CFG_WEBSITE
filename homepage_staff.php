<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Reaching hands</title>
    <style type="text/css">
      #main{
        margin-top: 0px;
      }

      #jumbotron-header{
        margin-bottom: 0px;
      }
    </style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

 </head>

  <body class="container-fluid" style="margin-top:5px;">
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Reaching Hands</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a id="btn-one" >View Inventory</a></li>
              <li><a id="btn-two">View Children</a></li>
              <li><a id="btn-three">View Staff</a></li>
              <li><a id="btn-four">Monthly Report</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a id="logout">Logout</a></li>
            </ul>
          </div>
      </nav>
    <div id="main-content" style="width:100%; height:auto; margin-left:50px; margin-top:20px;">
    </div>   

  </body>

	
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('#btn-one').click(function(){
      $('#main-content').load('./inventory.php');
    });

    $('#btn-two').click(function(){
      $('#main-content').load('./children.php');
    });

    $('#btn-three').click(function(){
      $('#main-content').load('./staff.php');
    });

    $('#logout').click(function(){
      window.location.href = './index.php';
    });

</script>


</html>
