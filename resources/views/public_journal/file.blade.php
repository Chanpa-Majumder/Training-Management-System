@extends('admin/layouts/master')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>
                        <center>Journal</center>
                    </h2>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Abstract</th>
                        {{--<th>Filepath</th>--}}
                        <th>References</th>
                        <th>Issue Id</th>
                        <th>Download</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($files as $file)
                        <tr>
                            <td>{{$file->id}}</td>
                            <td>{{$file->author}}</td>
                            <td>{{$file->abstract}}</td>
{{--                            <td class="col-sm-1"><img src="{{asset($file->filepath)}}" class="thumb img-responsive" alt="a picture"><br/></td>--}}
                            <td>{{$file->references}}</td>
                            <td>{{$file->issue_id}}</td>

                            <td>
                                @if (Auth::check())
                                    <a href="{{url($file->filepath)}}">Download</a>
                                @else
                                    login To download
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection