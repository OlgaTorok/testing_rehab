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
    <!-- This is a filter - same code as searchbar  -->
    <div class="row">
        <div class="col-md-3">
            <select class="form-control">
                @foreach ($categories as $category)
                    <option>{{ $category->cat_name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- ACTIVITIES FOR EACH CATEGORY -->
    @foreach ($categories as $category)
        @if (Auth::user()->activities()->where('category_id', $category->id)->get()->count() > 0)
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading">{{ $category->cat_name}}</h2>
                <hr />
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12">
                @foreach(Auth::user()->activities()->where('category_id', $category->id)->get() as $activity)
                <!-- ******************** CARDS ************************ -->
                    @if ($activity->category_id == $category->id)
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3">
                        <div class="card card-menu">
                            <a href="{{ route('user.activities.show', $activity->id) }}">
                                <img class="card-img-top" src="{{ asset('images/' . $activity->picture) }}" alt="Card image cap" style="width: 100%;" />
                            </a>
                            
                            <div class="card-body" style="padding: 10px;">
                                <h4 class="card-title orange">{{ $activity->title }}</h4>
                                <p class="card-text">{{ $activity->short_descript }}</p>
                                {{-- <a href="{{ route('user.activities.show', $activity->id) }}" class="btn btn-info" style="width: 100%;">View</a> --}}
                            </div>  <!-- end card-body -->
                        </div>  <!-- end col-3 -->
                    </div>  <!-- end col-3 col-sm-6 col-md-4 col-lg-3 -->
                    @endif
                @endforeach
            </div><!-- End col-12 -->
        </div><!-- end row -->
        @endif
    @endforeach

    <hr>
    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; 2018, NRH</p>
    </footer>
</div> <!-- /container -->


@endsection
