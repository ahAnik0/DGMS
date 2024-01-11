@extends('front_end.master')
@section('title')
    Administrative Branch
@endsection
@section('content')
    <section>
        <div class="container pb-4" style="background-color: #082605;">
            <div class="row">
                <h3 class="pt-3" style="color: #F1C44D;padding-left:30px;">Administrative Branch</h3>
            </div>
            <div class="row pb-3">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-3">
                        <img class="text-center" src="{{ $admin->image }}" width="100%" alt="">

                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class=" history-card text-colour pl-0 pr-3">
                        {!! $admin->content !!}
                    </div>


                </div>
            </div>
    </section>
@endsection
<style>
    table,
    th,
    td,
    thead {
        border: none;
        border-top: none !important;
        padding: 5px !important;
    }

    .table-bg {
        color: #BDAB7B
    }

    .text-colour {
        color: #BDAB7B !important;
        text-align: justify !important;
    }
    .text-colour ol{
        padding-inline-start: 32px !important;
    }

    .history-card img {
        border: 5px solid #BDAB7B;
    }
</style>
