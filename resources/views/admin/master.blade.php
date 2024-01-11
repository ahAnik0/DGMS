<!doctype html>
<html lang="en" dir="ltr">
<!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">
    <meta http-equiv="content-security-policy" content="default-src 'self' 'unsafe-inline' ; script-src 'self' 'unsafe-inline' ; connect-src 'self'; img-src 'self'; 
        style-src 'self'  https://fonts.googleapis.com 'unsafe-inline' 'sha256-NhkRDSQVr8heghu28VoWnnp461Q3DYcGhSGEZJPJBMI=''  ;" />
    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('admin/assets/images/brand/logo.png') }}" type="image/x-icon">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets') }}/images/brand/logo.png" /> --}}

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('admin/assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('admin/assets') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('admin/assets') }}/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('admin/assets') }}/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('admin/assets') }}/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ asset('admin/assets') }}/switcher/demo.css" rel="stylesheet">

</head>

<body class="ltr app sidebar-mini">

    <!-- Switcher-->
    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="swichermainleft text-center">
                                <div class="p-3 d-grid gap-2">
                                    <a href="https://laravel8.spruko.com/noa" class="btn ripple btn-primary mt-0"
                                        target="_blank">View Demo</a>
                                    <a href="https://themeforest.net/item/noa-laravel-admin-template/38978033"
                                        class="btn ripple btn-secondary" target="_blank">Buy Now</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink"
                                        target="_blank">Our
                                        Portfolio</a>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Click Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Hover Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch111" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>LTR and RTL VERSIONS</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">LTR Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="myonoffswitch24" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Primary</span>
                                        <div class="">
                                            <input class="wpx-30 h-30 input-color-picker color-primary-light"
                                                value="#8FBD56" id="colorID" type="color" data-id="bg-color"
                                                data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor"
                                                name="lightPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Dark Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Primary</span>
                                        <div class="">
                                            <input class="wpx-30 h-30 input-dark-color-picker color-primary-dark"
                                                value="#8FBD56" id="darkPrimaryColorID" type="color"
                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Custom Background</span>
                                        <div class="">
                                            <input
                                                class="wpx-30 h-30 input-transparent-color-picker color-bg-transparent"
                                                value="#8FBD56" id="transparentBgColorID" type="color"
                                                data-id5="body" data-id6="boxed-theme" name="transparentBackground">
                                        </div>
                                    </div>
                                    <div class="switch-toggle">
                                        <span class="">Background Image</span>
                                        <div class="mt-1">
                                            <a class="bg-img bg-img1" href="javascript:void(0);"><img
                                                    src="{{ asset('admin/assets') }}/images/media/bg-img1.jpg"
                                                    alt="Bg-Image" id="bgimage1"></a>
                                            <a class="bg-img bg-img2" href="javascript:void(0);"><img
                                                    src="{{ asset('admin/assets') }}/images/media/bg-img2.jpg"
                                                    alt="Bg-Image" id="bgimage2"></a>
                                            <a class="bg-img bg-img3" href="javascript:void(0);"><img
                                                    src="{{ asset('admin/assets') }}/images/media/bg-img3.jpg"
                                                    alt="Bg-Image" id="bgimage3"></a>
                                            <a class="bg-img bg-img4" href="javascript:void(0);"><img
                                                    src="{{ asset('admin/assets') }}/images/media/bg-img4.jpg"
                                                    alt="Bg-Image" id="bgimage4"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft menu-styles">
                            <h4>Menu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightMenu d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch3" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle gradientMenu d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch19" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft header-styles">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightHeader d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch6" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>

                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch20" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch13" class="onoffswitch2-checkbox default-menu"
                                                checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Sidemenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch16" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch17" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu Style 1</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch18" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-block resetCustomStyles" id="resetAll"
                                        type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <!-- Switcher-->

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('admin/assets') }}/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->
    @yield('content')

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->

            @include('admin.include.header')

            <!-- /app-Header -->

            <!--APP-SIDEBAR-->

            @include('admin.include.sidebar')

            <!--/APP-SIDEBAR-->

            <!--app-content open-->

            <!-- CONTAINER CLOSED -->









            <!-- FOOTER -->
            @include('admin.include.footer')
            <!-- FOOTER CLOSED -->
        </div>
    </div>
    <!-- page -->
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('admin/assets') }}/plugins/jquery/jquery.min.js"></script>

    {{-- CK editor --}}
    <script src="{{ asset('admin/assets') }}/js/ck-editor.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('admin/assets') }}/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('admin/assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('admin/assets') }}/plugins/sidemenu/sidemenu.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('admin/assets') }}/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="{{ asset('admin/assets') }}/plugins/p-scroll/pscroll.js"></script>

    <!-- STICKY JS -->
    <script src="{{ asset('admin/assets') }}/js/sticky.js"></script>


    <!-- APEXCHART JS -->
    <script src="{{ asset('admin/assets') }}/js/apexcharts.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('admin/assets') }}/plugins/select2/select2.full.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('admin/assets') }}/plugins/circle-progress/circle-progress.min.js"></script>

    <!-- INTERNAL DATA-TABLES JS-->
    <script src="{{ asset('admin/assets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin/assets') }}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('admin/assets') }}/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INDEX JS -->
    <script src="{{ asset('admin/assets') }}/js/index1.js"></script>
    <script src="{{ asset('admin/assets') }}/js/index.js"></script>

    <!-- Reply JS-->
    <script src="{{ asset('admin/assets') }}/js/reply.js"></script>
    <script src="{{ asset('front_end/assets') }}/js/disable.js"></script>


    <!-- COLOR THEME JS -->
    <script src="{{ asset('admin/assets') }}/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('admin/assets') }}/js/custom.js"></script>

    <!-- SWITCHER JS -->
    <script src="{{ asset('admin/assets') }}/switcher/js/switcher.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor'),
            )
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        //     $(function() {
        //     $('#datepicker').datepicker();
        // });
       
    </script>
    <style>
        .side-header {
            margin: 0 !important;
            padding: 0 !important;
        }
    </style>

</body>



</html>
