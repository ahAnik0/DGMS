@extends('admin.master')

@section('title')
Spottlight 
@endsection

@section('content')
 <!--app-content open-->
 <div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Data Tables</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Spottlight Datatable</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <p class="text-success">{{session('message')}}</p>
                    <button class="pb-3" ><a href="{{route('add-spottlight')}}" class="btn btn-info">Add New </a></button>
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No.</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imgs as $img )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td >
                                    <img src="{{$img->image}}" alt="" srcset="" height="100px" width="200px">
                                </td>
                                <td>
                                    <a href="{{route('edit-spottlight',$img->id)}}" class="btn btn-primary">
                                        <i class="fa fa-edit"> Edit </i>
                                    </a>
                                    <a  href="{{route('delete-spottlight',$img->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete !!')">
                                        <i class="fa fa-trash"> Delete </i>
                                    </a>
                                </td>
                                
                            </tr>
                            @endforeach
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection