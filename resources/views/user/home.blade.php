@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif

            <div class="jumbotron text-center blue-grey lighten-5">
                <h2 class="display-4 orange">National Rehabilitation Hospital</h2>
                <p class="lead">The National Rehabilitation Hospital (NRH) provides a
                    comprehensive range of specialist rehabilitation services to patients
                    from throughout Ireland who, as a result of an accident, illness or
                    injury have acquired a physical or cognitive disability and require
                    specialist rehabilitation.</p>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-info" target="blank" href="http://www.nrh.ie/rehabilitation-programmes-services/paediatric-family-centred-rehabilitation/" role="button">Learn more</a>
                </p>
            </div>

            <div class="info">
                <p>The Objectives of the <b class="orange">Paediatric Programme</b> are:</p>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-long-arrow-alt-right orange"></i></span>To achieve the maximum rehabilitation potential of each child – physically, emotionally and cognitively.</li>
                        <li><span class="fa-li"><i class="fas fa-long-arrow-alt-right orange"></i></span>To involve the children/young people and their families/carers in the rehabilitation process.</li>
                        <li><span class="fa-li"><i class="fas fa-long-arrow-alt-right orange"></i></span>To support the reintegration of the child/young person into his/her home, school and the wider community.</li>
                        <li><span class="fa-li"><i class="fas fa-long-arrow-alt-right orange"></i></span>To help and support the child/young person and his/herfamily to adjust to loss, changed self image and abilities.</li>
                        <li><span class="fa-li"><i class="fas fa-long-arrow-alt-right orange"></i></span>To liaise and advocate with Health, Therapeutic and Education Authorities in the young person’s local communities
                            regarding their ongoing rehabilitation needs.</li>
                        <li><span class="fa-li"><i class="fas fa-long-arrow-alt-right orange"></i></span>To offer rehabilitation training and education to family/carers/Teachers/Special Needs Assistants and Personal Assistants
                            and other service providers.</li>
                    </ul>
                 
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
