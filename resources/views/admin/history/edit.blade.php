@extends('admin.master')
@section('title')
    History Edit
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">History Edit</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">History</a></li>
                            <li class="breadcrumb-item active" aria-current="page">History Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">History </h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{ session('message') }}</p>
                                <form class="needs-validation" method="POST" action="{{ route('update-history') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    
                                    <div class="form-row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="image">Choose DG Image</label>
                                            <input type="file" accept="image/*" class="form-control" name="image"
                                                id="image">
                                            <img src="{{ $history->image }}" alt="" srcset="" height="200px"
                                                width="400px">
                                            <span
                                                class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$history->title}}">
                                            {{-- <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-row pb-3">
                                        {{-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom13">Message </label>
                                            <textarea type="text" class="form-control" id="editor" name="message" placeholder="Write Message" cols="20"
                                                rows="5" required>{{ $dg->message }}</textarea>

                                        </div> --}}
                                        <textarea   class="form-control" id="ckeditor" name="message" placeholder="Write Message" cols="20"
                                        rows="5"  >{!! $history->message  !!}</textarea>
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
    <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
