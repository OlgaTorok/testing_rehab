@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Step:
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Description</td>
                                <td>{{ $step->description }}</td>
                            </tr>

                            {{-- <tr>
                                <td>Tip</td>
                                <td>{{ $step->tip->description }}</td>
                            </tr> --}}

                        </tbody>
                    </table>

                    <a href="{{ route('admin.steps.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.steps.edit', array('step' => $step)) }}"
                       class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.steps.destroy', array('step' => $step )) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
