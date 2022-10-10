<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>all posts </title>
</head>
<body>
@extends('reviews.layout')
@section('main_content')



<h3>{{$contact->subject}}</h3>
<p>{{$contact->email}}</p>
<p>{{$contact->message}}</p>

<a class="btn btn-info" style="margin-bottom: 10px" href="{{route('reviews.edit',$contact->id)}}">Edit</a>

<form action="{{ route('reviews.destroy', $contact->id)  }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>


</body>
@endsection
</html>
