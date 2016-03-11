@extends('master')
@section('content')
    <h1>Show Contact</h1>
    <div class="row">
        <div class="col-md-6">
            {{ var_dump($contact) }}
        </div>
        <div class="col-md-6">
            <p><b>id</b>: {{ $contact->id }}</p>
            <p><b>email</b>: {{ $contact->email }}</p>
            <p><b>name</b>: {{ $contact->name }}</p>
        </div>
    </div>
@endsection
