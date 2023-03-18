@extends('layouts.main')
@section('isi')




        <!--Troubleshoot Start-->
        <div class="content">
            <div class="text-heading">
                <h1 class="text">Maintenance Detail</h1>
                <div class="text-link">
                    <a href="./maintenanceList.html">Maintenance List</a>
                    <span>/</span>
                    <a href="" class="text-active">Maintenance Detail</a>
                </div>
            </div>
            <!--Content Troubleshoot List Start-->
            <div class="content-list">
                <div class="content-detail">
                    <div class="list-detail">
                        <span class="list">Name</span>
                        <div class="list-content">
                            <span>Checlist Device Taman</span>
                        </div>
                    </div>
                    <div class="list-detail">
                        <span class="list">Type</span>
                        <div class="list-content">
                            <span>Hardware & Operating System</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="list-detail">
                        <span class="list">Departement</span>
                        <div class="list-content">
                            <span>IT</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="setting-btn">
                        <button onclick="location.href='maintenanceList.html'" class="red">Cancel</button>
                        <button onclick="location.href='MaintenanceDetailForm.html'" class="blue">Update</button>
                    </div>
                </div>
            </div>
            <!--Content Troubleshoot List End-->
        </div>
    </section>
 @endsection
