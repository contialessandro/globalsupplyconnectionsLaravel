@extends('layouts.app')

@section('content')
    <section id="" class="bg-clr-dark-xl">
        <div class="container">
            <div class="row m-v-80">
                <div class="col-md-12">
                    <div class="m-v-50">
                        <h2 class="p-v-30 text-center" style="color: white;">Message</h2>
                        <div class="separator width-px-100 center-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="services">
            <div class="container pos-r">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!--=== section main heading starts ===-->
                        <div class="heading-text">
                            <h3>our services </h3>
                            <p>We'll look after the IT stuff, so you can focus on the important things.</p>
                            <div class="separator"></div>
                        </div>
                        <!--=== section main heading starts ===-->
                    </div>
                </div>
                <div class="m-t-20 m-b-80">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!--=== services icon box 1 srarts ===-->
                            <div class="m-t-40">
                                <div class="services-icon-bx">
                                    <div class="text-center">
                                        <i class="fa fa-cog fa-4x"></i>
                                        <h3 class="heading-sm">IBM Maintainance Contract </h3>
                                        <p class="m-t-20 clr-dark-lg">We'll provide your business with specific maintainance to suit your needs</p>
                                        <a href="aboutIbm" style="color: inherit;  text-decoration: none;">find out more</a>
                                    </div>
                                </div>
                            </div> <!--=== services icon box 1 ends ===-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!--=== services icon box 1 srarts ===-->
                            <div class="m-t-40">
                                <div class="services-icon-bx">
                                    <div class="text-center">
                                        <i class="fa fa-briefcase fa-4x"></i>
                                        <h3 class="heading-sm">Lenovo Pack</h3>
                                        <p class="m-t-20 clr-dark-lg"><br>We'll provide your business with specific maintainance to suit your needs</p>
                                        <a href="aboutLenovopack" style="color: inherit;  text-decoration: none;">find out more</a>
                                    </div>
                                </div>
                            </div>
                            <!--=== services icon box 1 ends ===-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!--=== services icon box 2 srarts ===-->
                            <div class="m-t-40">
                                <div class="services-icon-bx">
                                    <div class="text-center">
                                        <i class="fa fa-wrench fa-4x"></i>
                                        <h3 class="heading-sm">NIP Maintainance</h3>
                                        <p class="m-t-20 clr-dark-lg"><br>We'll provide your business with specific maintainance to suit your needs</p>
                                        <a href="aboutNip" style="color: inherit;  text-decoration: none;">find out more</a>
                                    </div>
                                </div>
                            </div>
                            <!--=== services icon box 2 ends ===-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!--=== services icon box 3 srarts ===-->
                            <div class="m-t-40">
                                <div class="services-icon-bx">
                                    <div class="text-center">
                                        <i class="fa fa-random fa-4x" aria-hidden="true"></i>
                                        <h3 class="heading-sm">Contract Management</h3>
                                        <p class="m-t-20 clr-dark-lg"><br>We'll provide your business with specific maintainance to suit your needs</p>
                                        <a href="aboutContractmanagement" style="color: inherit;  text-decoration: none;">find out more</a>
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
