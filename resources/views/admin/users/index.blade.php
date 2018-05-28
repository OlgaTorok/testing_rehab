@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message')}} </p>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Users</h3>
                    {{-- <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add</a> --}}
                </div>

                <div class="panel-body">
                    @if (count($user) === 0)
                        <p>There are no users!</p>
                    @else
                    <table class = "table table-hover table-responsive">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Admin</th>
                            <th>Consent</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            @foreach ($user as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->is_admin }}</td>
                                <td>{{ $user->consent }}</td>

                                <td>
                                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-default btn-user-view">View</a>
                                   
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @endif
                    <hr />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
