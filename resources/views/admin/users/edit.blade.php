@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Edit User</h3>
                </div>

                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('admin.users.update', array('user' => $user)) }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                             <label for="name">Name</label>
                             <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" />
                         </div>

                       <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" />
                        </div>

                        <div class="form-group">
                            <label for="is_admin">Admin</label>
                            <input type="text" class="form-control" id="is_admin" name="is_admin" value="{{ old('is_admin', $user->is_admin) }}" />
                        </div>

                        <div class="form-group">
                            <label for="fact_tip">Consent</label>
                            <input type="text" class="form-control" id="consent" name="consent" value="{{ old('consent', $user->consent) }}" />
                        </div>

                        <a href="{{ route('admin.users.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
