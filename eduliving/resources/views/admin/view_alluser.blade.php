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
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->role->role_name }}</td>
                    <td>
                        @if ($u->role->role_name == "Admin")
                        @else
                        <form action="{{ route('delete_user', $u) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" id="delete" name="delete">Delete</button>
                        </form>
                        @endif

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
