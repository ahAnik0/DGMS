@extends('front_end.master')
@section('title')
    DG Message
@endsection
@section('content')
    <section>
        <div class="container" style="background-color: #082605;">
            <div class="row">
                <h2 class="pt-3" style="color: #F1C44D; padding-left:30px;">Message from the Honoroble DGMS Director</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-2">
                        <div class="text-center" style="color: #BDAB7B">
                            <img class="rounded " src="{{$dg->image}}" style="padding-top: 10px;border-radius: 25% 10%; " alt="" srcset="" height="250px" ><br> <br>
                            <span class="" > DGMS-{{$dg->dg_id}}</span> <br> 
                            <h2 style="color: #F1C44D; margin:0;">{{$dg->name}} </h2>
                            <span style="font-size: 15px;">{{$dg->rank}}  with effect from {{ \Carbon\Carbon::parse($dg->join_date)->isoFormat('Do MMM YYYY') }}.</span>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-2">
                        <p class="card-text ">{!! $dg->message !!}
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="row pb-5">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-2">
                        <p class="card-text ">
                            I hope that this web site will serve as a useful tool to access information more easily and act
                            as a platform for e-health and e-learning of Armed Forces personnel. At the same time it will
                            help smooth functioning of procurement/maintenance process of the organization.
                        </p>
                    </div>
                </div>
            </div> --}}
          
          

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

    /* .history-card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    } */
</style>
