@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4">All Users</h1>
    <div class="table-responsive mb-5">
        <table class="table table-striped">
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
                        @if ($u->role->role_name != "Admin")
                        <form action="{{ route('delete_user', $u) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this user?')">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
