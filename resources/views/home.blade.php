@extends('layouts.app')

@section('content')
    <h6>Home</h6>
    <h6>About Us</h6>
    <h6>Contact Us</h6>
{{$test}}
@endsection
@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection