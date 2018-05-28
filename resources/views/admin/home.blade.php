@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Admin Dashboard</div> -->

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="jumbotron text-center">
                        <h2>Welcome to NRH Application</h2>
                        <p>As therapist you will have the rights to add activities and 
                            assign them to parents to use in the childs' rehabilitation. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
