@extends('layouts.main')
@section('isi')




<section class="home-section">
    <!--Nav Bar Start-->
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <div class="detail-profile">
            <div class="profile-dropdown" onclick="toggle()">
                <img src="{{ asset('assets/img/download.jpg') }}" alt="">
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
                <h1 class="text">Project Form</h1>
                <div class="text-link">
                    <a href={{ route('project.index')}}>Project List</a>
                    <span>/</span>
                    <a href="" class="text-active">Project Form</a>
                </div>
            </div>
            <!--Content Troubleshoot List Start-->
            <div class="content-list">
                <div class="wrapper-input-box">
                    <div class="input-box">
                        <form action="#">
                            <div class="list-detail">
                                <label for="" class="name-content">Name</label>
                                <input placeholder="Name Project" type="text" class="text-content">
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Type</label>
                                <select name="links" id="" class="form-select">
                                    <option value="">Hardware & Operating System</option>
                                    <option value="">Software System</option>
                                    <option value="">Networking</option>
                                </select>
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Departement</label>
                                <select name="links" id="" class="form-select">
                                    <option value="">Operational</option>
                                    <option value="">IT</option>
                                    <option value="">HRGA</option>
                                    <option value="">Sales</option>
                                    <option value="">Marketing</option>
                                    <option value="">Finance</option>
                                    <option value="">Maintenance</option>
                                    <option value="">Inpark Revenue</option>
                                    <option value="">Entertainment</option>
                                </select>
                            </div>
                        </form>
                        <div class="setting-btn">
                            <button onclick="location.href='projectList.html'" class="red">Cancel</button>
                            <button onclick="togglePopup()" class="blue">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
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
@endsection
