@extends('layouts.main')
@section('isi')
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
                <h1 class="text">User List</h1>
                <div class="search-box">
                    <input type="text" placeholder="Search">
                    <i class='bx bx-search' ></i>
                </div>
            </div>
            <div class="controller-content">
                <div class="items-controller">
                    <h5>Show</h5>
                    <select name="item" id="itemperpage">
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="08">08</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                    <h5>Per Page</h5>
                </div>
                <a href="./newUser.html" class="add-content">
                    <i class='bx bx-add-to-queue'></i>
                    <span class="name-add">
                        Add User
                    </span>
                </a>
            </div>
            <div class="table-responsive table-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Misbahul Munir</td>
                            <td>Munir</td>
                            <td>munir@salokapark.com</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Ikbal Y</td>
                            <td>Ikbal</td>
                            <td>ikbal@it.saloka</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Banu Susanto</td>
                            <td>banu</td>
                            <td>Banu@it.saloka</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Muh Khoirul Irvan</td>
                            <td>Irvan</td>
                            <td>irvan@salokapark.com</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Reza Zhainal Abhidhin</td>
                            <td>reza</td>
                            <td>reza@it.saloka</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>Jody Setiawan</td>
                            <td>Jody</td>
                            <td>jody.setiawan@salokapark.com</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>Apps and System Divition</td>
                            <td>App Div</td>
                            <td>appdiv@salokapark.com</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td>Wiratmoko</td>
                            <td>wiratmoko</td>
                            <td>wiratmoko@salokapark.com</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <td>Desi Ramadina</td>
                            <td>Desi</td>
                            <td>desi.ramadina@salokapark.com</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>10</th>
                            <td>2022</td>
                            <td>Magang</td>
                            <td>magang@salokapark.com</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./userForm.html" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Pagination Start-->
            <div class="pagination-content">
                <ul class="pagination">
                    <li class="prev">
                        <a href="#" id="prev" class="size-pagination">
                            &#139;
                        </a>
                    </li>
                    <!--<li class="list"><a href="#">01</a></li>-->
                    <!--<li class="list"><a href="#">02</a></li>-->
                    <!--<li class="list"><a href="#">03</a></li>-->
                    <li class="next">
                        <a href="#" id="next" class="size-pagination">
                            &#155;
                        </a>
                    </li>
                </ul>
            </div>
            <!--Pagination End-->
        </div>
    </section>
 @endsection
