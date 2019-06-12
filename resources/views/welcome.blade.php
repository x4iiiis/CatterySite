@extends('layouts.app')

@section('web-content')

<div class="container">
    <Root-Application />
</div>

<br>

<div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/4.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/3.jpg" alt="Third slide">
            </div>
        </div>
    </div>
</div>

@endsection
