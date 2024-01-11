@extends('front_end.master')
@section('title')
    Photo Gallery
@endsection
@section('content')
{{-- <h1>Photo Gallery</h1> --}}

<div class="container">
    <div class="row" style="background-color:#082605;">
        @foreach ($photos->chunk(3) as $row)
            @foreach ($row as $photo)
                <div class="col-md-4 col-sm-6">
                    <div class="photo py-2">
                        <img src="{{ $photo->image }}" alt="" class="img-flui" height="200px" width="350px">
                        <p style="color: #BDAB7B; ">{{ $photo->title }}</p>
                    </div>
                </div>
            @endforeach
        @endforeach
        <div class=""  style="color: #BDAB7B;">
            {!! $photos->links() !!}
        </div>
    </div>
    
</div>

 <!-- Laravel's pagination links -->
{{-- {{ $photos->links('vendor.pagination.bootstrap-4') }} --}}
@endsection

<style>
   /* .page-link{
        background-color: #F1C44D !important;
        /* color: #082605 !important; */
    } */
</style>


