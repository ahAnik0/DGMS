@extends('admin.master')

@section('title')
Citizen Charter Add
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Citizen Charter Add</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Citizen Charter</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Citizen Charter Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Citizen Charter Add</h3>
                            </div>
                            <div class="card-body">
                                
                                {{-- <p class="text-success">{{ session('message') }}</p> --}}
                                <form class="" method="POST" action="{{route('ch-create')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom13">Choose Top Image</label>
                                            <input type="file" class="form-control" name="image"
                                                id="image" accept="image/*">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom13">Title</label>
                                            <input type="text" class="form-control" name="title"
                                                id="title">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="sumernote">Content </label>
                                            <textarea   class="form-control" id="ckeditor" name="content" placeholder="Write Message" 
                                            rows="5" cols="40"></textarea>

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
