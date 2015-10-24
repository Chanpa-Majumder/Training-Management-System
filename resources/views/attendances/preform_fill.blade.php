@extends('layout.master')
@section('script')
    <link href="{!! asset('css/datepicker.css') !!}" rel="stylesheet">
    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
    <!-- Include Bootstrap Datepicker -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js">    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script>
    $(function(){
        $('#datePicker')
            .datepicker({
            format: 'yyyy-mm-dd'
        })
    });
    </script>
@show

@section('content')
    <div class="container col-md-12 col-md-offset-0">
        <div class="well well bs-component">
             <div>
                 <center>
                     <h3>
                         Bangladesh Academy for Rural Development<br/>
                         Kotbari, Comilla
                     </h3>
                    <legend><u><h3>Attendence Sheet</h3></u><small>(For Trainees)</small></legend>
             </div>
            <form class="form-horizontal"action="{!! action('AttendanceController@show_attendance_form_function') !!}" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>                    
                @endforeach
                    @if (session('warning'))
                        <div class="alert alert-danger">
                            {{ session('warning') }}
                        </div>
                    @endif
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                       
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h4>Trainee Attendence</h4></center>
                        </div>
						
						<div class="panel-body">
							<div class="col-md-4">
								 <label for="inputTrainingName" class="control-label">Course Name:</label>
								 <select  name="course_id">
									 @foreach($courses as $course)
										 <option value="{{ $course->id }}">{{ $course->course_name }}</option>
									 @endforeach
								</select>
							</div>
										
							<div class="col-md-4">
								 <label for="inputTrainingName" class="control-label">Session:</label>
								 <select name="session">
									 <option value="session1">Session 1</option>
									 <option value="session2">Session 2</option>
									 <option value="session3">Session 3</option>
									 <option value="session4">Session 4</option>
									 <option value="session5">Session 5</option>
									 <option value="session6">Session 6</option>
								 </select>
							</div>
							
							<div class="col-md-4">
								<label>Date</label>
								<div>
									<div class="input-group input-append date" id="datePicker">
										<input type="text" class="form-control" name="date" placeholder="1990/11/11"/>
										<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
								</div>
                            </div>
							
							
							<div class="form-group">
								<div class="col-md-12 col-md-offset-0" align="right">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</div>
                        
                </form>
        </div>
    </div>
@endsection

