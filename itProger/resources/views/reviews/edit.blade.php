<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>create posts </title>
</head>
<body>
@extends('reviews.layout')
@section('main_content')


<form action="{{ route('reviews.update',['review' => $contact->id]) }}"method="post">
    @csrf
    @method('PUT')
    Title: <br><br> <input type="text" name="subject" value="{{$contact->subject}}"> <br>
    Content: <br><br> <textarea name= "message" cols="40" rows="3">{{$contact->message}}</textarea> <br>
    Title: <br><br> <input type="text" name="email" value="{{$contact->email}}"> <br><br><br>
    <button type="submit">Update post</button>
</form>
</body>
@endsection
</html>
