@extends('front_end.master')
@section('title')
    Notice
@endsection
@section('content')
    <section>
        <div class="container pb-5" style="background-color: #082605;">
            <div class="row">
                <h3 class="px-4 pt-3" style="color: #F1C44D;">Notice</h3>
            </div>
            {{-- <div class="row  pb-3">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="history-card my-2 mx-2">
                       <img class="text-center" src="{{ asset('front_end/assets') }}/images/bgms/notice.jpg" width="100%" alt="">
                   
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="row  px-2">
                        <div class="col-md-12 col-xs-12 col-lg-12">
                            <table class="table table-bg">


                                <tbody class="text-justify">

                                    <tr>
                                        <th>1.</th>
                                        <td><a href="{{ route('tender-show') }}" target="_blank" style="color: #BDAB7B">Tender Notice of AITSO (Regarding Purchase / Renewal of Antivirus License Server, Endpoint Antivirus License)</a></td>
                                    </tr>
                                    <tr>
                                        <th>2.</th>
                                        <td><a href="{{ route('tender-show1') }}" target="_blank"  style="color: #BDAB7B" >Tender Notice of
                                            Jhenaidah Cadet College</a></td>
                                    </tr>
                                    <tr>
                                        <th>3.</th>
                                        <td><a href="{{ route('tender-show2') }}" target="_blank"  style="color: #BDAB7B">Tender Notice of Medical Defence Dhaka Cantt</a></td>
                                    </tr>
                                   

                                </tbody>
                            </table>
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

    /* .history-card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    } */
</style>
