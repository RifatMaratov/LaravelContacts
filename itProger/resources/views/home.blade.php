@extends('layout')

@section('title')Главная страница@endsection
@section('main_content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Subject</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>
            <tr @foreach($reviews as $el)>

                <td>{{$el->subject}}</td>
                <td>{{$el->email}}</td>
                <td>{{$el->message}}</td>


            </tr @endforeach>
            </tbody>
        </table>
@endsection
