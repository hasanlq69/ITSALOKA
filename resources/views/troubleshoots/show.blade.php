@extends('layouts.main')
@section('isi')



        <!--Troubleshoot Start-->
        <div class="content">
            <div class="text-heading">
                <h1 class="text">Troubleshoot Detail</h1>
                <div class="text-link">
                    <a href="{{ route('troubleshoot.index') }}">Troubleshoot List</a>
                    <span>/</span>
                    <a href="" class="text-active">Troubleshoot Detail</a>
                </div>
            </div>
            <!--Content Troubleshoot List Start-->
            <div class="content-list">
                <div class="content-detail">
                    <div class="list-detail">
                        <span class="list">Type Desk</span>
                        <div class="list-content">
                            <span>{{$troubleshoot->trouble_req}}</span>
                            {{-- <i class="fa-solid fa-chevron-down"></i> --}}
                        </div>
                    </div>
                    <div class="list-detail">
                        <span class="list">Client Name</span>
                        <div class="list-content-wrapper">
                            <div class="list-box">
                                <span>{{$troubleshoot->client_name}}</span>
                            </div>
                            <div class="list-content">
                                <span>{{$troubleshoot->department}}</span>
                                {{-- <i class="fa-solid fa-chevron-down"></i> --}}
                            </div>
                        </div>
                    </div>
                    <div class="list-detail">
                        <span class="list">Trouble Name</span>
                        <div class="list-content-wrapper">
                            <div class="list-box">
                                <span>{{$troubleshoot->trouble_name}}</span>
                            </div>
                            <div class="list-content">
                                <span>{{$troubleshoot->trouble_type}}</span>
                                {{-- <i class="fa-solid fa-chevron-down"></i> --}}
                            </div>
                        </div>
                    </div>
                    <div class="list-detail">
                        <span class="list">Cause</span>
                        <div class="list-content">
                            <span>{{$troubleshoot->cause}}</span>
                        </div>
                    </div>
                    <div class="list-detail">
                        <span class="list">Time Allocation</span>
                        <div class="list-content-wrapper">
                            <div class="list-text-1">
                                <span>Started</span>
                                <span>{{$troubleshoot->start}} by Desi Ramadina</span>
                            </div>
                            <div class="list-text-2">
                                <span>Finished :</span>
                                <span>{{$troubleshoot->finish}} by Desi Ramadina</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-detail">
                        <span class="list">Note</span>
                        <div class="list-content">
                            <span>{{$troubleshoot->note}}</span>
                        </div>
                    </div>
                    <div class="list-box-detail">
                        <div class="box-detail">
                            <span>NO FILE AVAILABLE</span>
                            <span>NO FILE AVAILABLE</span>
                            <span>NO FILE AVAILABLE</span>
                        </div>
                    </div>
                    <div class="list-detail">
                        <span class="list">Status</span>
                        <div class="list-content">
                            <span>{{$troubleshoot->status}}</span>
                            {{-- <i class="fa-solid fa-chevron-down"></i> --}}
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <a href="{{ route('troubleshoot.index') }}" class="btn-back">Back</a>
                    </div>
                </div>
            </div>
            <!--Content Troubleshoot List End-->
        </div>
</section>
@endsection
