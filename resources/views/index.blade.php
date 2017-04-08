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
    <!--=== Contact Us Style 2 Starts ===-->
    <div class="row m-v-80">
        <div class="col-md-8">
            <div class="row">
                <!--== contact us form start ===-->
                <form role="form">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail2" class="sr-only">Name</label>
                        <input type="text" placeHolder="Name" required id="exampleInputEmail2" class="form-control input-lg">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail2" class="sr-only">Email</label>
                        <input type="email" placeHolder="Email required" id="exampleInputEmail2" class="form-control input-lg">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail2" class="sr-only">Subject</label>
                        <input type="email" placeHolder="Subject" id="exampleInputEmail2" class="form-control input-lg">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputMessage2" required id="exampleInputMessage2" class="sr-only">Message</label>
                        <textarea placeHolder="Message" rows="3" class="form-control input-lg"></textarea>
                        <button type="submit" class="btn btn-c-primary inverse btn-lg m-t-20">Submit Message</button>
                    </div>
                </form>
                <!--== contact us form ends ===-->
            </div>
        </div>
        <div class="col-md-4">
            <div class="clr-dark-xl">
                <h4 class="font-wight-600 font-size-24"> Additional Info</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
                </p>
            </div>
            <!-- Company address starts ===-->
            <address>
                                <span>
                                    <i class="glyphicon glyphicon-home m-t-10 m-r-10"></i>&nbsp;ZS Plaza, Gilgit-Baltistan
                                    <br>
                                </span>
                <span>
                                    <i class="glyphicon glyphicon-earphone m-v-15 m-r-10"></i>&nbsp; 92 (05811) 111111
                                    <br>
                                </span>
                <span>
                                    <i class="glyphicon glyphicon-envelope m-r-10"></i>&nbsp; waseembarcha1993@gmail.com
                                    <br>
                                </span>
                <span>
                                    <i class="glyphicon glyphicon-globe m-v-15 m-r-10"></i>
                                    <a href="#" class="black hover-primary">&nbsp; www.example.com</a>
                                </span>
            </address>
            <!-- Company address ends ===-->
        </div>
    </div>
    <!--=== Contact Us Style 2 Ends ===-->
@endsection
