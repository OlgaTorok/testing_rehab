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
                    <h3>Steps</h3>
                    <a href="{{ route('admin.steps.create') }}" class="btn btn-primary">Add</a>
                </div>

                <div class="panel-body">
                    @if (count($steps) === 0)
                        <p>There are no steps!</p>
                    @else
                        <table class="table table-responsive table-hover ">
                            <thead>
                                <th>Description</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($steps as $step)
                                    <tr>
                                        <td>{{ $step->description }}</td>
                                        <!-- Here we add the code for the tip description -->

                                        <td style="width: 150px;">
                                            {{-- <a href="{{ route('admin.steps.show', array('step' => $step)) }}" class="btn btn-default">View</a> --}}
                                            <a href="{{ route('admin.steps.edit', array('step' => $step)) }}"
                                                class="btn btn-warning">Edit</a>
                                             <form style="display:inline-block" method="POST" action="{{ route('admin.steps.destroy', array('step' => $step )) }}">
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
    </div>
</div>
@endsection
