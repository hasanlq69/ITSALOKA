@extends('layouts.main')
@section('isi')



        <!--Troubleshoot Start-->
        <div class="content">
            <div class="text-heading">
                <h1 class="text">WO IN List</h1>
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
                <a href="./newWOIn.html" class="add-content">
                    <i class='bx bx-add-to-queue'></i>
                    <span class="name-add">
                        Add WO
                    </span>
                </a>
            </div>
            <div class="table-responsive table-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Departement</th>
                            <th>Description</th>
                            <th>Action</th>
                            <th>Date WO IN</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Endah</td>
                            <td>HRGA</td>
                            <td>Perbaikan printer epson L3150 yg berada d ruang HRGA</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pembuangan tinta dibersihkan</span>
                                </div>
                            </td>
                            <td>04/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Endah</td>
                            <td>HRGA</td>
                            <td>Perbaikan printer epson L3150 yg berada d ruang HRGA</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pembuangan tinta dibersihkan</span>
                                </div>
                            </td>
                            <td>04/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Endah</td>
                            <td>HRGA</td>
                            <td>Perbaikan printer epson L3150 yg berada d ruang HRGA</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pembuangan tinta dibersihkan</span>
                                </div>
                            </td>
                            <td>04/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Endah</td>
                            <td>HRGA</td>
                            <td>Perbaikan printer epson L3150 yg berada d ruang HRGA</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pembuangan tinta dibersihkan</span>
                                </div>
                            </td>
                            <td>04/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Endah</td>
                            <td>HRGA</td>
                            <td>Perbaikan printer epson L3150 yg berada d ruang HRGA</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pembuangan tinta dibersihkan</span>
                                </div>
                            </td>
                            <td>04/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>Widya</td>
                            <td>Operational</td>
                            <td>Mohon pembantuan pemindahan PC leader OPS dari office bigshop ke information center</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Set akses ke systicket, cloud, app.salokapark.com </span>
                                    <span>Set password PC </span>
                                    <span>Cleaning & defrag hardisk PC</span>
                                </div>
                            </td>
                            <td>05/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>Widya</td>
                            <td>Operational</td>
                            <td>Mohon pembantuan pemindahan PC leader OPS dari office bigshop ke information center</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Set akses ke systicket, cloud, app.salokapark.com </span>
                                    <span>Set password PC </span>
                                    <span>Cleaning & defrag hardisk PC</span>
                                </div>
                            </td>
                            <td>05/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td>Widya</td>
                            <td>Operational</td>
                            <td>Mohon pembantuan pemindahan PC leader OPS dari office bigshop ke information center</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Set akses ke systicket, cloud, app.salokapark.com </span>
                                    <span>Set password PC </span>
                                    <span>Cleaning & defrag hardisk PC</span>
                                </div>
                            </td>
                            <td>05/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <td>Widya</td>
                            <td>Operational</td>
                            <td>Mohon pembantuan pemindahan PC leader OPS dari office bigshop ke information center</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Set akses ke systicket, cloud, app.salokapark.com </span>
                                    <span>Set password PC </span>
                                    <span>Cleaning & defrag hardisk PC</span>
                                </div>
                            </td>
                            <td>05/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>10</th>
                            <td>Widya</td>
                            <td>Operational</td>
                            <td>Mohon pembantuan pemindahan PC leader OPS dari office bigshop ke information center</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Set akses ke systicket, cloud, app.salokapark.com </span>
                                    <span>Set password PC </span>
                                    <span>Cleaning & defrag hardisk PC</span>
                                </div>
                            </td>
                            <td>05/01/2022</td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./actionList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
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
