<header  > 
    <div class="container  d-none d-lg-block"  style="background-color: #082605; padding: 0;">
        <!-- <div class="row align-items-center"> -->
            <!-- <div class="col-xs-10 col-sm-3 col-md-3"> -->
                <!-- Logo -->
                <!-- <div class="logo">
                    <a href="index.html">
                        <img src="{{asset ('front_end/assets')}}/images/bgms/Untitled.jpg" alt=""> 
                    </a>
                </div> -->
                <!-- End Logo -->
            <!-- </div> -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="top-ad-banner ">
                        <div class="row" style=" background-image:linear-gradient(#1f5d11,#0a1e0c); margin: 0;"  >
                            <div class="col-md-1"  >
                                <a href="{{route('home')}}" >
                                    <img src="{{asset ('front_end/assets')}}/images/bgms/logo.png" class="p-1"  alt="banner-ads" height="120px"  >
                                </a>
                            </div>
                            <div class="col-md-8">
                                    <div class="py-3" >
                                        <p style="color: #F1C44D; font-size: xx-large; padding: 10px 25px; margin-top: 25px; font-weight: bold;" >Directorate General of Medical Service</p>
                                    </div>
                                   
                               
                            </div>
                            <div class="col-md-3">
                                <div class="px-3" >
                                    <p style="color: aliceblue; font-size: medium; padding: 20px 0; margin-top: 5px;margin-bottom: 0;" >{{date("l")}} <br>{{date("jS F, Y")}}</p>
                                    
                                </div>
                               
                           
                        </div>
                        </div>
                    </div>
                </div>
            </div>
           
        <!-- </div> -->
    </div>
</header>

<div class="container" style="padding: 0px;background-color: #395137;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg site-main-nav navigation ">
                      <a class="navbar-brand d-lg-none" href="index.html">
                        <!-- <img src="{{asset ('front_end/assets')}}/images/bgms/DGMS.png" height="120px" alt="">  -->
                        <p style="color: #F1C44D; font-size: x-large; padding: auto; height: 5px;" >Directorate General of Medical Service</p>
                     </a>
  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                  </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                           
                            <li class="nav-item " >
                                <a class="nav-link " href="{{route('home')}}"  aria-haspopup="true" aria-expanded="false">
                                 Home
                                </a>
                               
                            </li>
                           
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  About Us
                                </a>
                                <div class="dropdown-menu" >
                                  <a class="dropdown-item" href="{{route('history')}}">History</a>
                                  <a class="dropdown-item" href="{{route('martyres')}}">Liberation War</a>
                                  <a class="dropdown-item" href="{{route('function')}}">Function</a>
                                  <a class="dropdown-item" href="{{route('charter')}}">Citizen Charter</a>
                                  <a class="dropdown-item" href="{{route('mission')}}">Mission/Role</a>
                                </div> 
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Branches
                                </a>
                                <div class="dropdown-menu" >
                                  <a class="dropdown-item" href="{{route('admin-branch')}}">Administrative Branch</a>
                                  <a class="dropdown-item" href="{{route('training-branch')}}">Training Branch</a>
                                  <a class="dropdown-item" href="{{route('health-branch')}}">Health Branch </a>
                                  <a class="dropdown-item" href="{{route('medical-branch')}}">Medical Store Branch </a>
                                </div> 
                            </li>
                            <li class="nav-item " >
                                <a class="nav-link " href="{{route('peace-keeping')}}"  aria-haspopup="true" aria-expanded="false">
                                 Peace Keeping
                                </a>
                               
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Institution
                                </a>
                                <div class="dropdown-menu" >
                                  <a class="dropdown-item" href="{{route('afip-institution')}}">AFIP</a>
                                  <a class="dropdown-item" href="{{route('afmi-institution')}}">AFMI</a>
                                  <a class="dropdown-item" href="{{route('afmsd-institution')}}">AFMSD</a>
                                  <a class="dropdown-item" href="{{route('affdl-institution')}}">AFFDL</a>
                                  <a class="dropdown-item" href="{{route('cmhs-institution')}}">CMHs</a>
                                  <a class="dropdown-item" href="{{route('ambulance-institution')}}">FIELD AMBULENCE</a>
                                </div> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('notice')}}">Notice</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>

                        </ul>
                        <!-- <div class="nav-search ml-auto d-none d-lg-block">
                            <span id="search">
                                <i class="fa fa-search"></i>
                            </span>
                        </div> -->
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
    <!-- <form class="site-search" method="get"  >
        <input type="text" id="searchInput" name="site_search" placeholder="Enter Keyword Here..." autofocus="">
        <div class="search-close">
            <span class="close-search">
                <i class="fa fa-times"></i>
            </span>
        </div>
    </form> -->
</div>

<div class="py-10"></div>