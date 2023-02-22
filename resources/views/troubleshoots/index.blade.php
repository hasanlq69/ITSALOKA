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
        <!--Troubleshoot Start-->
        <div class="content">
            <div class="text-heading">
                <h1 class="text">Troubleshoot List</h1>
                <div class="search-box">
                    <input type="text" placeholder="Search">
                    <i class='bx bx-search' ></i>
                </div>
            </div>
            <div class="controller-content">
                <div class="items-controller">
                    <h5>Show</h5>
                    <select name="item" id="">
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="08">08</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                    <h5>Per Page</h5>
                </div>
                <a href="{{ route('troubleshoot.create') }}" class="add-content">
                    <i class='bx bx-add-to-queue'></i>
                    <span class="name-add">
                        Add  Troubleshoot
                    </span>
                </a>
            </div>
            <div class="table-responsive table-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Trouble</th>
                            <th>Client Name</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>Finish Date
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($troubleshoots as $troubleshoot)
                        <tr id="row-{{$troubleshoot->id}}">
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $troubleshoot->trouble_name }}</td>
                            <td>{{ $troubleshoot->client_name }}</td>
                            <td>{{ $troubleshoot->status }}</td>
                            <td>{{ $troubleshoot->start}} </td>
                            <td>{{ $troubleshoot->finish}}</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="{{ route('troubleshoot.show', $troubleshoot->id)}}" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="{{ route('troubleshoot.edit', $troubleshoot->id)}}" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="{{ route('troubleshoot.destroy', $troubleshoot->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="set-trash"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    {{-- <a href="{{ route('troubleshoot.destroy', $troubleshoot->id)}}" class="set-trash"><i class="fa-solid fa-trash"></i></a> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- {{ $troubleshoots->links() }} --}}
            </div>
            {{-- <!--Pagination Start-->
            <div class="pagination-content">
                <ul class="pagination">
                    <li class="prev">
                        <a href="#" id="prev">
                            <i class='bx bx-chevron-left'></i>
                        </a>
                    </li>
                    <!--<li class="list"><a href="#">01</a></li>-->
                    <!--<li class="list"><a href="#">02</a></li>-->
                    <!--<li class="list"><a href="#">03</a></li>-->
                    <li class="next">
                        <a href="#" id="next">
                            <i class='bx bx-chevron-right' ></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--Pagination End--> --}}
        </div>
    </section>

@endsection
