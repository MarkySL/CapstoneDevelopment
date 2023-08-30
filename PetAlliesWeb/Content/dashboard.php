<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS Code-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/imgs/PetAlliesFavicon.png" type="image/x-icon">
    <title>Admin Dashboard</title>

    <!--Fontawesome Scripts Icons-->
    <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>

</head>
<body>
    <!--Global-->
    <div class="container">
        <!--Navigation Bar-->
        <div class="nav_bar">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><img src="../assets/imgs/PetAlliesFavicon.png" alt="No Image"></span>
                        <span class="main_title">Pet Allies <br> Animal Clinic</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-house all_icon"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-heart all_icon"></i></span>
                        <span class="title">Monitoring</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-file-medical all_icon"></i></span>
                        <span class="title">Follow-ups</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-house-medical-circle-check all_icon"></i></span>
                        <span class="title">Clinic Visits</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-warehouse all_icon"></i></span>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-user all_icon"></i></span>
                        <span class="title">User Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="../Login_validation/login_register.php">
                        <span class="icon"><i class="fa-solid fa-right-from-bracket all_icon"></i></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ====================== Main =================== -->
        <div class="main_bar">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search Here">
                        <i class="fa-solid fa-magnifying-glass search_icon"></i>
                    </label>
                </div>
                <div class="user">
                    <!--Edit this to have a function of upload image-->
                    <img src="../assets/imgs/Chanel.jpg" alt="No Image">
                </div>
            </div>
        
            <!-- ============= CARDS ================ -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">512</div>
                        <div class="cardName">Visits</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-qrcode"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">65</div>
                        <div class="cardName">Clients</div>
                    </div>
                        
                    <div class="iconBx">
                        <i class="fa-solid fa-paw"></i>
                    </div>
                </div>
                <!--
                <div class="card">
                    <div>
                        <div class="numbers">35</div>
                        <div class="cardName"></div>
                    </div>

                    <div class="iconBx">
                        xxxx
                    </div>
                </div>
                -->
                <div class="card">
                    <div>
                        <div class="numbers">555</div>
                        <div class="cardName">User Accounts</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
            </div> 

            <!-- ================ Clients list ================ -->
            <div class="details">
                <div class="recentClient">
                    <div class="cardHeader">
                        <h2>Updated List of Clients</h2>
                        <a href="monitoring.php" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Owner</td>
                                <td>Pet Name</td>
                                <td>Species</td>
                                <td>Breed</td>
                                <td>Birthday</td>
                            </tr>
                        </thead>

                        <tbody> <!-- Temporary Body Substitute w/ Data from Monitoring Bar-->
                            <tr>
                                <td>Nheil Orongan</td>
                                <td>Sky</td>
                                <td>Dog</td>
                                <td>Pomeranian</td>
                                <td>January 1, 2022</td> <!--You can designate a class for edit-->
                            </tr>

                            <tr>
                                <td>Keysha Traya</td>
                                <td>Milo</td>
                                <td>Cat</td>
                                <td>Persian</td>
                                <td>February 15, 2021</td> <!--You can designate a class for edit-->
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!--============= Android Users =============== -->
                <div class="recentUsers">
                    <div class="cardHeader">
                        <h2>Recent Users</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Owner</td>
                                <td>Username</td>
                                <td>Contact No.</td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>Nheil Orongan</td>
                                <td>Dreu</td>
                                <td>09775697452</td>
                            </tr>
                            <tr>
                                <td>Keysha Traya</td>
                                <td>Keysh</td>
                                <td>09635757968</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =============SCRIPTS============= -->
    <script src="../assets/js/main.js"></script>
</body>
</html>