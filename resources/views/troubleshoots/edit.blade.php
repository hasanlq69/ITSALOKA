@extends('layouts.main')
@section('isi')


        <!--Troubleshoot Start-->
        <div class="content">
            <div class="text-heading">
                <h1 class="text">Troubleshoot Edit</h1>
                <div class="text-link">
                    <a href="{{ route('troubleshoot.index') }}">Troubleshoot List</a>
                    <span>/</span>
                    <a href="" class="text-active">Troubleshoot Edit</a>
                </div>
            </div>
            <!--Content Troubleshoot List Start-->
            <div class="content-list">
                <div class="wrapper-input-box">
                    <div class="input-box">
                        <form method="POST" action="{{ route('troubleshoot.update', $troubleshoot->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="list-detail">
                                <label for="" class="name-content">Type Desk</label>
                                <select name="trouble_req" id="" class="form-select" size="1">
                                    <option value="{{$troubleshoot->trouble_req}}">{{$troubleshoot->trouble_req}}</option>
                                    <option value="Trouble">Trouble</option>
                                    <option value="By Req" >By Req</option>
                                </select>
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Client Name</label>
                                <div class="wrapper-form-select">
                                    <input placeholder="Trouble Name" type="text" class="text-content" name="client_name" value="{{$troubleshoot->client_name}}">
                                    <select name="department" id="" class="form-select">
                                        <option value="{{$troubleshoot->department}}">{{$troubleshoot->department}}</option>
                                        <option value="Device Only">Device Only</option>
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
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Trouble Name</label>
                                <div class="wrapper-form-select">
                                    <input placeholder="Client/Device Name" type="text" class="text-content" name="trouble_name" value="{{$troubleshoot->trouble_name}}">
                                    <select name="trouble_type" id="" class="form-select">
                                        <option value="{{$troubleshoot->trouble_type}}">{{$troubleshoot->trouble_type}}</option>
                                        <option value="Dream & Moka POS">Dream & Moka POS</option>
                                        <option value="Ticketing">Ticketing</option>
                                        <option value="Hardware">Hardware</option>
                                        <option value="Operating System">Operating System</option>
                                        <option value="Networking">Networking</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Cause</label>
                                <input placeholder="Cause of trouble" type="text" class="text-content" name="cause" value="{{$troubleshoot->cause}}">
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Time Allocation</label>
                                <div class="wrapper-form-select">
                                    <input type="date" class="date-1" name="start" value="{{$troubleshoot->start}}">
                                    <input type="date" class="date-2" name="finish" value="{{$troubleshoot->finish}}">
                                </div>
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Solution</label>
                                <input placeholder="Solution" type="text" class="text-content" name="solution" value="{{$troubleshoot->solution}}">
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Note</label>
                                <textarea name="note" id="" cols="1" rows="3" class="form-control" placeholder="Maukan Note">{{$troubleshoot->note}}</textarea>
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Files (img, doc, etc)</label>
                                <div class="wrapper-input-file">
                                    <input type="file" name="" id="" class="file" name="file_1">
                                    <input type="file" name="" id="" class="file" name="file_2">
                                    <input type="file" name="" id="" class="file" name="file_3">
                                </div>
                            </div>
                            <div class="list-detail">
                                <label for="" class="name-content">Status</label>
                                <select name="status" id="" class="form-select">
                                    <option value="{{$troubleshoot->status}}">{{$troubleshoot->status}}</option>
                                    <option value="Done">Done</option>
                                    <option value="Proses">On Proses</option>
                                </select>
                            </div>

                            <div class="setting-btn">
                                <button onclick="location.href='troubleshootList.html'" class="red">Cancel</button>
                                <button type="submit" class="blue">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!--Content Troubleshoot List End-->
        </div>
    </section>

@endsection
