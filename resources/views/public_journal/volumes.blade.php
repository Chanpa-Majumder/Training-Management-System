@extends('admin/layouts/master')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><center>Journal</center></h2>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Language</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($volumes as $volume)
                        <tr>
                            <td>{{$volume->id}}</td>
                            <td>{{$volume->title}}</td>
                            <td>{{$volume->description}}</td>
                            <td>{{$volume->language}}</td>

                            <td>
                                <form><a href="{{url('Volume/'.$volume->id.'/issues')}}">Issues</a></form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection