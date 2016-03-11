@extends('master')
@section('content')
    <h1>Show Contact</h1>
    <div class="row">
        <div class="col-md-6">
            {{ var_dump($contact) }}
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->firstName }}</td>
                        <td>{{ $contact->lastName }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
