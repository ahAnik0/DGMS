@extends('front_end.master')
@section('title')
Field  Ambulance 
@endsection
@section('content')
    <section class="">
        <div class="container pb-4" style="background-color: #082605;">
            <div class="row">
                <h3 class="px-4 pt-3" style="color: #F1C44D;">Name of Field  Ambulance </h3>
            </div>
            <div class="row pb-3">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-2">
                       <img class="text-center" src="{{ $ambulance->image}}" width="100%" alt="">
                      {{-- <span  style="color: #BDAB7B;">	41 Field Ambulance --}}
                      </span> 
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                  <div class="history-card text-colour px-2">
                    {!! $ambulance->content !!}
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
        color: #BDAB7B;
        /* width: 80%; */
    }
  
    table{
      width: 100%;
    }
  
    ol{
      padding-inline-start: 15px !important;
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
