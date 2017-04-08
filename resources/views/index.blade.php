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
    <section>
        <div id="services">
            <div class="container pos-r">
                <div class="vartical-line"></div>
                <div class="horizontal-line"></div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!--=== section main heading starts ===-->
                        <div class="heading-text">
                            <h2>our services </h2>
                            <p>We provide quality, powerful and best services.</p>
                            <div class="separator"></div>
                        </div>
                        <!--=== section main heading starts ===-->
                    </div>
                </div>
                <div class="m-t-20 m-b-80">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <!--=== services icon box 1 srarts ===-->
                            <div class="m-t-40">
                                <div class="services-icon-bx">
                                    <div class="text-center">
                                        <i class="icon-basic-cup font-size-60 icon-glass icon-basic-eye"></i>
                                        <h3 class="heading-sm">creative design</h3>
                                        <p class="m-t-20 clr-dark-lg">lorem ipsum dolor simit di amit etcetera and goal the love is easy and soal the love is easy and soal.</p>
                                    </div>
                                </div>
                            </div>
                            <!--=== services icon box 1 ends ===-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <!--=== services icon box 2 srarts ===-->
                            <div class="m-t-40">
                                <div class="services-icon-bx">
                                    <div class="text-center">
                                        <i class="icon-basic-cup font-size-60 "></i>
                                        <h3 class="heading-sm">ux expert</h3>
                                        <p class="m-t-20 clr-dark-lg">lorem ipsum dolor simit di amit etcetera and goal the love is easy and soal the love is easy and soal.</p>
                                    </div>
                                </div>
                            </div>
                            <!--=== services icon box 2 ends ===-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <!--=== services icon box 3 srarts ===-->
                            <div class="m-t-40">
                                <div class="services-icon-bx">
                                    <div class="text-center">
                                        <i class="icon-basic-case font-size-60 "></i>
                                        <h3 class="heading-sm">graphics design</h3>
                                        <p class="m-t-20 clr-dark-lg">lorem ipsum dolor simit di amit etcetera and goal the love is easy and soal the love is easy and soal.</p>
                                    </div>
                                </div>
                            </div>
                            <!--=== services icon box 3 ends ===-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- loader -->
    <div id="loading" class="animation-parent">
        <div class="table">
            <div class="table-middle-row">
                <div class="loader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
@endsection
