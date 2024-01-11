@extends('front_end.master')
@section('title')
    Medical Store Branch
@endsection
@section('content')
    <section class="">
        <div class="container pb-5" style="background-color: #082605;">
            <div class="row">
                <h3 class=" pt-3" style="color: #F1C44D; padding-left:30px;">Medical Store Branch</h3>
            </div>
            <div class="row pb-3">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-3">
                       <img class="text-center" src="{{$medical->image}}" width="100%" alt="">
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="text-colour pr-3">
                        {!! $medical->content !!}
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
        border: 1px solid #BDAB7B !important;
        color: #BDAB7B
    }

    .table-bg {
        color: #BDAB7B;

    }

    .text-colour p {
        color: #BDAB7B !important;
        text-align: justify !important;
    }

    .text-colour {
        color: #BDAB7B !important;
        text-align: justify !important;
    }

    .text-colour ol{
        padding-inline-start: 32px !important;
    }

    h1,.h1, h2,.h2, h3,.h3, h4,.h4, h5,.h5, h6,.h6 {
        color: #F1C44D !important;
        font-weight: 700;
        font-family: "Poppins", sans-serif;
        letter-spacing: -0.03em;
    }

    .history-card img {
        border: 5px solid #BDAB7B;
    }
</style>
