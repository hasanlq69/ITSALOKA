@extends('layouts.main')
@section('isi')


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
@endsection
