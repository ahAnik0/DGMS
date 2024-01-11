@extends('front_end.master')
@section('title')
    Home
@endsection
@section('content')
    <section class="featured-posts" style="padding-top: 0px; padding-bottom: 0;">
        <div class="container bg-grn" style="background-color: #082605;">
            <div class="row no-gutters">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <div class="news-style-four-slide ">
                        @foreach ($sliders as $slider)
                            <div class="item">


                                <img class="img-fluid" src="{{ $slider->image }}" alt="post-thumbnail" />

                            </div>
                        @endforeach


                    </div>

                </div>


            </div>
        </div>
    </section>
    <div class="container" style="background-color: #082605; color: #F1C44D; padding: 30px 20px ; font-size: large;">
        <marquee behavior="scroll" direction="left">Welcome to DGMS Official Website..</marquee>

    </div>
    <section class="featured-posts" style="padding-top: 0px; padding-bottom: 0;">
        <div class="container" style="background-color: #082605;">
            <div class="row ">
                <div class="col-md-12 col-xs-12 col-lg-8">
                    <div class="row bg-mod">
                        <div class="dg-card">

                            <img class="py-4" src="{{ $dg->image }}" alt="Card Image">
                            <div class="dg-card-content">
                                <span>Message from the honoroble DGMS Director</span>
                                <h2>{{ $dg->name }}</h2>
                                <span style="margin-bottom: 5px;">{{ $dg->rank }}</span>
                                <p class="text-justify pt-1">
                                    {!! \Illuminate\Support\Str::limit($dg->message, $limit = 300, $end = '.') !!}<a
                                        href="dg-msg"><span class="post-cat">Read
                                            More..</span></a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-lg-4">
                    <div class="bg-mod" style="height: 100%; padding: 0 7%; padding-top:100px;"> <br>
                        <button type="button" class="btn btn-warning btn-lg mb-2 text-white"
                            onclick="window.location.href='http://120.89.64.28/DGMS'; ">Tender Submission</button>
                        <br>
                        <button type="button" class="btn btn-warning  btn-lg my-2 text-white"
                            onclick="window.location.href='http://120.89.64.28/DGMS'; ">Inventory Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-wrapper" style="padding-top:0; padding-bottom: 0; margin-top: 0; ">
        <div class="container">
            <div class="row" style="background-color:#082605;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="news-style-one">

                        <div id="cards_landscape_wrap-2">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                                        <div class="card-flyer" style="height: 395px;">
                                            <div class="text-box">
                                                <div class="image-box">
                                                    <img src="{{ asset('front_end/assets') }}/images/bgms/9.jpg"
                                                        alt="" />
                                                </div>
                                                <div class="text-container">
                                                    <h6>Welcome</h6>
                                                    <p>{{ $wc->msg }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                                        <div class="card-flyer" style="height: 395px;">
                                            <div class="text-box">
                                                <div class="image-box">
                                                    <img src="{{ asset('front_end/assets') }}/images/bgms/card5.webp"
                                                        alt="" />
                                                </div>
                                                <div class="text-container">
                                                    <h6>News Announcment</h6>
                                                    <p>{{ $news->news }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                                        <div class="card-flyer" style="height: 395px;">
                                            <div class="text-box">
                                                <div class="image-box">
                                                    <img src="{{ asset('front_end/assets') }}/images/bgms/card6.jpg"
                                                        alt="" />
                                                </div>

                                                <div class="text-container">
                                                    <h6>Medical College</h6>
                                                    <ul class="list-unstyled" style="text-align:left;">
                                                        @foreach ($mc as $item)
                                                            <li><a href="{{ $item->url }}" target=”_blank”
                                                                    style="color: #BDAB7B;"
                                                                    onMouseOver="this.style.color='white'"
                                                                    onMouseOut="this.style.color='#BDAB7B'">{{ $item->name }}</a>

                                                            </li>
                                                        @endforeach



                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                                        <div class="card-flyer" style="height: 395px;">
                                            <div class="text-box">
                                                <div class="image-box">
                                                    <img src="{{ asset('front_end/assets') }}/images/bgms/card4.jpg"
                                                        alt="" />
                                                </div>
                                                <div class="text-container">
                                                    <h6>Tender Information</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('tender-show') }}" target=”_blank”
                                                                style="color: #BDAB7B;"
                                                                onMouseOver="this.style.color='white'"
                                                                onMouseOut="this.style.color='#BDAB7B'">Tender Notice for
                                                                Urgent Medicine Supply</a>
                                                            <br> <span class="text-white"
                                                                style="font-size:small; text-align:left;">3
                                                                Dec,2023</span>
                                                        </li>
                                                        <li><a href="{{ route('tender-show1') }}" target=”_blank”
                                                                style="color: #BDAB7B;"
                                                                onMouseOver="this.style.color='white'"
                                                                onMouseOut="this.style.color='#BDAB7B'">Tender Notice for
                                                                Urgent Medicine Supply</a><br>
                                                            <span class="text-white"
                                                                style="font-size:small;text-align:left;">3
                                                                Dec,2023</span>
                                                        </li>
                                                        <li><a href="{{ route('tender-show2') }}" target=”_blank”
                                                                style="color: #BDAB7B;"
                                                                onMouseOver="this.style.color='white'"
                                                                onMouseOut="this.style.color='#BDAB7B'">Tender Notice for
                                                                Urgent Medicine Supply</a><br>
                                                            <span class="text-white"
                                                                style="font-size:small;text-align:left;">3
                                                                Dec,2023</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="py-40"></div>
                    <div class="news-style-two">
                        <h3 class="news-title">
                            <span>Spottlight</span>
                        </h3>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="news-style-two-slide">
                                    @foreach ($sp as $item)
                                        <div class="item">
                                            <img class="img-fluid" src="{{ $item->image }}" alt="post-thumbnail" />

                                        </div>
                                    @endforeach



                                </div>
                            </div>


                        </div>
                    </div>

                </div>


            </div>
        </div>
        </div>
        </div>
    </section>
    <section class="block-wrapper" style="padding-top:0; padding-bottom: 0; margin-top: 0; ">
        <div class="container">
            <div class="row" style="background-color:#082605;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="news-style-one">

                        <div class="py-40"></div>
                        <div class="news-style -two">
                            <h3 class="news-title">
                                <span>Photo Gallery</span> <a href="{{route('photo-gallery')}}"
                                    style="padding-left: 77%; color: aliceblue;">View All</a>
                            </h3>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="gallery-row">
                                        <img src="{{ asset('front_end/assets') }}/images/bgms/g1.png" alt="Image 1"
                                            class="gallery-image">
                                        <img src="{{ asset('front_end/assets') }}/images/bgms/g2.png" alt="Image 2"
                                            class="gallery-image">
                                        <img src="{{ asset('front_end/assets') }}/images/bgms/g3.png" alt="Image 3"
                                            class="gallery-image">
                                    </div>

                                    <div class="gallery-row">
                                        <img src="{{ asset('front_end/assets') }}/images/bgms/g4.png" alt="Image 4"
                                            class="gallery-image">
                                        <img src="{{ asset('front_end/assets') }}/images/bgms/g7.png" alt="Image 5"
                                            class="gallery-image">
                                        <img src="{{ asset('front_end/assets') }}/images/bgms/g6.png" alt="Image 6"
                                            class="gallery-image">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="block-wrapper" style="padding-top:0; padding-bottom: 0; margin-top: 0; ">
        <div class="container">
            <div class="row pb-3" style="background-color:#082605;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="news-style-one">

                        <div class="py-40"></div>
                        <div class="news-style -two">
                            <h3 class="news-title">
                                <span>Components of DGMS</span>
                            </h3>
                            <div class="row bg-mod my-3 mr-1">
                                <div class="col-md-4 logo-container">
                                    <img src="{{ asset('front_end/assets') }}/images/bgms/comp/1.png" alt="Logo 1"
                                        class="logo">
                                    <p class="bottom-text">Army Medical Corps</p>
                                </div>
                                <div class="col-md-4 logo-container">
                                    <img src="{{ asset('front_end/assets') }}/images/bgms/comp/2.png" alt="Logo 2"
                                        class="logo">
                                    <p class="bottom-text">Army Dental Corps</p>
                                </div>
                                <div class="col-md-4 logo-container">
                                    <img src="{{ asset('front_end/assets') }}/images/bgms/comp/3.png" alt="Logo 3"
                                        class="logo">
                                    <p class="bottom-text">Armed Forces Nursing Services</p>
                                </div>


                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

<style>
   
    .logo-container {
        text-align: center;
    }

    .logo {
        max-width: 50%;
        height: auto;
        margin-bottom: 8px;
    }

    .bottom-text {
        font-size: 18px;
        color: #BDAB7B;
    }
</style>
