@extends('layouts.app')

@section('main')
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner carousel-index">
                <div class="carousel-item active ms-auto text-center">
                    <img src="images/carusel/image1.png" class="" alt="carousel">
                    <div class="carousel-caption text-black carousel-text">
                        <p>As well as diluted with a fair amount of empathy, rational thinking largely determines the
                            importance of the positions taken by the participants in relation to the tasks assigned.</p>
                        <p>As is commonly believed, interactive prototypes are only a method of political participation
                            and are associatively distributed across industries.</p>
                    </div>
                </div>
                <div class="carousel-item ms-auto text-center">
                        <img src="images/carusel/image2.png" class="" alt="carousel">
                    <div class="carousel-caption text-black carousel-text">
                        <p>As well as diluted with a fair amount of empathy, rational thinking largely determines the
                            importance of the positions taken by the participants in relation to the tasks assigned.</p>
                        <p>As is commonly believed, interactive prototypes are only a method of political participation
                            and are associatively distributed across industries.</p>
                    </div>
                </div>
                <div class="carousel-item ms-auto text-center">
                    <img src="images/carusel/image3.png" class="" alt="carousel">
                    <div class="carousel-caption text-black carousel-text">
                        <p>As well as diluted with a fair amount of empathy, rational thinking largely determines the
                            importance of the positions taken by the participants in relation to the tasks assigned.</p>
                        <p>As is commonly believed, interactive prototypes are only a method of political participation
                            and are associatively distributed across industries.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
