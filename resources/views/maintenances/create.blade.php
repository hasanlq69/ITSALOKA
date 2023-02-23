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
                <h1 class="text">Maintenance Detail</h1>
                <div class="text-link">
                    <a href="{{ route('maintenance.index')}}">Maintenance List</a>
                    <span>/</span>
                    <a href="{{ route('maintenance.create')}}" class="text-active">Maintenance Form</a>
                </div>
            </div>
            <!--Content Troubleshoot List Start-->
            <div class="content-list">
                <div class="wrapper-input-box">
                    <div class="input-box">
                        <form method="POST" action="{{ route('maintenance.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="list-detail">
                                <label for="" class="name-content">Name</label>
                                <input placeholder="Name of maintenance" type="text" class="text-content" name="name">
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Type</label>
                                <select name="type" id="" class="form-select">
                                    <option value="Hardware & Operating System">Hardware & Operating System</option>
                                    <option value="Software System">Software System</option>
                                    <option value="Networking">Networking</option>
                                </select>
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Departement</label>
                                <select name="department" id="" class="form-select">
                                    <option value="Operational">Operational</option>
                                    <option value="IT">IT</option>
                                    <option value="HRGA">HRGA</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Maintenance">Maintenance</option>
                                    <option value="Inpark Revenue">Inpark Revenue</option>
                                    <option value="Entertainment">Entertainment</option>
                                </select>
                            </div>

                        <div class="setting-btn">
                            <button onclick="location.href={{ route('maintenance.index')}}" class="red">Cancel</button>
                            <button  type="submit" onclick="togglePopup()" class="blue">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

         {{-- <!--Pop UP Strat-->
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
        <!--Pop UP End--> --}}
    </section>


@endsection
