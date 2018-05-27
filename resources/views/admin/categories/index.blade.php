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
                        <h3>Category</h3>

                        <!-- <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add</a> -->
                    </div>

                    <div class="panel-body">
                        @if (count($categories) === 0)
                            <p>There are no categories!</p>
                        @else
                        <table class = "table table-hover table-responsive">
                            <thead>
                        <!-- <th>ID</th> -->
                              <th>Name</th>
                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                  <!--  <td>{{ $category->id }}</td> -->
                                    <td>{{ $category->cat_name }}</td>
                                    <td>
                                        <a href="{{ route('admin.categories.edit', array('category' => $category)) }}"
                                               class="btn btn-warning">Edit</a>
                                        <form style="display:inline-block" method="POST" action="{{ route('admin.categories.destroy', array('category' => $category)) }}">
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
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add new category</h3>
                        <!-- <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add</a> -->
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('admin.categories.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="cat_name" name="cat_name" value="{{ old('cat_name') }}" />
                            </div>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>





        </div>

    </div>
</div>
@endsection
