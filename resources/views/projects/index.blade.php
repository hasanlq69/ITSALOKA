@extends('layouts.main')
@section('isi')


        <!--Troubleshoot Start-->
        <div class="content">
            <div class="text-heading">
                <h1 class="text">Project List</h1>
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
                <a href="./newProject.html" class="add-content">
                    <i class='bx bx-add-to-queue'></i>
                    <span class="name-add">
                        Add Project
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
                            <th>Tasks List</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Pemasangan PC & Printer ke Adu Tangkas</td>
                            <td>Hardware</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pemasangan PC dan Printer</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Pemasangan PC & Printer ke Adu Tangkas</td>
                            <td>Hardware</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pemasangan PC dan Printer</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Pemasangan PC & Printer ke Adu Tangkas</td>
                            <td>Hardware</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pemasangan PC dan Printer</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Pemasangan PC & Printer ke Adu Tangkas</td>
                            <td>Hardware</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pemasangan PC dan Printer</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Pemasangan PC & Printer ke Adu Tangkas</td>
                            <td>Hardware</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Pemasangan PC dan Printer</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>HR Info Sys</td>
                            <td>Sofware System</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Update Form Import Compentation</span>
                                    <span>Import Excel Compentation</span>
                                    <span>Analisa Ulang Database</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>HR Info Sys</td>
                            <td>Sofware System</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Update Form Import Compentation</span>
                                    <span>Import Excel Compentation</span>
                                    <span>Analisa Ulang Database</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td>HR Info Sys</td>
                            <td>Sofware System</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Update Form Import Compentation</span>
                                    <span>Import Excel Compentation</span>
                                    <span>Analisa Ulang Database</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <td>HR Info Sys</td>
                            <td>Sofware System</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Update Form Import Compentation</span>
                                    <span>Import Excel Compentation</span>
                                    <span>Analisa Ulang Database</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
                                    <a href="" class="set-edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="set-trash"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>10</th>
                            <td>HR Info Sys</td>
                            <td>Sofware System</td>
                            <td>
                                <div class="checklist-content">
                                    <span>Update Form Import Compentation</span>
                                    <span>Import Excel Compentation</span>
                                    <span>Analisa Ulang Database</span>
                                </div>
                            </td>
                            <td class="setting">
                                <div class="set-seting">
                                    <a href="./project_taskList.html" class="set-view"><i class="fa-regular fa-eye"></i></a>
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
