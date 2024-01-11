@extends('admin.master')

@section('title')
Important Link
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
                    <h1 class="page-title">Important Link</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Important Link</a></li>
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
                <h3 class="card-title">Important Link Datatable</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <p class="text-success">{{session('message')}}</p>
                    <table class="table table-bordered text-nowrap border-bottom table-responsive" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="w-10">Sl</th>
                                <th class="w-10">Title</th>
                                <th class="w-15">Url</th>
                                <th class="w-15">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($links as $item )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td >{{$item->title}}</td>
                                <td >{{$item->url}}</td>
                                <td class="w-25">
                                    <a href="{{route('imp-link-edit',$item->id)}}" class="btn btn-primary">
                                        <i class="fa fa-edit"> Edit </i>
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

<style>
    .scrollable-text {
        max-width: 300px;
        max-height: 100px; /* Adjust the height as needed */
        overflow-y: auto;
    }
</style>