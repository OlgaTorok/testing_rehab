@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Add/Edit Steps for Activity: {{ $activity->title }}</h3>
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
                    <form method="POST" action="{{ route('admin.activities.steps_store', $activity->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @foreach ($steps as $step)
                            <input type="checkbox"
                                   name="steps[]"
                                   value="{{ $step->id }}"
                                   id="step_{{ $step->id }}"
                                   {{ ($activity->steps->contains($step))?"checked":"" }}
                                   />
                            <label for="step_{{ $step->id }}">{{ $step->title }}</label>
                        @endforeach
                        <a href="{{ route('admin.activities.show', array('activity' => $activity)) }}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
