@extends('admin.master')
@section('title')
    DG Edit
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">DG Edit</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Director</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DG Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">DG </h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{ session('message') }}</p>
                                <form class="needs-validation" method="POST" action="{{ route('dg-update', $dg->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">DG Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $dg->name }}">
                                            {{-- <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">Rank</label>
                                            <input type="text" name="rank" class="form-control"
                                                value="{{ $dg->rank }}">
                                            {{-- <span class="text-danger">{{$errors->has('rank') ? $errors->first('rank') : ''}}</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">DG ID</label>
                                            <input type="text" name="dg_id" class="form-control"
                                                value="{{ $dg->dg_id }}">
                                            {{-- <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="join_date">Join Date</label>
                                            <input type="date" class="form-control input-group-append" id="datepicker"
                                                name="join_date" value="{{ $dg->join_date }}">
                                            {{-- <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="image">Choose DG Image</label>
                                            <input type="file" accept="image/*" class="form-control" name="image"
                                                id="image">
                                            <img src="{{ asset($dg->image) }}" alt="" srcset="" height="200px"
                                                width="200px">
                                            <span
                                                class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                        </div>
                                    </div>
                                    <div class="form-row pb-3">
                                        {{-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom13">Message </label>
                                            <textarea type="text" class="form-control" id="editor" name="message" placeholder="Write Message" cols="20"
                                                rows="5" required>{{ $dg->message }}</textarea>

                                        </div> --}}
                                        <textarea   class="form-control" id="ckeditor" name="message" placeholder="Write Message" cols="20"
                                        rows="5" required >{!! $dg->message  !!}</textarea>
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
