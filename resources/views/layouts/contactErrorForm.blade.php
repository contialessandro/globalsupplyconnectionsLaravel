@if(session()->has('messages'))
    <div class="form-group col-md-12 alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <b>{{session()->get('messages')}}</b>
        {{session()->forget('messages')}}
    </div>
@endif
@if($errors->has('name'))
    <div class="form-group col-md-6 has-error has-feedback">
        <label for="exampleInputEmail2" class="sr-only">Name</label>
        <input type="text" placeHolder="Name" name="name" id="name" class="form-control input-lg">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <div class="control-label">{{$errors->first('name')}}</div>
    </div>
@else
    <div class="form-group col-md-6">
        <label for="exampleInputEmail2" class="sr-only">Name</label>
        <input type="text" placeHolder="Name" name="name" id="name" class="form-control input-lg">
    </div>
@endif
@if($errors->has('company'))
    <div class="form-group col-md-6 has-error has-feedback">
        <label for="exampleInputCompany" class="sr-only">Company Name</label>
        <input type="text" placeHolder="Company Name" name="company" id="exampleInputCompany" class="form-control input-lg">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <div class="control-label">{{$errors->first('company')}}</div>
    </div>
@else
    <div class="form-group col-md-6">
        <label for="exampleInputCompany" class="sr-only">Company Name</label>
        <input type="text" placeHolder="Company Name" name="company" id="exampleInputCompany" class="form-control input-lg">
    </div>
@endif
@if($errors->has('email'))
    <div class="form-group col-md-6 has-error has-feedback">
        <label for="exampleInputEmail2" class="sr-only">Email</label>
        <input type="email" placeHolder="Email" name="email" id="exampleInputEmail2" class="form-control input-lg">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <div class="control-label">{{$errors->first('email')}}</div>
    </div>
@else
    <div class="form-group col-md-6">
        <label for="exampleInputEmail2" class="sr-only">Email</label>
        <input type="email" placeHolder="Email" name="email" id="exampleInputEmail2" class="form-control input-lg">
    </div>
@endif
@if($errors->has('subject'))
    <div class="form-group col-md-6 has-error has-feedback">
        <label for="exampleInputEmail2" class="sr-only">Subject</label>
        <input type="email" placeHolder="Subject" name="subjects" id="exampleInputEmail2" class="form-control input-lg">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <div class="control-label">{{$errors->first('subject')}}</div>
    </div>
@else
    <div class="form-group col-md-6">
        <label for="exampleInputEmail2" class="sr-only">Subject</label>
        <input type="email" placeHolder="Subject" name="subjects" id="exampleInputEmail2" class="form-control input-lg">
    </div>
@endif
@if($errors->has('messages'))
    <div class="form-group col-md-12 has-error has-feedback">
        <label for="exampleInputMessage2"  id="exampleInputMessage2" class="sr-only">Message</label>
        <textarea type="text" placeHolder="Message" rows="3"  name="subject" class="form-control input-lg"></textarea>
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <div class="control-label">{{$errors->first('messages')}}</div>

@else
    <div class="form-group col-md-12">
        <label for="exampleInputMessage2"  id="exampleInputMessage2" class="sr-only">Message</label>
        <textarea placeHolder="Message" type="text" rows="3"  name="subject" class="form-control input-lg"></textarea>

@endif