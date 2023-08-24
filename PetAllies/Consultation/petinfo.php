<?php
  
  session_start();

  include '../Connection/connect.php';

  

  if (isset($_POST['add_client'])) {
    $ownername=$_POST['o_name']; //this data should match the name in the div form-group
    $phone=$_POST['phone']; //this data should match the name in the div form-group
    $address=$_POST['add']; //this data should match the name in the div form-group
    $petname=$_POST['p_name']; //this data should match the name in the div form-group
    $birthday=$_POST['b_day']; //this data should match the name in the div form-group
    $gender=$_POST['gender']; //this data should match the name in the div form-group
    $species=$_POST['species']; //this data should match the name in the div form-group
    $breed=$_POST['breed']; //this data should match the name in the div form-group
    $color_markings=$_POST['c_markings']; //this data should match the name in the div form-group

    $sql="insert into petinfo(o_name,phone,address,p_name,b_day,gender,species,breed,c_markings) values('$ownername','$phone','$address','$petname','$birthday','$gender','$species','$breed','$color_markings')"; // insert into will have the table column names and the value will have the dataname

    $result=mysqli_query($con,$sql); //it will have the passing parameters which will be the connection data variable and the sql variable

    if ($result) 
    {
        header('location:petinfodisplay.php');
    } 
    else
    {
        echo("Failed Adding Data");
    }
  }
?>

<!Doctype HTML>
<html>
<head>
  <title>Pet Information</title>
  <link rel="stylesheet" href="../MyStyles/petinfostyle.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Latest/Update Kit Fontawesome-->
  <script src="../Javascripts/fontawesome.js" crossorigin="anonymous"></script>

  <!--Stylesheet for Div Content-->
  <style type="text/css">
    
    label {
      display: inline-block;
      text-align: right;
      width: 100px;
      padding-top: 10px;
      padding-bottom: 10px;
      color: black;
    }

    h1 {
      color: wheat;
    }

    .content {
      background-color: whitesmoke;
      width: 400px;
      box-shadow: 0px 5px 10px skyblue;
    }
  </style>
</head>


<body>
  <div id="mySidenav" class="sidenav">
    <p class="logo"><span>P</span>et-Allies</p>
    <a href="../Content/admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="../Consultation/petinfodisplay.php"class="icon-a"><i class="fa-solid fa-paw icons"></i> &nbsp;&nbsp;Consultation</a>
    <a href="../Surgery/surgery.php"class="icon-a"><i class="fa-solid fa-staff-snake icons"></i> &nbsp;&nbsp;Surgery</a>
    <a href="../SalesRep/monthlySR.php"class="icon-a"><i class="fa-solid fa-money-bill icons"></i> &nbsp;&nbsp;Sales Report</a>
    <a href="../Inventory/inventory.php"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
    <a href="../Login/logout.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Logout</a>
  </div>

  <div id="main">
    <div class="head">
      <div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
      </div>
    </div>

    <div class="col-div-6">
      <div class="profile">
        <img src="../Content/Chanel.jpg" class="pro-img" />
        <p>Chanel<span>Pawministrator</span></p>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  </div>

  <script src="../Javascripts/navigationclick.js"></script>

  <script>
    $(".nav").click(function() {
      $("#mySidenav").css('width', '70px');
      $("#main").css('margin-left', '70px');
      $(".logo").css('visibility', 'hidden');
      $(".logo span").css('visibility', 'visible');
      $(".logo span").css('margin-left', '-10px');
      $(".icon-a").css('visibility', 'hidden');
      $(".icons").css('visibility', 'visible');
      $(".icons").css('margin-left', '-8px');
      $(".nav").css('display', 'none');
      $(".nav2").css('display', 'block');
    });

    $(".nav2").click(function() {
      $("#mySidenav").css('width', '300px');
      $("#main").css('margin-left', '300px');
      $(".logo").css('visibility', 'visible');
      $(".icon-a").css('visibility', 'visible');
      $(".icons").css('visibility', 'visible');
      $(".nav").css('display', 'block');
      $(".nav2").css('display', 'none');
    });
  </script>
  </div>


  <div class="container">
    <center>
      <h1>PET ALLIES Animal Clinic</h1>
    <div class="content">
      <form action="#" method="POST">

        <div class="form-group">
          <label>Owner:</label>
          <input type="text" class="form-control" placeholder="Enter owner name" name="o_name">
        </div>

        <div class="form-group">
          <label>Phone:</label>
          <input type="number" class="form-control" placeholder="Enter phone number" name="phone">
        </div>

        <div class="form-group">
          <label>Address:</label>
          <input type="text" class="form-control" placeholder="Enter address " name="add">
        </div>

        <div class="form-group">
          <label>Pet:</label>
          <input type="text" class="form-control" placeholder="Enter pet name" name="p_name">
        </div>

        <div class="form-group">
          <label>Birthday:</label>
          <input type="date" class="form-control" name="b_day">
        </div>

        <div class="form-group">
          <label>Gender:</label>
          <input type="text" class="form-control" placeholder="Enter pet gender " name="gender">
        </div>

        <div class="form-group">
          <label>Species:</label>
          <input type="text" class="form-control" placeholder="Enter species" name="species">
        </div>

        <div class="form-group">
          <label>Breed:</label>
          <input type="" class="form-control" placeholder="Enter breed " name="breed">
        </div>

        <div class="form-group">
          <label>CM:</label>
          <input type="text" class="form-control" placeholder="Enter color markings" name="c_markings">
        </div>

        <button type="submit" class="btn btn-primary" name="add_client">Add Client</button>
      </form>
    </div>
    </center>
  </div>
</body>

</html>