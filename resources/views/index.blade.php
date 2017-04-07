@extends('layouts.app')

@section('content')
    <section class="height-100 amimate-slideshow">
        <div id="slider" class="height-100">
            <div class="bg-alpha-black-6 height-100">
                <div class="container height-100 pos-r">
                    <!--=== Triangle Start ===-->
                    <a href="#about" class="smooth-scroll decoration-none">
                        <div class="triangle hidden-xs">
                            <span>More</span>
                        </div>
                    </a>
                    <!--=== Triangle End ===-->
                    <div class="table">
                        <div class="table-middle-row">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                                    <!--=== Slider text start here ===-->
                                    <div id="welcome" class="text-center">
                                        <h1 class="text-uppercase">WE Are
                                            <span class="type-writer clr-primary font-weight-700">
                                                    <span class="type-here"></span>
                                                </span>
                                            <span class="element"></span>
                                        </h1>
                                        <hr class="width-px-100 center-block clr-white" />
                                        <p class="p-h-10">Create just what you need for your Perfect Website. Choose from a wide
                                            <br class="hidden-xs" />range of Elements &amp; simply put them on our Cosmic. </p>
                                    </div>
                                    <!--=== Slider text ends here ===-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Slider Ends ===-->
    </section>
@endsection
