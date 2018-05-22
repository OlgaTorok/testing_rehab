@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Add/Edit Activities for User: {{ $user->name }}</h3>
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
                    <form method="POST" action="{{ route('admin.users.activities_store', $user->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @foreach ($activities as $activity)
                            <input type="checkbox"
                                   name="activities[]"
                                   value="{{ $activity->id }}"
                                   id="activity_{{ $activity->id }}"
                                   {{ ($user->activities->contains($activity))?"checked":"" }}
                                   />
                            <label for="activity_{{ $activity->id }}">{{ $activity->title }}</label>
                            <br />
                        @endforeach
                        <a href="{{ route('admin.users.show', array('user' => $user)) }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
