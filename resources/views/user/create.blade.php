<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form | IT Dept</title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS Link-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!--JS Link-->
    <script src="./assets/js/main.js" defer></script>
    <!--Script Font Awseome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Link CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <div class="img-logo">
                <img src="./assets/img/Loka 4.png" alt="">
            </div>
            <span class="logo_name">IT DEPT</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="./dashboard.html">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-stats'></i>
                        <span class="link_name">Troubleshoot</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="./troubleshootList.html">Troubleshoot</a></li>
                    <li><a href="./troubleshootList.html">Troubleshoot List</a></li>
                    <li><a href="./troubleshootForm.html">New Troubleshoot</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-wrench'></i>
                        <span class="link_name">Maintenance</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Maintenance</a></li>
                    <li><a href="./maintenanceList.html">Maintenance List</a></li>
                    <li><a href="./newMaintenanceForm.html">New Maintenance</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-bar-chart-square'></i>
                        <span class="link_name">Project</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="./projectList.html">Project</a></li>
                    <li><a href="./projectList.html">Project List</a></li>
                    <li><a href="./newProject.html">New Project</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-report' ></i>
                        <span class="link_name">WO</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="./WO_InList.html">WO</a></li>
                    <li><a href="./WO_InList.html">WO In</a></li>
                    <li><a href="./WO_OutList.html">WO Out</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-server'></i>
                        <span class="link_name">Inventaris</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Inventaris</a></li>
                    <li><a href="./inventaris_LaptopList.html">Laptop</a></li>
                    <li><a href="./inventaris_PCList.html">PC</a></li>
                    <li><a href="./inventaris_PCPos.html">PC Pos</a></li>
                    <li><a href="./inventarisMobileList.html">Mobile</a></li>
                    <li><a href="./inventaris_PrinterList.html">Printer</a></li>
                    <li><a href="./inventaris_OTGList.html">OTG</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-detail'></i>
                        <span class="link_name">Administrasi System dan Aplikasi</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Administrasi System dan Aplikasi</a></li>
                    <li><a href="./asaAnalisaList.html">Form Analisa</a></li>
                    <li><a href="./asaUATList.html">Form UAT</a></li>
                    <li><a href="./asaImprovmentList.html">Form Improvement</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-user'></i>
                        <span class="link_name">User</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">User</a></li>
                    <li><a href="./userList.html">User List</a></li>
                    <li><a href="./newUser.html">New User</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <!--Nav Bar Start-->
        <div class="home-content">
            <i class='bx bx-menu' ></i>
            <div class="detail-profile">
                <div class="profile-dropdown" onclick="toggle()">
                    <img src="./assets/img/download.jpg" alt="">
                    <span class="name-profile">Magang 2022</span>
                    <i class='bx bxs-chevron-down' ></i>
                </div>
                <ul class="profil-menu">
                    <li class="menu-profile">
                        <a href="#">Account</a>
                    </li>
                    <li class="menu-profile">
                        <a href="./login.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Nav Bar End-->

        <!--Troubleshoot Start-->
        <div class="content">
            <div class="text-heading">
                <h1 class="text">User Form</h1>
                <div class="text-link">
                    <a href="./userList.html">User List </a>
                    <span>/</span>
                    <a href="" class="text-active">User Form</a>
                </div>
            </div>
            <!--Content Troubleshoot List Start-->
            <div class="content-list">
                <div class="wrapper-input-box">
                    <div class="input-box">
                        <form action="#">
                            <div class="list-detail">
                                <label for="" class="name-content">Name</label>
                                <input placeholder="Name of User" type="text" class="text-content">
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Full Name</label>
                                <input placeholder="Full Name of User" type="text" class="text-content">
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Email</label>
                                <input placeholder="Email of User" type="email" class="text-content">
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Password</label>
                                <input placeholder="Password of User" type="password" class="text-content">
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Level</label>
                                <div class="wrapper-form-select">
                                    <select name="links" id="" class="form-select">
                                        <option value="">Admin</option>
                                        <option value="">Management</option>
                                        <option value="">User</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="setting-btn">
                            <button onclick="location.href='userList.html'" class="red">Cancel</button>
                            <button onclick="togglePopup()" class="blue">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Content Troubleshoot List End-->
        </div>
        <!--Pop UP Strat-->
        <div class="popup" id="popup-1">
            <div class="overlay">
                <div class="content">
                    <div class="img-popup">
                        <img src="./assets/img/undraw_done_re_oak4.svg" alt="">
                    </div>
                    <h1>Submit was Succesfull</h1>
                    <p>Data  Berhasil ditambahkan!</p>
                </div>
            </div>
        </div>
        <!--Pop UP End-->
    </section>
    <!--Link JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
