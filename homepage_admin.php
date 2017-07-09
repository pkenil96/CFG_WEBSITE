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

      img{
        width: 80%;
        height: 80%;
      }

      a{
        cursor: pointer;
      }
    </style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

 </head>

  <body class="container-fluid" style="margin-top:5px;">
      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <img src="img.png" alt="logo" align="left" float="left">
            </div>
            <ul class="nav navbar-nav">
              <li><a id="btn-one">View Inventory</a></li>
              <li><a id="btn-two">View Children</a></li>
              <li><a id="btn-three">View Staff</a></li>
              <li><a id="btn-four">Monthly Report</a></li>
              <li><a id="btn-five">Add/Remove students</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a id="logout">Logout</a></li>
            </ul>

          </div>
      </nav>
    <div id="main-content" style="width:100%; height:auto; margin-left:50px; margin-top:20px;">
    </div>  
  </body>
	
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
      $('#main-content').load('./add_child_form.php');
    });

    $('#logout').click(function(){
      window.location.href = './index.php';
    });

    function add_child(){
      var name1 = $('#add_child_name').val();
      var age1 = $('#age_child').val();
      var gender1 = $('#gender').val();
      var school_type1 = $('#school_type').val();
      var school_name1 = $('#school_name').val();
      var standard1 = $('#standard').val();
      var grade1 = $('#grade').val();
      
      $.ajax({
        type: "POST",
        url: "./add_child.php",
        data: {
          name: name1,
          age: age1,
          gender: gender1,
          school_type: school_type1,
          school_name: school_name1,
          standard: standard1,
          grade: grade1
        },
        success: function(){
          $('#add_child_msg').html('<h1>Added</h1>');
        }
      });
    }

    function reset(){
      $('#btn-five').click();
    }
</script>


</html>
