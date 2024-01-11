@extends('admin.master')
@section('title')
    Contact Edit
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Contact Edit</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Contact</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Contact</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{ session('message') }}</p>
                                <form class="needs-validation" method="POST" action="{{ route('contact-update') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row">
                                       
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom13">Address</label>
                                            <input type="text" class="form-control" name="address" id="address" value="{{ $con->address}}">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                       
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom13">Phone No.</label>
                                            <input type="text" class="form-control" name="number" id="number" value="{{ $con->number}}">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                       
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom13">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ $con->email}}">

                                        </div>
                                    </div>
                                   
                                    <button class="btn btn-primary" type="submit">Save</button>
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
    {{-- <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script> --}}
