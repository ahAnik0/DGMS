@extends('front_end.master')
@section('title')
    Peace Keeping
@endsection
@section('content')
    <section>
        <div class="container pb-4" style="background-color: #082605;">
            <div class="row">
                <h3 class="pt-3" style="color: #F1C44D; padding-left:30px;">Peace Keeping</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-2">
                        <img class="text-center" src="{{ $pk->image }}" width="100%" alt="">
                        <span style="color: #BDAB7B">{{ $pk->title}}</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card text-colour my-2 mx-2">
                      {!! $pk->content !!}
                    </div>
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
        padding: 10px;
        cursor: pointer;
    }

    .history-card p {
        color: #BDAB7B;
        text-align: justify
    }

    .history-card img {
        border: 5px solid #BDAB7B;
    }

    .text-colour {
        color: #BDAB7B !important;
        text-align: justify !important;
    }

    /* .history-card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    } */
</style>
