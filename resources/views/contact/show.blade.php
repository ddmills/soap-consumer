@extends('master')
@section('content')
    <h1>Contact Index</h1>
    <p><b>id</b>: {{ $contact->id }}</p>
    <p><b>email</b>: {{ $contact->email }}</p>
    <p><b>name</b>: {{ $contact->name }}</p>
@endsection
