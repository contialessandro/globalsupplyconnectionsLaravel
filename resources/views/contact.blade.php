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
                            <form role="form">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail2" class="sr-only">Name</label>
                                    <input type="text" placeHolder="Name" required id="exampleInputEmail2" class="form-control input-lg">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputCompany" class="sr-only">Company Name</label>
                                    <input type="text" placeHolder="Company Name" id="exampleInputCompany" class="form-control input-lg">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail2" class="sr-only">Email</label>
                                    <input type="email" placeHolder="Email" id="exampleInputEmail2" class="form-control input-lg">
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
            </div>
        </div>
    </section>
@endsection
