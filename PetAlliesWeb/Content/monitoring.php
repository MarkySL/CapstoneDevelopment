<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS Code-->
    <link rel="stylesheet" href="../assets/css/monitoring-style.css">
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
                    <a href="dashboard.php">
                        <span class="icon"><i class="fa-solid fa-house all_icon"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="monitoring.php">
                        <span class="icon"><i class="fa-solid fa-heart all_icon"></i></span>
                        <span class="title">Monitoring</span>
                    </a>
                </li>
                <li>
                    <a href="follow-ups.php">
                        <span class="icon"><i class="fa-solid fa-file-medical all_icon"></i></span>
                        <span class="title">Follow-ups</span>
                    </a>
                </li>
                <li>
                    <a href="clinic-visits.php">
                        <span class="icon"><i class="fa-solid fa-house-medical-circle-check all_icon"></i></span>
                        <span class="title">Clinic Visits</span>
                    </a>
                </li>
                <li>
                    <a href="products.php">
                        <span class="icon"><i class="fa-solid fa-warehouse all_icon"></i></span>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li>
                    <a href="useraccounts.php">
                        <span class="icon"><i class="fa-solid fa-user all_icon"></i></span>
                        <span class="title">User Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="../Login_validation/logout.php">
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
                <div class="user">
                    <!--Edit this to have a function of upload image-->
                    <img src="../assets/imgs/PetAlliesLogowithBG.png" alt="No Image">
                </div>
            </div>

            <div class="monitoring">
                <div class="table_header">

                    <!-- Table Search Bar -->
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search Here">
                            <i class="fa-solid fa-magnifying-glass search_icon"></i>
                        </label>
                    </div>

                    <!--Title-->
                    <div class="table_title">
                        <h2>Client Information</h2>
                    </div>
                    
                    <!-- Table Add Button-->
                    <button class="add_btn" id="openModalBtn">
                        <a href="#">Add Client</a>
                    </button>
                </div>
                <div class="table_body">
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Owner</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Pet Name</th>
                                <th>Birthday</th>
                                <th>Gender</th>
                                <th>Species</th>
                                <th>Breed</th>
                                <th>C.Markings</th>
                                <th>Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nheil Orongan</td>
                                <td>09775667435</td>
                                <td>Manila,City</td>
                                <td>Sky</td>
                                <td>February 13, 2021</td>
                                <td>Male</td>
                                <td>Dog</td>
                                <td>Pomeranian</td>
                                <td>White/Black</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nheil Orongan</td>
                                <td>09775667435</td>
                                <td>Manila,City</td>
                                <td>Sky</td>
                                <td>February 13, 2021</td>
                                <td>Male</td>
                                <td>Dog</td>
                                <td>Pomeranian</td>
                                <td>White/Black</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nheil Orongan</td>
                                <td>09775667435</td>
                                <td>Manila,City</td>
                                <td>Sky</td>
                                <td>February 13, 2021</td>
                                <td>Male</td>
                                <td>Dog</td>
                                <td>Pomeranian</td>
                                <td>White/Black</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nheil Orongan</td>
                                <td>09775667435</td>
                                <td>Manila,City</td>
                                <td>Sky</td>
                                <td>February 13, 2021</td>
                                <td>Male</td>
                                <td>Dog</td>
                                <td>Pomeranian</td>
                                <td>White/Black</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nheil Orongan</td>
                                <td>09775667435</td>
                                <td>Manila,City</td>
                                <td>Sky</td>
                                <td>February 13, 2021</td>
                                <td>Male</td>
                                <td>Dog</td>
                                <td>Pomeranian</td>
                                <td>White/Black</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ================== Modal/Popup Form ============ -->
        <div class="backdrop" id="modal">
            <div class="popup">
            <div class="close-btn">
                <i class="fa-solid fa-xmark" class="x_icon" id="closeModalBtn"></i>
            </div>
                <div class="form">
                    <h2>Client Information</h2>
                    <div class="popup_form">
                        <label>Owner:</label>
                        <input type="text" id="owner" name="owner">
                    </div>
                    <div class="popup_form">
                        <label>Contact#:</label>
                        <input type="text" id="phone" name="phone">
                    </div>
                    <div class="popup_form">
                        <label>Address:</label>
                        <input type="text" id="address" name="address">
                    </div>
                    <div class="popup_form">
                        <label>Pet Name:</label>
                        <input type="text" id="pet" name="petname">
                    </div>
                    <div class="popup_form">
                        <label>Pet Birthday:</label>
                        <input type="date" id="pet-birth" name="p-bday">
                    </div>
                    <div class="popup_form">
                        <label>Gender:</label>
                        <input type="text" id="gender" name="p-gender">
                    </div>
                    <div class="popup_form">
                        <label>Species:</label>
                        <input type="text" id="species" name="species">
                    </div>
                    <div class="popup_form">
                        <label>Breed:</label>
                        <input type="text" id="breed" name="breed">
                    </div>
                    <div class="popup_form">
                        <label>Color Markings:</label>
                        <input type="text" id="o_name" name="colmarks">
                    </div>
                    <div class="popup_form">
                        <a href="#">
                            <button>Submit</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============SCRIPTS============= -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/monitoring_modal.js"></script>
</body>
</html>