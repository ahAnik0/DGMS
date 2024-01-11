@extends('front_end.master')
@section('title')
    Function
@endsection
@section('content')
    <section>
        <div class="container pb-5" style="background-color: #082605;">
            <div class="row">
                <h3 class=" pt-4" style="color: #F1C44D; padding-left:20px;">FUNCTION</h3>
            </div>
            <div class="row pb-2">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card">

                        {!! $msg->msg !!}


                    </div>
                </div>
            </div>
            <p class="font-weight-bold pl-1" style="color: #F1C44D">DGMS</p>
            <div class="row bg-mod py-3 mb-3 " style="margin-right: 2px;">
                <div class="col-md-12">

                    <div class="text-center" style="color: #BDAB7B">
                        <img class="rounded pb-2 " src="{{ $dg->image }}" style="padding-top: 10px;border-radius: 25% 10%; "
                            alt="" srcset="" height="250px"><br>
                        <span class="pt-2"> DGMS-{{ $dg->dg_id }}</span> <br>
                        <h2 style="color: #F1C44D; margin:0;"> {{ $dg->name }} </h2>
                        <span style="font-size: 15px;">{{ $dg->rank }} with effect from
                            {{ \Carbon\Carbon::parse($dg->join_date)->isoFormat('Do MMM YYYY') }}.</span>
                    </div>

                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <p class="font-weight-bold" style="color: #F1C44D">Ex DGMSs</p>
                    <table class="table table-bg">
                        <thead>
                            <tr>
                                <th style="width: 10px;">Sl</th>
                                <th style="width: 130px;">BA No</th>
                                <th style="width: 170px;">Rank</th>
                                <th>Name</th>
                                <th style="width: 160px;">From</th>
                                <th style="width: 160px;">To</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($ex_dgs as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->ba_no }}</td>
                                    <td>{{ $item->rank }} </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->from)->format('d-m-Y') }}</td>
                                    <td><?php if ($item->to == 0) {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($item->to)->format('d-m-Y');
                                    }
                                    
                                    ?></td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <p class="font-weight-bold "style="color: #F1C44D">Consultant Surgeon General</p>
                    <table class="table table-bg">
                        <thead>
                            <tr>
                                <th style="width: 10px;">Sl</th>
                                <th style="width: 130px;">BA No</th>
                                <th style="width: 170px;">Rank</th>
                                <th scope="col">Name</th>
                                <th style="width: 160px;">From</th>
                                <th style="width: 160px;">To</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($cs as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->ba_no }}</td>
                                    <td>{{ $item->rank }} </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->from)->format('d-m-Y') }}</td>
                                    <td><?php if ($item->to == '') {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($item->to)->format('d-m-Y');
                                    }
                                    
                                    ?></td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <p class="font-weight-bold" style="color: #F1C44D">Consultant Physician General</p>
                    <table class="table table-bg">
                        <thead>
                            <tr>
                                <th style="width: 10px;">Sl</th>
                                <th style="width: 130px;">BA No</th>
                                <th style="width: 170px;">Rank</th>
                                <th scope="col">Name</th>
                                <th style="width: 160px;">From</th>
                                <th style="width: 160px;">To</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($cp as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->ba_no }}</td>
                                    <td>{{ $item->rank }} </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->from)->format('d-m-Y') }}</td>
                                    <td><?php if ($item->to == '') {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($item->to)->format('d-m-Y');
                                    }
                                    
                                    ?></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <p class="font-weight-bold " style="color:#F1C44D ">Consultant Dental Surgeon General</p>
                    <table class="table table-bg">
                        <thead>
                            <tr>
                                <th style="width: 10px;">Sl</th>
                                <th style="width: 130px;">BA No</th>
                                <th style="width: 170px;">Rank</th>
                                <th scope="col">Name</th>
                                <th style="width: 160px;">From</th>
                                <th style="width: 160px;">To</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($cds as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->ba_no }}</td>
                                    <td>{{ $item->rank }} </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->from)->format('d-m-Y') }}</td>
                                    <td><?php if ($item->to == '') {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($item->to)->format('d-m-Y');
                                    }
                                    
                                    ?></td>
                                </tr>
                            @endforeach

                        </tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <p class="font-weight-bold " style="color:#F1C44D">Dy DGMS </p>
                    <table class="table table-bg">
                        <thead>
                            <tr>
                                <th style="width: 10px;">Sl</th>
                                <th style="width: 130px;">BA No</th>
                                <th style="width: 170px;">Rank</th>
                                <th scope="col">Name</th>
                                <th style="width: 160px;">From</th>
                                <th style="width: 160px;">To</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($dy_dgs as $dy)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $dy->ba_no }}</td>
                                    <td>{{ $dy->rank }} </td>
                                    <td>{{ $dy->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($dy->from)->format('d-m-Y') }}</td>
                                    <td><?php if ($dy->to == 0) {
                                        echo '';
                                    } else {
                                        echo \Carbon\Carbon::parse($dy->to)->format('d-m-Y');
                                    }
                                    
                                    ?></td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </section>
@endsection

<style>
    .history-card {
        border-radius: 4px;
        /* background: #395137; */
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        padding: 5px;
        cursor: pointer;
    }

    table,
    th,
    td,
    thead {
        border: 1px solid #BDAB7B !important;


    }

    .table-bg {
        color: #BDAB7B
    }

    .history-card p {
        color: #BDAB7B !important;
        text-align: justify;
        padding: none !important;
    }

    /* .history-card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    } */
</style>
