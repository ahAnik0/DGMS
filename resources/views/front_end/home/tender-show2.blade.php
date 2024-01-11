@extends('front_end.master')
@section('title')
    Tender Show
@endsection
@section('content')
    <section>
        <div class="container" style="background-color: #082605;">
            <div class="row">
                <h3 class="pt-3" style="color: #F1C44D; padding-left:30px;">Tender Notice of Medical Defence Dhaka Cantt</h3>
            </div>
            <div class="text-center">
                <iframe src="{{asset ('front_end/assets')}}/images/pdf/pdf-3.pdf" width="800px" height="700px"></iframe>
            </div>
          
           
        </div>
    </section>
@endsection


