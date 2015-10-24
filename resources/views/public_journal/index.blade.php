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
                    <th>Frequency</th>
                    <th>Logo</th>
                    <th>Language</th>
                </tr>
                </thead>
                <tbody>
                @foreach($journals as $journal)
                <tr>
                    <td>{{$journal->id}}</td>
                    <td>{{$journal->title}}</td>
                    <td>{{$journal->description}}</td>
                    <td>{{$journal->frequency}}</td>
                    <td class="col-sm-1"><img src="{{$journal->logo}}" class="thumb img-responsive" alt="a picture"><br/></td>
                    <td>{{$journal->language}}</td>

                    <td>
                        <form><a href="{{url('public_journal/'.$journal->id.'/Volumes')}}">Volumes</a></form>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection