@extends('master.trainee_master')
@section('title','trainee')
@section('content')
    <section class="content-2" style="background-color: rgb(255, 255, 255);">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-lg-3">

                    <div class="well">
                        <h3>To Give FeedBack<br><a href="{!! URL::to('/feedbackCreate') !!}" class="btn btn-lg btn-info" style="background-color:#5C6BC0">Click Here</a></h3>
                    </div>
                    <br>
                    <div class="well">
                        <h3>Health Details<a href="{!! URL::to('/trainee/health/create') !!}" class="btn btn-lg btn-info"  style="background-color:#FFC107" >Fill The Form</a></h3>
                        <a href="{!! URL::to('/trainee/health/healthInfos') !!}" class="btn btn-lg btn-info" style="background-color:#F57F17">Edit The Form</a>
                        <h3>Health Details<a href="{!! URL::to('/UserHealthCreate') !!}" class="btn btn-lg btn-info"  style="background-color:#FFC107">Fill The Form</a></h3>
					<!--	<a href="{!! URL::to('/UserHealthInfo/'.$id) !!}" class="btn btn-lg btn-info" style="background-color:#F57F17">Edit The Form</a>-->

                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="well">
                        <div class="panel panel-info">
                            <div class="panel-heading">

                                <h3 class="panel-title"    >{!! $info->name !!}</h3>

                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-5 " align="center"> <img src="{{ asset($info->filepath) }}" class="img-rounded img-responsive"> </div>
                                    <div class=" col-md-9 col-lg-9 ">
                                        <table class="table table-user-information">
                                            <tbody>
                                            <tr>
                                                <td>ID Code:</td>
                                                <td>{!! $info->trainee_id !!}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Birth Place:</td>
                                                <td>Bangladesh</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Birth Date:</td>
                                                <td>{!! $info->date_of_birth !!}</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Gender:</td>
                                                <td>{!! $info->gender!!}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Home Address:</td>
                                                <td>{!! $info->district !!}  </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number:</td>
                                                <td>{!! $info->ph_mobile !!}</td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td><a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info"  style="background-color:#0097A7" >Attendance</a></td>
                                                <td><a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info"  style="background-color:#AA00FF" >Exam Marks</a></td>
                                                <td><a  href="{!! URL::to('/') !!}" class="btn btn-info" style="background-color:#64DD17">Log Out</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="well">
                        <h2 class="center">Attendance</h2>
                        @if(empty($courseAttendance))
                            <h3>No attendance information</h3>
                        @else
                            <table class="table table-hover">
                                <thead>
                                <tr style="background-color:seagreen;color:white">
                                    <th>COURSE</th>
                                    <th>ABSENT</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courseAttendance as $courseAttendance)
                                    <tr>
                                        <td>
                                            {!! $courseAttendance['course_name'] !!}
                                        </td>

                                        <td>
                                            {!! $courseAttendance['absent'] !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="well">
                        <h3>Registration<a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info"  style="background-color:#CE93D8">Fill The Form</a></h3>
                        <a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info" style="background-color:#9C27B0">Edit The Form</a>

                    </div>
                    <br>
                    <div class="well">
                        <h3>Information Sheet<a href="{!! URL::to('/trainee_create') !!}" class="btn btn-lg btn-info" style="background-color:#69F0AE">Fill The Form</a></h3>
                        <a href="{!! action('InfosController@edit_profile', $info->id) !!}" class="btn btn-lg btn-info" style="background-color:#00C853">Edit The Form</a>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection