@extends('admin.master')

@section('title')
Function Manage
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
                    <h1 class="page-title">Function</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Function</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
<div class="row row-sm">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Function Datatable</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <p class="text-success">{{session('message')}}</p>
                    <table class="table table-bordered text-nowrap border-bottom table-responsive" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="w-10">Message</th>
                                <th class="w-15">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td ><textarea  cols="100" rows="2" readonly>{!! $fun_msg->msg !!}</textarea></td>
                                <td class="w-25">
                                    <a href="{{route('msg-edit')}}" class="btn btn-primary">
                                        <i class="fa fa-edit"> Edit </i>
                                    </a>
                                </td>
                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Ex DGMSs Datatable</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <button class="pb-3" ><a href="{{route('ex-dg-add')}}" class="btn btn-info">Add Ex DGMSs </a></button>
                    <table class="table table-bordered text-nowrap border-bottom table-responsive" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="w-10">Sl</th>
                                <th class="w-10">Ba No.</th>
                                <th class="w-10">Rank</th>
                                <th class="w-10">Name</th>
                                <th class="w-10">From</th>
                                <th class="w-10">To</th>
                                <th class="w-15">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <tr>
                                    <td>{{ $ex_dg->id }}</td>
                                    <td>{{ $ex_dg->ba_no }}</td>
                                    <td>{{ $ex_dg->rank }}</td>
                                    <td>{{ $ex_dg->name }}</td>
                                    <td>{{  \Carbon\Carbon::parse($ex_dg->from)->format('Y-m-d') }}</td>
                                    <td><?php if ($ex_dg->to == '') {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($ex_dg->to)->format('Y-m-d');
                                    }
                                    
                                    ?></td>
                                    <td class="w-25">
                                        <a href="{{ route('ex-dg-edit', $ex_dg->id) }}" class="btn btn-primary">
                                            <i class="fa fa-edit"> Edit </i>
                                        </a>
                                    </td>

                                </tr>
                                
                               
                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Consultant Surgeon General Datatable</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <button class="pb-3" ><a href="{{route('cs-gen-add')}}" class="btn btn-info">Add CS General </a></button>
                    <table class="table table-bordered text-nowrap border-bottom table-responsive" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="w-10">Sl</th>
                                <th class="w-10">Ba No.</th>
                                <th class="w-10">Rank</th>
                                <th class="w-10">Name</th>
                                <th class="w-10">From</th>
                                <th class="w-10">To</th>
                                <th class="w-15">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <tr>
                                    <td>{{ $cs_gen->id }}</td>
                                    <td>{{ $cs_gen->ba_no }}</td>
                                    <td>{{ $cs_gen->rank }}</td>
                                    <td>{{ $cs_gen->name }}</td>
                                    <td>{{  \Carbon\Carbon::parse($cs_gen->from)->format('Y-m-d') }}</td>
                                    <td><?php if ($cs_gen->to == '') {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($cs_gen->to)->format('Y-m-d');
                                    }
                                    
                                    ?></td>
                                    <td class="w-25">
                                        <a href="{{ route('cs-gen-edit', $cs_gen->id) }}" class="btn btn-primary">
                                            <i class="fa fa-edit"> Edit </i>
                                        </a>
                                    </td>

                                </tr>
                                
                               
                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Consultant Physician General</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <button class="pb-3" ><a href="{{route('cp-gen-add')}}" class="btn btn-info">Add CP General </a></button>
                    <table class="table table-bordered text-nowrap border-bottom table-responsive" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="w-10">Sl</th>
                                <th class="w-10">Ba No.</th>
                                <th class="w-10">Rank</th>
                                <th class="w-10">Name</th>
                                <th class="w-10">From</th>
                                <th class="w-10">To</th>
                                <th class="w-15">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <tr>
                                    <td>{{ $cp_gen->id }}</td>
                                    <td>{{ $cp_gen->ba_no }}</td>
                                    <td>{{ $cp_gen->rank }}</td>
                                    <td>{{ $cp_gen->name }}</td>
                                    <td>{{  \Carbon\Carbon::parse($cp_gen->from)->format('Y-m-d') }}</td>
                                    <td><?php if ($cp_gen->to == '') {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($cp_gen->to)->format('Y-m-d');
                                    }
                                    
                                    ?></td>
                                    <td class="w-25">
                                        <a href="{{ route('cp-gen-edit', $cp_gen->id) }}" class="btn btn-primary">
                                            <i class="fa fa-edit"> Edit </i>
                                        </a>
                                    </td>

                                </tr>
                                
                               
                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Consultant Dental Surgeon General</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <button class="pb-3" ><a href="{{route('cds-gen-add')}}" class="btn btn-info">Add CDS General </a></button>
                    <table class="table table-bordered text-nowrap border-bottom table-responsive" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="w-10">Sl</th>
                                <th class="w-10">Ba No.</th>
                                <th class="w-10">Rank</th>
                                <th class="w-10">Name</th>
                                <th class="w-10">From</th>
                                <th class="w-10">To</th>
                                <th class="w-15">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <tr>
                                    <td>{{ $cds_gen->id }}</td>
                                    <td>{{ $cds_gen->ba_no }}</td>
                                    <td>{{ $cds_gen->rank }}</td>
                                    <td>{{ $cds_gen->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($cds_gen->from)->format('Y-m-d') }}</td>
                                    <td><?php if ($cds_gen->to == '') {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($cds_gen->to)->format('Y-m-d');
                                    }
                                    
                                    ?></td>
                                    <td class="w-25">
                                        <a href="{{ route('cds-gen-edit', $cds_gen->id) }}" class="btn btn-primary">
                                            <i class="fa fa-edit"> Edit </i>
                                        </a>
                                    </td>

                                </tr>
                                
                               
                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Dy DGMS</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <button class="pb-3" ><a href="{{route('dy-dg-add')}}" class="btn btn-info">Add Dy DGMS </a></button>
                    <table class="table table-bordered text-nowrap border-bottom table-responsive" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="w-10">Sl</th>
                                <th class="w-10">Ba No.</th>
                                <th class="w-10">Rank</th>
                                <th class="w-10">Name</th>
                                <th class="w-10">From</th>
                                <th class="w-10">To</th>
                                <th class="w-15">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <tr>
                                    <td>{{ $dy_dg->id }}</td>
                                    <td>{{ $dy_dg->ba_no }}</td>
                                    <td>{{ $dy_dg->rank }}</td>
                                    <td>{{ $dy_dg->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($dy_dg->from)->format('Y-m-d') }}</td>
                                    <td><?php if ($dy_dg->to == 0) {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($dy_dg->to)->format('Y-m-d');
                                    }
                                    
                                    ?></td>
                                    <td class="w-25">
                                        <a href="{{ route('dy-dg-edit', $dy_dg->id) }}" class="btn btn-primary">
                                            <i class="fa fa-edit"> Edit </i>
                                        </a>
                                    </td>

                                </tr>
                                
                               
                                
                            </tr>
                           
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