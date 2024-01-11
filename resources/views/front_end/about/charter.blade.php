@extends('front_end.master')
@section('title')
    Citizen Charter
@endsection
@section('content')
    <section>
        <div class="container pb-4" style="background-color: #082605;">
            <div class="row">
                <h3 class=" pt-3" style="color: #F1C44D; padding-left:30px;">Citizen Charter</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-2">
                       <img class="text-center" src="{{ $ch->image }}" width="100%" alt="">
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="row  py-2 pr-4">
                           <div class="text-colour">
                            {!! $ch->content !!}
                           </div>
                        
                    </div>

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
    .history-card img{
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
