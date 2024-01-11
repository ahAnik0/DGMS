@extends('admin.master')

@section('title')
   Slider Edit  
@endsection

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Slider Edit</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Main Slider</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Slider Edit</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Main Slider</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{session('message')}}</p>
                            <form class="needs-validation" method="POST" action="{{route('update-slider',$img->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="image">Choose Brand Image</label>
                                        <input type="file" accept="image/*" class="form-control" name="image" id="image">
                                        <img src="{{asset($img->image)}}" alt="" srcset="" height="100px" width="200px">
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ''}}</span>
                                    </div>
                                </div>
                                
                                    
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection