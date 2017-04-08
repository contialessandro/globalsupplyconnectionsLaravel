@extends('layouts.app')

@section('content')
    <section class="height-100 static-background-darken2">
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
    <section id="buttons">
        <div class="container">
            <div class="row m-v-80">
                <div class="col-md-12">
                    <div class="m-v-50">
                        <h2 class="p-v-30 text-center">Buttons</h2>
                        <div class="separator width-px-100 center-block"></div>
                    </div>
                    <div class="text-center">
                        <!-- Bootstrap Block level buttons-->
                        <h4 class="text-center p-v-30">Bootstrap Block level Buttons</h4>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-1">
                                <div class="m-v-20">
                                    <button class="m-all-10 btn-block btn btn-success">Success Button</button>
                                    <button class="m-all-10 btn-block btn btn-primary">Primary Button</button>
                                    <button class="m-all-10 btn-block btn btn-default">Default Button</button>
                                    <button class="m-all-10 btn-block btn btn-info">Info Button</button>
                                    <button class="m-all-10 btn-block btn btn-danger">Danger Button</button>
                                    <button class="m-all-10 btn-block btn btn-warning">Warning Button</button>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-1">
                                <div class="m-v-20">
                                    <button class="m-all-10 bdr-rad-reset btn-block btn btn-success">Success Button</button>
                                    <button class="m-all-10 bdr-rad-reset btn-block btn btn-primary">Primary Button</button>
                                    <button class="m-all-10 bdr-rad-reset btn-block btn btn-default">Default Button</button>
                                    <button class="m-all-10 bdr-rad-reset btn-block btn btn-info">Info Button</button>
                                    <button class="m-all-10 bdr-rad-reset btn-block btn btn-danger">Danger Button</button>
                                    <button class="m-all-10 bdr-rad-reset btn-block btn btn-warning">Warning Button</button>
                                </div>
                            </div>
                        </div>
                        <!-- Cosmic buttons default-->
                        <h4 class="text-center p-v-30">Cosmic Default Buttons</h4>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="m-v-20">
                                    <button class="btn-c-primary btn-sm bdr m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-sm bdr bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-md m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-md bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-lg m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-lg bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-dark-lg  btn-sm bdr m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-sm bdr bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-md m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-md bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-lg m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-lg bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-orange btn-sm bdr m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-sm bdr bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-md m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-md bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-lg m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-lg bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-blue btn-sm bdr m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-sm bdr bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-md m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-md bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-lg m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-lg bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-light-green btn-sm bdr m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-sm bdr bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-md m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-md bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-lg m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-lg bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-yellow btn-sm bdr m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-sm bdr bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-md m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-md bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-lg m-all-10 btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-lg bdr-rad-reset m-all-10 btn"> Cosmic Button</button>
                                </div>
                            </div>
                        </div>
                        <!-- Cosmic buttons Inverse-->
                        <h4 class="text-center p-v-30">Cosmic Inverse Buttons </h4>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="m-v-20">
                                    <button class="btn-c-primary btn-sm bdr m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-sm bdr bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-md m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-md bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-lg m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-lg bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-dark-lg  btn-sm bdr m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-sm bdr bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-md m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-md bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-lg m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-lg bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-orange btn-sm bdr m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-sm bdr bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-md m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-md bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-lg m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-lg bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-blue btn-sm bdr m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-sm bdr bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-md m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-md bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-lg m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-lg bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-light-green btn-sm bdr m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-sm bdr bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-md m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-md bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-lg m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-lg bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-yellow btn-sm bdr m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-sm bdr bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-md m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-md bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-lg m-all-10 inverse  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-lg bdr-rad-reset m-all-10 inverse  btn"> Cosmic Button</button>
                                </div>
                            </div>
                        </div>
                        <!-- Cosmic buttons with outline-->
                        <h4 class="text-center p-v-30">Cosmic Outline Buttons </h4>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="m-v-20">
                                    <button class="btn-c-primary btn-sm bdr m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-sm bdr bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-md m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-md bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-lg m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-primary btn-lg bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-dark-lg  btn-sm bdr m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-sm bdr bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-md m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-md bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-lg m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-dark-lg  btn-lg bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-orange btn-sm bdr m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-sm bdr bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-md m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-md bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-lg m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-orange btn-lg bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-blue btn-sm bdr m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-sm bdr bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-md m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-md bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-lg m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-blue btn-lg bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-light-green btn-sm bdr m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-sm bdr bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-md m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-md bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-lg m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-light-green btn-lg bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                </div>
                                <div class="m-v-20">
                                    <button class="btn-c-yellow btn-sm bdr m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-sm bdr bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-md m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-md bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-lg m-all-10 outline  btn"> Cosmic Button</button>
                                    <button class="btn-c-yellow btn-lg bdr-rad-reset m-all-10 outline  btn"> Cosmic Button</button>
                                </div>
                            </div>
                        </div>
                        <!-- Cosmic glass buttons-->
                        <h4 class="text-center p-v-30">Cosmic Glass Buttons </h4>
                        <div class="row bg-clr-black">
                            <div class="col-md-10 col-md-offset-1 p-v-50">
                                <button class="btn-c-glass m-all-10 btn-sm bdr btn"> Cosmic Button</button>
                                <button class="btn-c-glass m-all-10 btn-sm bdr bdr-rad-reset btn"> Cosmic Button</button>
                                <button class="btn-c-glass m-all-10 btn-md btn"> Cosmic Button</button>
                                <button class="btn-c-glass m-all-10 btn-md bdr-rad-reset btn"> Cosmic Button</button>
                                <button class="btn-c-glass m-all-10 btn-lg btn"> Cosmic Button</button>
                                <button class="btn-c-glass m-all-10 btn-lg bdr-rad-reset btn"> Cosmic Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
