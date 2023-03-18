@extends('layouts.main')
@section('isi')



        <!--Maintenance Start-->
        <div class="content">
            <div class="text-heading">
                <h1 class="text">Maintenance List</h1>
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
                <a href="{{ route('maintenance.create')}}" class="add-content">
                    <i class='bx bx-add-to-queue'></i>
                    <span class="name-add">
                        Add Maintenance
                    </span>
                </a>
            </div>
            <div class="table-responsive table-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Type</th>
                            <th>Checklist Group</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($maintenances as $maintenance)
                        <tr id="row-{{$maintenance->id}}">
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $maintenance->name }}</td>
                            <td>{{ $maintenance->type }}</td>
                            <td>
                                <div class="checklist-box">
                                    <a href="./checklistDeviceList.html">Checklist Group</a>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="{{ route('maintenance.show', $maintenance->id)}}" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="{{ route('maintenance.show', $maintenance->id)}}" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
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
