@extends('admin.master')

@section('title')
Photo Edit  
@endsection

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Photo Edit</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Photo </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Photo Edit</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Photo</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{session('message')}}</p>
                            <form class="needs-validation" method="POST" action="{{route('photo-update',$photo->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="image">Choose Photo Image</label>
                                        <input type="file" accept="image/*" class="form-control" name="image" id="image">
                                        <img src="{{asset($photo->image)}}" alt="" srcset="" height="100px" width="200px">
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ''}}</span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="name">Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$photo->title}}" required>

                                    </div>
                                </div>
                                
                                    
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection