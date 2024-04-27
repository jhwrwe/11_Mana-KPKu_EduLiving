@extends('layouts.app')
@section('content')

<div class="container">
    <h1>All Users</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->role->role_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
