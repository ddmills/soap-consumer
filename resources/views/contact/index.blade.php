@extends('master')
@section('content')
    <h1>Contact Index</h1>
    <div class="container">
        <div class="col-md-6">
            {{ var_dump($contacts) }}
        </div>
        <div class="col-md-6">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td col="4">Sorry, No Contacts Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
