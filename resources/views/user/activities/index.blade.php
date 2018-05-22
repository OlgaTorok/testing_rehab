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
        <div class="col-md-12">
            <div class="container">
                @if(isset($details))
                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                <h2>Sample Activity details</h2>
                <table class="table table-striped">
                    <tbody>
                        @foreach($details as $activity)
                        <tr>
                            <td>{{ $activity->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

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
                            <img class="card-img-top" src="{{ url('../public/images/beach.png') }}" alt="Card image cap" style="width: 100%" />
                            {{-- <img class="card-img-top" src="{{ asset('images/' . $activity->picture) }}" alt="Card image cap" style="width: 100%" /> --}}
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        {{-- <div class="circle"><img src="{{ url('../public/images/face_black.svg') }}"></div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="padding: 10px;">
                                <h4 class="card-title">{{ $activity->title }}</h4>
                                <p class="card-text">{{ $activity->short_descript }}</p>
                                <a href="{{ route('user.activities.show', $activity->id) }}" class="btn btn-primary">Go</a>
                            </div>  <!-- end card-body -->
                        </div>  <!-- end col-3 -->

                    </div>  <!-- end col-3 col-sm-6 col-md-4 col-lg-3 -->
                    @endif
                @endforeach
            </div><!-- End col-8 -->
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
