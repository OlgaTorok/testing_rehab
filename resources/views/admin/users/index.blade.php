@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

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
                                    {{-- <!-- We don't want the admin to delete user by mistake so we don't put delete button on this page -->
                                    <!-- <a href="{{ route('admin.users.edit', array('user' => $user)) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('admin.users.destroy', array('user' => $user )) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                                    </form> --> --}}
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
