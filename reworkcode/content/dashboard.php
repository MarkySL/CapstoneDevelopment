<!Doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS Code-->
    <link rel="stylesheet" href="../assets/css/main.css" type="text/css"/>

    <!--Boostrap CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!--Title-->
    <title>Admin Dashboard</title>

    <!--Latest/Update Kit Fontawesome Icons-->
    <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>
</head>


<body>
	  <div class="sidenav">
      <p class="logo"><span>P</span>et-Allies <br> Animal Clinic</p>

      <a href="admin.php" class="icon-a"><i class="fa-solid fa-house all_icon"></i> &nbsp;&nbsp;Dashboard</a>

      <a href="../PetInformation/petinfodisplay.php"class="icon-a"><i class="fa-solid fa-heart all_icon"></i> &nbsp;&nbsp;Monitoring</a>

      <a href="../PetMonitoring/monitoring.php"class="icon-a"><i class="fa-solid fa-file-medical all_icon"></i> &nbsp;&nbsp;Follow-ups</a>

      <!--<a href="../SalesRep/monthlySR.php"class="icon-a"><i class="fa-solid fa-money-bill icons"></i> &nbsp;&nbsp;Clinic Visits</a>-->

      <a href="../Inventory/inventory.php"class="icon-a"><i class="fa-solid fa-user all_icon"></i> &nbsp;&nbsp;User Accounts</a>

      <a href="../login_validation/logout.php"class="icon-a"><i class="fa-solid fa-right-from-bracket all_icon"></i> &nbsp;&nbsp;Logout</a>
    </div>

    <div class="main">

	    <div class="head">
		    <div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav">Dashboard</span>
      </div>
	
	    <div class="col-div-6">
	    <div class="profile">

		    <img src="../assets/imgs/PetAlliesLogowithBG.png" class="pro-img" />
		    <p>Administrator</p>
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
	      <div class="clearfix"></div>
      </div>

	    <div class="clearfix"></div>
	    <br/>
	
      <div class="col-div-3">
        <div class="box">
          <p>67<br/><span>Clients</span></p>
          <i class="fa-solid fa-paw box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>88<br/><span>Vaccines</span></p>
          <i class="fa-solid fa-syringe box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>55<br/><span>Stocks</span></p>
          <i class="fa-solid fa-warehouse box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>78<br/><span>Meds</span></p>
          <i class="fa-solid fa-suitcase-medical box-icon"></i>
        </div>
      </div>
      <div class="clearfix"></div>
      <br/><br/>
      <div class="col-div-8">
          <div class="box-8">
            <div class="content-box">
                <p>Updated List Clients <a href="../PetInformation/petinfodisplay.php"><span>See All</span></a></p>
                <br/>
                <table>
                  <tr>
                    <th>Clients</th>
                    <th>Dog Name</th>
                    <th>Breed</th>
                  </tr>
                  <tr>
                    <td>Andrew Ramirez</td>
                    <td>Brownie</td>
                    <td>German Shepherd</td>
                  </tr>
                  <tr>
                    <td>Keysha Rodriguez</td>
                    <td>Truffle</td>
                    <td>Golden Retriever</td>
                  </tr>
                  <tr>
                    <td>Emman Salvacion</td>
                    <td>Trixie</td>
                    <td>Rottweiler</td>
                  </tr>
                  <tr>
                    <td>Justin Svenson</td>
                    <td>Bettle</td>
                    <td>American Bully</td>
                  </tr> 
                </table>
            </div>
	        </div>
	    </div>

      <div class="col-div-4">
             <div class="box-4">
                <div class="content-box">
                  <p>Total Sale <span>See All</span></p>

                  <div class="circle-wrap">
                    <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
        
        <div class="clearfix"></div>
    </div>

</body>

</html>
