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
                        <h3>Emojis</h3>
                    </div>

                    <div class="panel-body">
                        @if (count($emojis) === 0)
                            <p>There are no emojis!</p>
                        @else
                        <table class = "table table-hover table-responsive">
                            <thead>
                                <th>Name</th>
                                <th>Picture</th>
                            </thead>

                            <tbody>
                                @foreach ($emojis as $emoji)
                                    <tr>
                                       <td>{{ $emoji->name }}</td>
                                        <td>{{ $emoji->picture }}</td>

                                      <td>
                                            <a href="{{ route('admin.emojis.edit', array('emoji' => $emoji)) }}"
                                                   class="btn btn-warning">Edit</a>
                                            <form style="display:inline-block" method="POST" action="{{ route('admin.emojis.destroy', array('emoji' => $emoji)) }}">
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
                        <h3>Add new Emoji</h3>
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('admin.emojis.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                            </div>
                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="text" class="form-control" id="picture" name="picture" value="{{ old('picture') }}" />
                            </div>
                            <a href="{{ route('admin.emojis.index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
