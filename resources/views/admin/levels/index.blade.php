@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message')}} </p>
            @endif

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Levels</h3>
                    </div>

                    <div class="panel-body">
                        @if (count($levels) === 0)
                            <p>There are no levels!</p>
                        @else
                        <table class = "table table-hover table-responsive">
                            <thead>
                          <!-- <th>ID</th> -->
                               <th>Name</th>
                            </thead>

                            <tbody>
                                @foreach ($levels as $level)
                                    <tr>
                                      <!--  <td>{{ $level->id }}</td> -->
                                        <td>{{ $level->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.levels.edit', array('level' => $level)) }}"
                                                   class="btn btn-warning">Edit</a>
                                            <form style="display:inline-block" method="POST" action="{{ route('admin.levels.destroy', array('level' => $level)) }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="form-control btn btn-danger">Delete</a>
                                            </form>
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

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add new level</h3>
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('admin.levels.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                            </div>
                            <a href="{{ route('admin.levels.index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
