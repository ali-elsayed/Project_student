@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section">
            <div class="jumbotron">
                <h1 class="display-4"> ! تسوق الكتب مجاناً</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="{{route('product.index')}}" role="button">متجر الكتب</a>
            </div>
        </div>
        <section>
            <div class="row">
            @foreach($latestProducts as $Product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $Product->image }}" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $Product->title }}</h5>
                            <p class="card-text">title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">شراء</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </section>
    </div>
@endsection 