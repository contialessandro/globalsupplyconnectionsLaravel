@extends('layouts.app')

@section('content')
    <section>
        <div id="contact-forms">
            <div class="container">
                <div class="row m-t-80">
                    <div class="col-md-12">
                        <div class="m-v-50">
                            <h2 class="p-v-30 text-center">Contact Us</h2>
                            <div class="separator width-px-100 center-block"></div>
                        </div>
                    </div>
                </div>
                <!--=== Contact Us Style 2 Starts ===-->
                <div class="row m-v-80">
                    <div class="col-md-8">
                        <div class="row">

                            <!--== contact us form start ===-->
                            <form role="form" action="contact_sent" method="post">
                                {{ csrf_field() }}
                                @include('layouts.contactErrorForm')
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
                                    <i class="glyphicon glyphicon-home m-t-10 m-r-10"></i>&nbsp;Oak Park,Cookridge, Leeds
                                    <br>
                                </span>
                            <span>
                                    <i class="glyphicon glyphicon-earphone m-v-15 m-r-10"></i>&nbsp; 92 (05811) 111111
                                    <br>
                                </span>
                            <span>
                                    <i class="glyphicon glyphicon-envelope m-r-10"></i>&nbsp; contactus@globalsupplyconnections.co.uk
                                    <br>
                                </span>
                            <span>
                                    <i class="glyphicon glyphicon-globe m-v-15 m-r-10"></i>
                                    <a href="#" class="black hover-primary">&nbsp; www.globalsupplyconnections.co.uk</a>
                                </span>
                        </address>
                        <!-- Company address ends ===-->
                    </div>
                </div>
                <!--=== Contact Us Style 2 Ends ===-->
            </div>
        </div>
        <script>
            /*$( "#form" ).delay( 1000 );
                $("#form.span").delay( 1000 ).removeClass("form-control-feedback");
                $("#form.div").delay(1000).removeClass(" has-error has-feedback");*/
                //$("#rowthree.two").removeClass("pageLoad");
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 8000);

        </script>
    </section>
@endsection
