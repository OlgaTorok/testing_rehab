@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Steps
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
                    <form method="POST" action="{{ route('admin.steps.update', array('step' => $step)) }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                             <label for="description">Description</label>
                             <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $step->description) }}" />
                        </div>

                        <!-- OT - tip->description here -->
                        <div class="form-group">
                            <label for="tip_id">Tip</label>
                            <input type="text" class="form-control" id="tip_id" name="tip_id" value="{{ old('tip_id', $step->tip->description) }}" />
                        </div>

                        <a href="{{ route('admin.steps.show', array('step' => $step)) }}" class="btn btn-default">Back</a>
                        <a href="{{ route('admin.steps.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
