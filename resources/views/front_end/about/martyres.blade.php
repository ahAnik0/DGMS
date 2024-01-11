@extends('front_end.master')
@section('title')
    Liberation War
@endsection
@section('content')
    <section>
        <div class="container" style="background-color: #082605;">
            <div class="row">
                <h3 class=" pt-3" style="color: #F1C44D; padding-left:25px;">LIST OF MARTYRES OF AMC</h3>
            </div>
            <div class="row">
              <div class="col-md-12 col-xs-12 col-lg-12">
                  <div class="history-card my-2 mx-2">
                     <img class="text-center" src="{{ $lw->image }}" width="100%" alt="">
                    <span  style="color: #BDAB7B;">{{$lw->title}}
                    </span> 
                  </div>
              </div>
          </div>
            
            <div class="row pt-3 pb-5 px-2">
              <div class="col-md-12 col-xs-12 col-lg-12">
                  <table class="table table-bg" >
                      <thead >
                        <tr>
                          <th class="text-center" scope="col">Sl</th>
                          <th scope="col">Rk and Name</th>
                          
                          
                        </tr>
                      
                      </thead>
                      
                      <tbody>
                        @foreach ($martyres as $martyre )
                        <tr>
                          <th class="text-center"  scope="row">{{$loop->iteration}}</th>
                          <td>{{$martyre->name}}</td>
                          
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
 

    table, th, td, thead {
   border: 1px solid #BDAB7B !important;

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
