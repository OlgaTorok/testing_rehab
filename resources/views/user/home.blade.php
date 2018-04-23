@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif

            <div class="jumbotron text-center blue-grey lighten-5">
                <h1 class="display-4">National Rehabilitation Hospital</h1>
                <p class="lead">The National Rehabilitation Hospital (NRH) provides a
                    comprehensive range of specialist rehabilitation services to patients
                    from throughout Ireland who, as a result of an accident, illness or
                    injury have acquired a physical or cognitive disability and require
                    specialist rehabilitation.</p>
                <hr class="my-4">
                <p>The Objectives of the <b>Paediatric Programme</b> are to achieve the maximum rehabilitation
                    potential of each child – physically, emotionally and cognitively, to involve the
                    children/young people and their families/carers in the rehabilitation process,
                    to support the reintegration of the child/young person into his/her home, school
                    and the wider community, to help and support the child/young person and his/her
                    family to adjust to loss, changed self image and abilities, to liaise and advocate
                    with Health, Therapeutic and Education Authorities in the young person’s local communities
                     regarding their ongoing rehabilitation needs, to offer rehabilitation training and
                     education to family/carers/Teachers/Special Needs Assistants and Personal Assistants
                      and other service providers.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" target="blank" href="http://www.nrh.ie/rehabilitation-programmes-services/paediatric-family-centred-rehabilitation/" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>

    <hr>
    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; 2018, NRH</p>
    </footer>
</div>
@endsection
