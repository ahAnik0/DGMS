<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('dashboard') }}">
                <img src="{{ asset('front_end/assets') }}/images/bgms/logo.png" class="header-brand-img desktop-logo"
                    alt="logo" >
                <img src="{{ asset('front_end/assets') }}/images/bgms/logo.png" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('front_end/assets') }}/images/bgms/logo.png" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('front_end/assets') }}/images/bgms/logo.png" class="header-brand-img light-logo1"
                    alt="logo">
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li>
                    <h3>Menu</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li>
                    <h3>Settings</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                        </svg>
                        <span class="side-menu__label">Images Manage</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Slider</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('main-slider') }}" class="slide-item">Main Slider Manage</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Spottlight</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('spottlight') }}" class="slide-item">Spottlight Manage</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Gallery Photos</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('photo-manage') }}" class="slide-item">Gallery Photos Manage</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                        </svg>
                        <span class="side-menu__label">Director</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Director</a></li>
                        {{-- <li><a href=" {{ route('dg-add') }}" class="slide-item">DG Add</a></li> --}}
                        <li><a href="{{ route('dg-edit') }}" class="slide-item">Director Edit</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                        </svg>
                        <span class="side-menu__label">Card Edit</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Welcomme Message</a></li>
                        {{-- <li><a href=" {{ route('dg-add') }}" class="slide-item">DG Add</a></li> --}}
                        <li><a href="{{ route('wc-edit') }}" class="slide-item">Welcome Message Edit</a></li>
                    </ul>

                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">News Announcment</a></li>
                        {{-- <li><a href=" {{ route('dg-add') }}" class="slide-item">DG Add</a></li> --}}
                        <li><a href="{{ route('news-edit') }}" class="slide-item">News Announcment Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Medical College</a></li>
                        {{-- <li><a href=" {{ route('dg-add') }}" class="slide-item">DG Add</a></li> --}}
                        <li><a href="{{ route('mc-manage') }}" class="slide-item">Medical College Manage</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                        </svg>
                        <span class="side-menu__label">About</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">History</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('edit-history') }}" class="slide-item">History Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Liberation War</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('edit-lw') }}" class="slide-item">Liberation War Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Function</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('fun-manage') }}" class="slide-item">Function Manage</a></li>
                    </ul>

                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Citizen Charter</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('ch-edit') }}" class="slide-item">Citizen Charter Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Mission</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('mission-edit') }}" class="slide-item">Mission Edit</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                        </svg>
                        <span class="side-menu__label">Branches</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Administrative Branch</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('admin-branch-edit') }}" class="slide-item">Administrative Branch
                                Edit</a></li>
                        <li class="side-menu-label1"><a href="javascript:void(0)">Training Branch</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('training-branch-edit') }}" class="slide-item">Training Branch Edit</a>
                        </li>
                        <li class="side-menu-label1"><a href="javascript:void(0)">Health Branch</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('health-branch-edit') }}" class="slide-item">Health Branch Edit</a>
                        </li>
                        <li class="side-menu-label1"><a href="javascript:void(0)">Medical Branch</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('medical-branch-edit') }}" class="slide-item">Medical Edit</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                        </svg>
                        <span class="side-menu__label">Institution</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">AFIP</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('afip-edit') }}" class="slide-item">AFIP Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">AFMI</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('afmi-edit') }}" class="slide-item">AFMI Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">AFMSD</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('afmsd-edit') }}" class="slide-item">AFMSD Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">AFFDL</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('affdl-edit') }}" class="slide-item">AFFDL Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">CMHs</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('cmhs-edit') }}" class="slide-item">CMHs Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Field Ambulance</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('ambulance-edit') }}" class="slide-item">Field Ambulance Edit</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                        </svg>
                        <span class="side-menu__label">Others</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Peace Keeping</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('pk-edit') }}" class="slide-item">Peace Keeping Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Contact</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('contact-edit') }}" class="slide-item">Contact Edit</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Important Link</a></li>
                        {{-- <li><a href="" class="slide-item">Slider Add</a></li> --}}
                        <li><a href="{{ route('imp-link-manage') }}" class="slide-item">Important Link Manage</a></li>
                    </ul>
                    
                </li>



            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>

