@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View Users
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>

                            <tr>
                                <td>Name</td>
                                <td>{{ $user->name }}</td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>{{ $user->email }}</td>
                            </tr>

                            <tr>
                                <td>is_admin</td>
                                <td>{{ $user->is_admin }}</td>
                            </tr>

                            <tr>
                                <td>Consent</td>
                                <td>{{ $user->consent }}</td>
                            </tr>

                          <!--  <tr>
                                <td>Password</td>
                                <td>{{ $user->password }}</td>
                            </tr> -->

                        </tbody>
                    </table>

                    <a href="{{ route('admin.users.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.users.edit', array('user' => $user)) }}"
                       class="btn btn-warning">Edit</a>
                    <form style="display:inline-block"
                          method="POST"
                          action="{{ route('admin.users.destroy', array('user' => $user)) }}">

                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <a type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>


                    <h3>Activities</h3>
                    @if (count($user->activities) == 0)
                    <p>There are no activities for this user</p>
                    @else
                    <table class="table">
                        <tbody>
                        @foreach ($user->activities as $activity)
                            <tr>
                                <td>{{ $activity->title }}</td>
                                <td>{{ $activity->description }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @endif
                    <a href="{{ route('admin.users.activities_create',$user->id) }}"
                       class="btn btn-primary">Edit Activity</a>

                </div>  <!-- panel-body -->
            </div>  <!-- panel -->
        </div>  <!-- col-md-8 col-md-offset-2 -->
    </div>  <!-- row -->
</div>  <!-- container -->
@endsection
