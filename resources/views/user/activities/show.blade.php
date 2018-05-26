@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
</div><!--  -->

<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.activities.index') }}">Activities</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $activity->title }}</li>
            </ol>
        </nav>
    </div>

    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default" style="box-shadow: 2px 5px 8px #dadddf;">
                <div class="panel-heading">
                    <!-- <img class="card-img-top" src="{{ url('../public/img/robot.png') }}" alt="Card image cap" style="width: 100%" /> -->
                </div>
                <div class="panel-body">
                    <!--Title-->
                    <h1 class="card-title">{{ $activity->title }}</h1>
                    <hr class="hr-light">
                    <!--Text-->
                    <ul class="list-group list-group-flush ">
                        <p class="card-text"><b>Description: </b> {{ $activity->description }}</p>
                        <hr />
                        <p class="card-text"><b>Category: </b> {{ $activity->category->cat_name }} </p>
                        <hr />
                        <p class="card-text"><b>Level: </b> {{ $activity->level->name }}</p>
                        <hr />
                        <p class="card-text"><b>Steps: </b></p>
                        @foreach ($activity->steps as $step)
                            @if (count($activity->steps) == 0)
                                <p>There are no steps for this activity</p>
                            @else
                                <p class="card-text">{{ $step->description }}</p>
                                @endif
                        @endforeach
                        <hr class="hr-light">
                        <p class="card-text">
                            <p style="text-align: center;"><b>How did the activity go?</b></p>
                            <div class="row">
                                <div class="rate" style="text-align: center">
                                    <div class="col-xs-4 col-md-4 col-lg-4"><button type="button" class="btn btn-info tip-popover" data-container="body" data-toggle="popover" data-placement="top" data-content="">Too easy</button></div>
                                    <div class="col-xs-4 col-md-4 col-lg-4"><button type="button" class="btn btn-info tip-popover" data-container="body" data-toggle="popover" data-placement="top" data-content="">Just Right</button></div>
                                    <div class="col-xs-4 col-md-4 col-lg-4"><button type="button" class="btn btn-info tip-popover" data-container="body" data-toggle="popover" data-placement="top" data-content="">Too Hard</button></div>
                                </div>
                            </div>
                        </p>
                    </ul>
                    <hr class="hr-light">
                </div>
            </div>
        </div>  <!-- End col-md-9 -->

        <div class="col-md-3">
            <div class="sidebar-module">
                <div class="card" style="box-shadow: 2px 5px 8px #dadddf; padding: 10px;">
                    <div class="card-body">
                        <h4 class="card-title">Related Activities</h4>
                        @foreach(Auth::user()->activities()->where('activity_id', $activity->id)->get() as $activity)
                            <a href="#" class="card-link">{{ $activity->title }}</a><br />
                        @endforeach
                    </div>
                </div>  <!-- End card -->
            </div>







        </div>  <!-- End sidebar -->

    </div><!-- end row -->
    <hr>

    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; 2018, NRH</p>
    </footer>

</div> <!-- /container -->


@endsection
