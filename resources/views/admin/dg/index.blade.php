@extends('admin.master')

@section('title')
    DG
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
                        <h1 class="page-title">DG Table</h1>
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
                                <h3 class="card-title">DG Datatable</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <p class="text-success">{{ session('message') }}</p>
                                    <table class="table table-bordered text-nowrap border-bottom table-responsive"
                                        id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th class="w-10">Name</th>
                                                <th class="w-15">Rank</th>
                                                <th class="w-15">DG Id</th>
                                                <th class="w-100">Image</th>
                                                <th class="w-100">Message</th>
                                                <th class="w-10">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dgs as $dg)
                                                <tr>
                                                    <td>{{ $dg->name }}</td>
                                                    <td>{{ $dg->rank }}</td>
                                                    <td>{{ $dg->dg_id }}</td>
                                                    <td>
                                                        <img src="{{ $dg->image }}" alt="" srcset=""
                                                            height="100px" width="100px">
                                                    </td>

                                                    <td class="scrollable-text">{!! $dg->message !!}</td>
                                                    <td class="w-25">
                                                        <a href="{{ route('dg-edit', $dg->id) }}" class="btn btn-primary">
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
        max-height: 100px;
        /* Adjust the height as needed */
        overflow-y: auto;
    }
</style>
