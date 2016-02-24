@extends('master')
@section('content')
    <h1>Contact Index</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->firstName }}</td>
                <td>{{ $contact->lastName }}</td>
                <td>{{ $contact->email }}</td>
            </tr>
        @empty
            <tr>
                <td col="4">Sorry, No Contacts Found</td>
            </tr>
        @endforelse
        </tbody>
@endsection
