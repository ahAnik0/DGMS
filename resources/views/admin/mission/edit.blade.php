@extends('admin.master')
@section('title')
    Mission Edit
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Mission Edit</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Mission</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mission Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Mission </h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{ session('message') }}</p>
                                <form class="needs-validation" method="POST" action="{{ route('mission-update') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom13">Choose Top Image</label>
                                            <input type="file" class="form-control" name="image" id="image">

                                            <img src="{{ $mission->image }}" alt="" srcset="" height="200px"
                                                width="400px">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="sumernote">Content </label>
                                            <textarea class="form-control" id="ckeditor" name="content" rows="5" cols="40">{!! $mission->content !!}</textarea>

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
    {{-- <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script> --}}
