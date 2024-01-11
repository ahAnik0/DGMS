<footer class="footer footer-main container"
    style="padding-bottom: 0; padding-top: 30px;  background-image:linear-gradient(#1f5d11,#0a1e0c,#1f5d11);">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-sm-12 col-lg-4">
                <img src="{{ asset('front_end/assets') }}/images/bgms/logo.png" alt="" height="100px"
                    style="padding-left: 30%;">
                <p style="color: #F1C44D; padding: 10px; margin-top: 5px; font-weight: bold;">Directorate General of
                    Medical Service</p>



            </div>
            <div class="col-md-6 col-sm-6 col-lg-4 pb-3" id="contact" style="padding-left: 25px;">
                <p style="color: #F1C44D; font-weight: bold; font-size: large;">Contact</p>
                <p style="margin: 2px;"><i class="fa fa-map-marker" style="color: #F1C44D;" aria-hidden="true"></i>
                    <span class="text-white" style="font-size: smaller; padding-left: 5px;">{{ $con->address }}</span>
                </p>
                <p style="margin: 0 0;"><i class="fa fa-phone" style="color: #F1C44D;" aria-hidden="true"></i> <span
                        class="text-white" style="font-size: smaller; padding-left: 5px;">{{ $con->number }}</span></p>
                <p style="margin: 0;"><i class="fa fa-envelope" style="color: #F1C44D;" aria-hidden="true"></i> <span
                        class="text-white" style="font-size: smaller;padding-left: 5px;">@php
                        
                        $obfuscatedEmail = str_replace('@', '&#64;',  $con->email);
                    @endphp
                    
                   {!! $obfuscatedEmail !!}
                    </span></p>


            </div>
            <div class="col-md-6 col-sm-6 col-lg-4 pl-4">
                <p style="color: #F1C44D; font-weight: bold; font-size: large;" style="margin-left:10px;">Important Link
                </p>
                @foreach ($links as $item)
                    <p style="margin: 2px;"><i class="fa fa-check-circle" style="color: #F1C44D;"
                            aria-hidden="true"></i> <a href="{{ $item->url }}" target=”_blank” class="text-white"
                            style="font-size: smaller; padding-left: 5px;">{{ $item->title }}</a>
                    </p>
                @endforeach




            </div>


            <div class="scroll-to-top">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style=" background:#082605;;">
            <footer class="forLeft" style="padding-left: 70%; font-size: medium; padding-top: 10px; ">
                <p style="color: aliceblue; font-size: large; margin-top: 0;">Powered by<a href="https://tilbd.net/"
                        target="_blank" style="color: #F1C44D;"> Trust Innovation Limited</a>
                </p>
            </footer>
        </div>
    </div>
</footer>

<style>

</style>
