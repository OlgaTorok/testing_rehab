@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Add Activities</h3>
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
                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.activities.store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
                        </div>

                        <div class="form-group">
                             <label for="short_descript">Short Description</label>
                             <input type="text" class="form-control" id="short_descript" name="short_descript" value="{{ old('short_descript') }}" />
                         </div>

                       <div class="form-group">
                            <label for="description"> Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
                        </div>

                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input type="file" class="form-control" id="picture" name="picture" value="{{ old('picture') }}" />
                         </div>

                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input type="file" class="form-control" id="picture" name="picture" value="{{ old('picture') }}" />
                         </div>

                        <div class="form-group">
                            <label for="level_id">Level</label>
                            <select class="form-control" id="level_id" name="level_id">
                            @foreach ($levels as $level)
                                <option value="{{ $level->id }}" {{ (old('level_id')==$level->id)?"selected":"" }}>{{ $level->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <!--  <input type="text" class="form-control" id="category_id" name="category_id" value="{{ old('category_id') }}" /> -->
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ (old('category_id')==$category->id)?"selected":"" }}>{{ $category->cat_name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="description">Step</label>

                                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />

                                <label for="tip_id">Tip</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
                            </div>
                             <button type="submit" class="btn btn-secondary pull-right">Add new step</button>
                        </div>

                        <!-- <div class="form-group">
                            <label for="step_id">Step</label>
                            <select class="form-control" id="step_id" name="step_id">
                            @foreach ($steps as $step)
                                <option value="{{ $step->id }}" {{ (old('step_id')==$step->id)?"selected":"" }}>{{ $step->description }}</option>
                            @endforeach
                            </select>
                        </div> -->

                        <!-- <div class="form-group">
                            <label for="tip_id">Tip</label>
                            @foreach ($tips as $tip)
                                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
                             @endforeach
                        </div>
                        <button type="" class="btn btn-secondary pull-right" id="new">Add new step</button> -->

                        <br>
                        <h4>Rating Tips</h4>
                        <!-- tips to be added but because of an error it was left to show ratings for now -->
                        <div class="form-group">
                            @foreach ($ratings as $rating)
                                <label for="tip_id">{{ $rating->name }}</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="emoji_id">Emoji</label>
                            <select class="form-control" id="emoji_id" name="emoji_id">
                            @foreach ($emojis as $emoji)
                                <option value="{{ $emoji->id }}" {{ (old('emoji_id')==$emoji->id)?"selected":"" }}>{{ $emoji->name }}</option>
                            @endforeach
                            </select>
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
