@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Activity: {{ $activity->title }}
                </div>
                <div class="panel-body">

                    <table class="table table-hover table-responsive">
                        <tbody>
                            <tr>
                                <td>Title</td>
                                <td>{{ $activity->title }}</td>
                            </tr>
                            <tr>
                                <td>Short Description</td>
                                <td>{{ $activity->short_descript }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $activity->description }}</td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td>{{ $activity->level->name }}</td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>{{ $activity->category->cat_name }}</td>
                            </tr>

                            <tr>
                                <td>Step</td>
                                @foreach ($activity->steps as $step)
                                    <td>{{ $step->description }}</td>
                                  
                                @endforeach
                            </tr>
                            <tr>
                                <td>Picture</td>
                                <td>{{ $activity->picture }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('admin.activities.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.activities.edit', array('activity' => $activity)) }}"
                       class="btn btn-warning">Edit</a>

                    <form style="display:inline-block"
                          method="POST"
                          action="{{ route('admin.activities.destroy', array('activity' => $activity)) }}">
                           <input type="hidden" name="_method" value="DELETE">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <a type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>

                    <h3>Steps</h3>
                    @if (count($activity->steps) == 0)
                    <p>There are no steps for this activity</p>
                    @else
                    <table class="table">
                        <tbody>
                            @foreach ($activity->steps as $step)
                                <tr>
                                    <td>{{ $step->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif

                    <h3>Tips</h3>
                    @if (count($activity->tips) == 0)
                    <p>There are no Tips for this activity</p>
                    @else
                    <table class="table">
                        <tbody>
                            @foreach ($activity->tips as $tip)
                                <tr>
                                    <td>{{ $tip->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    <a href="{{ route('admin.activities.steps_create', $activity->id) }}" class="btn btn-primary">Add steps</a>

                  </div>  <!-- panel-body -->
            </div>  <!-- panel -->
        </div>  <!-- col-md-8 col-md-offset-2 -->
    </div>  <!-- row -->
</div>  <!-- container -->
@endsection
