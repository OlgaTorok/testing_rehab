@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Activities</h3>
                    <a href="{{ route('admin.activities.create') }}" class="btn btn-primary">Add</a>
                </div>

                <div class="panel-body">
                    @if (count($activities) === 0)
                        <p>There are no activities!</p>
                    @else
                        <table class="table table-responsive table-hover ">
                            <thead>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Description</th>
                                <th>Step</th>
                                <th>Tip</th>
                                <th>Picture</th>
                                <th>Level</th>
                                <th>Category</th>
                                <th>Rating</th>
                                <th>Emoji</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->title }}</td>
                                        <td>{{ $activity->short_descript }}</td>
                                        <td>{{ $activity->description }}</td>
                                        <!-- <td>{{ $activity->$step->description }}</td> -->
                                        <td>{{ $activity->tip->name }}</td>
                                        <td>{{ $activity->picture }}</td>
                                        <td>{{ $activity->level->name }}</td>
                                        <td>{{ $activity->category->cat_name }}</td>
                                        <td>{{ $activity->rating->name }}</td>
                                        <td>{{ $activity->emoji->name}}</td>

                                        <td>
                                            <a href="{{ route('admin.activities.show', array('activity' => $activity)) }}"
                                                class="btn btn-default">View</a>
                                       </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
