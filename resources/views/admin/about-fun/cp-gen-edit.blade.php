@extends('admin.master')

@section('title')
Consultant Physician General Edit
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title"> Consultant Physician General Edit</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);"> Consultant Physician General</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Consultant Physician General Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title"> Consultant Physician General Edit</h3>
                            </div>
                            <div class="card-body">

                                <p class="text-success">{{ session('message') }}</p>
                                <form class="needs-validation" method="POST"
                                    action="{{ route('cp-gen-update', $cpg->id) }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">Ba No</label>
                                            <input type="text" name="ba_no" class="form-control"
                                                value="{{ $cpg->ba_no }}">
                                            {{-- <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">Rank</label>
                                            <input type="text" name="rank" class="form-control"
                                                value="{{ $cpg->rank }}">
                                            {{-- <span class="text-danger">{{$errors->has('rank') ? $errors->first('rank') : ''}}</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $cpg->name }}">
                                            {{-- <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="join_date">From</label>
                                            <input type="date" class="form-control input-group-append" id="datepicker"
                                                name="from"
                                                value="{{ \Carbon\Carbon::parse($cpg->from)->format('Y-m-d') }}">
                                            {{-- <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span> --}}
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="to">To</label>
                                            <input type="date" class="form-control input-group-append" id="datepicker"
                                                name="to" value="<?php if ($cpg->to == '') {
                                                    echo '';
                                                } else {
                                                    echo \Carbon\Carbon::parse($cpg->to)->format('Y-m-d');
                                                }
                                                
                                                ?>">
                                            {{-- <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span> --}}
                                        </div>
                                    </div>


                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <style>
        .input-group-append {
            cursor: pointer;
        }
    </style>
