@extends('layout.footer');
@extends('layout.app');
@section('title','AddUser');
@section('body')

		@section('page-title','Add User');
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit the Details of User <small>This is for testing crud of laravel</small></h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="get">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="fname" required="required" name="fname" class="form-control col-md-7 col-xs-12" value="{{$user->name}}">

                        <input type="hidden" id="fname" required="required" name="id" class="form-control col-md-7 col-xs-12" value="{{$user->id}}">



                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="last-name" name="email" required="required" class="form-control col-md-7 col-xs-12" value="{{$user->email}}">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Address <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="address" value="{{$user->address}}">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

          



@endsection
@extends('layout.header');