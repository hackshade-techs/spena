@extends('layouts.app')
@section('title') 

@endsection

@section('description') 

@endsection

@section('keywords') 

@endsection

@section('css')

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Bootstrap Color Picker -->


@endsection

@section('content')

<div class="inner-head">
    <div class="container">
        <h1 class="entry-title">Alumni Registration</h1>
        <p class="description">
            An environment that provides a foundation to achild, we believe that our Old Boys and Girls have reputed us across the country and cross borders. We warmly appreciate your reputation towards the school background.
        </p>
        <div class="breadcrumb">
            <ul class="clearfix">
                <li class="ib"><a href="{{ url('/') }}">Home</a></li>
                <li class="ib current-page"><a href="{{ url('alumni') }}">Alumni Registration</a></li>
            </ul>
        </div>
    </div><!-- End container -->
</div><!-- End Inner Page Head -->

<div class="clearfix"></div>

<article class=" white-bg">
    <div class="container">
        <div class="row bg">
            <div class="col-md-12">
                <div class="contact-form">
                    @include('includes.errors')
                    @include('includes.success')
                    <form method="post" action="{{ route('alumni-register.store') }}" id="contact-form" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name:</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                      </div>
                                      <input type="text" name="firstname" class="form-control pull-right" placeholder="First Name" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                
                            </div><!-- end name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name:</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                      </div>
                                      <input type="text" name="lastname" class="form-control pull-right" placeholder="Last Name" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                
                            </div><!-- end name -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="input">
                                            <select name="gender" id="input" class="form-control" required="required">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                  <!-- /.form group -->
                                
                            </div><!-- end name -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth:</label>

                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" name="dob" class="form-control pull-right" id="datepicker" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                  <!-- /.form group -->
                                
                            </div><!-- end phone -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number:</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                      </div>
                                      <input type="text" name="contact" class="form-control pull-right" placeholder="Phone Number" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div><!-- end phone -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                      </div>
                                      <input type="text" name="email" class="form-control pull-right" placeholder="Email" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                
                            </div><!-- end phone -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address:</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-location-arrow"></i>
                                      </div>
                                      <input type="text" name="address" class="form-control pull-right" placeholder="Address" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                
                            </div><!-- end phone -->
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date You Joined the School:</label>
                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" name="entry_date" class="form-control pull-right" id="datepicker1" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                  <!-- /.form group -->
                                
                            </div><!-- end phone -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date You Left the School:</label>
                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" name="exit_date" class="form-control pull-right" id="datepicker2" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                
                            </div><!-- end phone -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose your Image:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-image"></i>
                                        </div>
                                            <input type="file" name="image" id="subject" class=" form-control pull-right" placeholder="Your Image" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                
                            </div><!-- end phone -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institution:</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-university"></i>
                                      </div>
                                      <input type="text" name="institution" class="form-control pull-right" placeholder="Institution" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                
                            </div><!-- end phone -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Occupation:</label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-life-ring"></i>
                                      </div>
                                      <input type="text" name="occupation" class="form-control pull-right" placeholder="Occupation" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div><!-- end phone -->
                            <div class="col-md-12">
                                <div class="input">
                                    <button type="submit" class="btn grad-btn orange-btn join-btn" style="background-color: #383c4b; width:100%; height: 45px; font-size: 25px; text-align: center; padding-top: 2px; margin-top: 10px;">Submit Information</button>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </form><!-- end form tag -->
                </div><!-- end contact form -->
            </div>
                
        </div>
        
    </div><!-- End container -->
</article><!-- End Instructors Page -->



@endsection

@section('scripts')

<!-- Select2 -->
<script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('assets/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>


<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    })

    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })

    
  })
</script>

@endsection