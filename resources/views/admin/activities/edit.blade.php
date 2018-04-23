@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Edit Activity</h3>
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
                    <form method="POST" action="{{ route('admin.activities.update', array('activity' => $activity)) }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $activity->title) }}" />
                        </div>
                        <div class="form-group">
                            <label for="short_descript">Short Description</label>
                            <input type="text" class="form-control" id="short_descript" name="short_descript" value="{{ old('short_descript', $activity->short_descript) }}" />
                        </div>
                        <div class="form-group">
                            <label for="description"> Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $activity->description) }}" />
                        </div>

                        <div class="form-group">
                            <label for="url">url</label>
                            <input type="text" class="form-control" id="url" name="url" value="{{ old('url', $activity->url) }}" />
                        </div>

                        <!-- code for drop down menu fro step and tip to go here -->

                        <div class="form-group">
                            <label for="step_id">Step</label>
                            <input type="text" class="form-control" id="step_id" name="step_id" value="{{ old('step_id', $activity->step->description) }}" />
                             <label for="tip_id">Tip</label>
                            <input type="text" class="form-control" id="tip_id" name="tip_id" value="{{ old('tip_id', $activity->tip->description) }}" />
                        </div>

                        <!-- code for drop down menu for levels to go here -->

                        <div class="form-group">
                            <label for="level_id">Level</label>
                            <input type="text" class="form-control" id="level_id" name="level_id" value="{{ old('level_id', $activity->level->name) }}" />
                        </div>

                        <!-- code for drop down menu for levels to go here -->
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <input type="text" class="form-control" id="category_id" name="category_id" value="{{ old('category_id', $activity->category->cat_name) }}" />
                        </div>

                        <!-- code for drop down menu for rating to go here -->
                        <div class="form-group">
                            <label for="rating_id">Rating</label>
                            <input type="text" class="form-control" id="rating_id" name="rating_id" value="{{ old('rating_id', $activity->rating->name) }}" />
                        </div>

                        <!-- code for drop down menu for emojis to go here -->
                        <div class="form-group">
                            <label for="emoji_id">Emoji</label>
                            <input type="text" class="form-control" id="emoji_id" name="emoji_id" value="{{ old('emoji_id', $activity->emoji->name) }}" />
                        </div>


                        <a href="{{ route('admin.activities.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
