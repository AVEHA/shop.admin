@extends('client.layout')

@section('content')
    <div class="py-3">
        <div class="container">
            <div class="row hidden-md-up">
                <div class="col-md-6">
                    <div class="card" style="width: 27rem;">
                        <img src="../../../../public/assets/front/img/portfolio/portfolio-1.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">Product short description.</p>
                            <a href="#" class="btn btn-primary">Watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 27rem;">
                        <img src="../../../../public/assets/front/img/portfolio/portfolio-1.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Product short description.</p>
                            <a href="#" class="btn btn-primary">Watch</a>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>
    </div>
@endsection
