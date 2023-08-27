<?php

session_start();

include '../Connection/connect.php';

if (!isset($_SESSION['username'])) {
    header("location:../Login/login.php");
}
/* This prevents any usertype to access the admin 
    from changing the url localhost link because they will be redirected to the login page*/ elseif ($_SESSION['usertype'] == 'SuperAdministrator') {
    header("location:../Login/login.php");
}

?>

<!Doctype HTML>
<html>

<head>
    <link rel="stylesheet" href="../MyStyles/adminstyle.css" type="text/css" />
    <!--Fontawesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap CDN CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--Latest/Update Kit Fontawesome-->
    <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>
    <!--Ajax JQuery Script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--AJAX Script to filter the datas in the table-->
    <script>
        $(document).ready(function(){
            $("#search-input").on("keyup",function(){
                var value = $(this).val().toLowerCase();
                //This creates a variable for filtering of records
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <style type="text/css">
        .btn
        {
            padding: 5px;
            text-decoration: none;
        }

        .btn-primary{
            float: right;
            margin-right: 50px;
        }

        .text-light
        {
            text-decoration: none;
            
        }

        .search-function{
            padding: 5px;
            box-shadow: 0px 5px 10px black;
        }

    </style>
</head>


<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>P</span>et-Allies</p>
        <a href="../Content/admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="petinfodisplay.php"class="icon-a"><i class="fa-solid fa-paw icons"></i> &nbsp;&nbsp;Pet Information</a>
        <a href="../PetMonitoring/monitoring.php"class="icon-a"><i class="fa-solid fa-staff-snake icons"></i> &nbsp;&nbsp;Pet Monitoring</a>
        <a href="../SalesRep/monthlySR.php"class="icon-a"><i class="fa-solid fa-money-bill icons"></i> &nbsp;&nbsp;Sales Report</a>
        <a href="../Inventory/inventory.php"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
        <a href="../Login/logout.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Logout</a>

    </div>
    <div id="main">

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">Dashboard</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">Dashboard</span>
            </div>

            <div class="col-div-6">
                <div class="profile">

                    <img src="../Content/Chanel.jpg" class="pro-img" />
                    <p>Chanel<span>Pawministrator</span></p>
                </div>
                <!-- For Navigation Bar Functionalities
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                -->
        </div>
    </div>
    
    <div class="container">
        <button class="btn btn-primary"><a href="petinfo.php" class="text-light">Add Client</a></button>
        <input type="text" class="search-function" placeholder="Search Client...." id="search-input">
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Owner</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Pet Name</th>
        <th scope="col">Birthday</th>
        <th scope="col">Gender</th>
        <th scope="col">Species</th>
        <th scope="col">Breed</th>
        <th scope="col">C.Markings</th>
        <th scope="col">Modify</th>
        </tr>
    </thead>
    <tbody id="myTable"> <!--Declare the Id for Search Function-->
        <?php
        
        $sql="select * from `petinfo`"; //this selects all the data from mysql table with the table name petinfo
        $result=mysqli_query($con,$sql); //this selects the data from the table
        if ($result) {
            /*This will print all the data available in the database*/
            while ($row=mysqli_fetch_assoc($result)) {
                $id=$row['id'];
                $owner=$row['o_name'];
                $phone=$row['phone'];
                $address=$row['address'];
                $petname=$row['p_name'];
                $birthday=$row['b_day'];
                $gender=$row['gender'];
                $species=$row['species'];
                $breed=$row['breed'];
                $cmarkings=$row['c_markings'];
                /* This is the data for the whole table */
                echo '<tr>
                <th scope="row">'.$id.'</th> 
                <td>'.$owner.'</td>
                <td>'.$phone.'</td>
                <td>'.$address.'</td>
                <td>'.$petname.'</td>
                <td>'.$birthday.'</td>
                <td>'.$gender.'</td>
                <td>'.$species.'</td>
                <td>'.$breed.'</td>
                <td>'.$cmarkings.'</td>
                <td>
                <button class="btn btn-success"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger" ><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                </td>
                </tr>';
            }
        }
        ?>
        
    </tbody>
    </table>
    </div>                 
    
    <!---Javascript for Seach Function-->
    <script>
       
    </script>
</body>

</html>