@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message')}} </p>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Tips</h3>
                    <a href="{{ route('admin.tips.create') }}" class="btn btn-primary">Add</a>
                </div>

                <div class="panel-body">
                    @if (count($tips) === 0)
                        <p>There are no tip!</p>
                    @else
                    <table class = "table table-hover table-responsive">
                        <thead>
                            <th>Description</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            @foreach ($tips as $tips)
                            <tr>
                                <td width="85%">{{ $tips->description }}</td>
                                <td width="15%">
                                    <a href="{{ route('admin.tips.edit', array('tips' => $tips)) }}"
                                           class="btn btn-primary">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('admin.tips.destroy', array('tips' => $tips)) }}">
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
    </div>
</div>
@endsection
