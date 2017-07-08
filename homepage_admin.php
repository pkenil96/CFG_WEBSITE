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

      label{
        margin-right: 10px;
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
              <li><a id="btn-one">View Inventory</a></li>
              <li><a id="btn-two">View Children</a></li>
              <li><a id="btn-three">View Staff</a></li>
              <li><a id="btn-four">Monthly Report</a></li>
              <li><a id="btn-five">Add/Remove students</a></li>
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

    $('#btn-four').click(function(){
      //generate a monthly report
    });

    $('#btn-five').click(function(){
      $('#main-content').html('<h3><label>Enter name</label><input type="text" placeholder="Enter Name" name="name"><br><br><label>Enter Age</label><input type="text" placeholder="Enter Age" name="age"><br><br><label>Choose Gender</label><select name="gender"><option value="Boy">Boy</option><option value="Girl">Girl</option></select><br><br><label>Choose School-type</label><select name="school_type"><option value="Home-school">Home-school</option><option value="Private">Private</option></select><br><br><label>Enter School-name</label><input type="text" placeholder="School name" name="school_name"><br><br><label>Choose Standard</label><input type="text" placeholder="Standard"><br><br><label>Enter grades</label><input type="text" placeholder="Grade" name="grade"></h3><br><button type="button" class="btn btn-success" onclick="add_child()">Add child</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="reset()">Reset</button>');
    });

    function add_child(){
      var name1=document.getElementsByName('name').value;
      var age1=document.getElementsByName('age').value;
      $.ajax({
        type: "POST",
        url: "./add_child.php",
        data: {
          name: name1,
          age: age1
        }
      });
    }

    function reset(){
      $('#btn-five').click();
    }
</script>


</html>
