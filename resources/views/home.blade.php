@extends('layouts.home')

@section('main')
    <div class="container">
        <section>
            <h5 id="header-text">Who need help right now</h5>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner mx-auto help-carousel">
                    <div class="carousel-item carousel-home-item active ">
                        <div class="row">
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="{{asset('../images/help-image1.png')}}" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed third appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="images/help-image2.png" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed first appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="images/help-image3.png" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed seco appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-home-item ">
                        <div class="row">
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="images/help-image1.png" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed third appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="images/help-image2.png" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed first appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="images/help-image3.png" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed seco appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-home-item ">
                        <div class="row">
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="images/help-image1.png" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed third appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="images/help-image2.png" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed first appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                            <div class="help-card text-danger col-xl-4 col-md-12 text-center">
                                <img src="images/help-image3.png" alt="">
                                <div class="help-card-info">
                                    <p class="header">Ahmed seco appeal</p>
                                    <p class="description">Ahmed third appeal testingAhmed third appeal testing</p>
                                    <button class="btn btn-custom">See more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon carousel-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon carousel-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
        <section class="news-line">
            <h5 id="header-text">News Line</h5>
            <div class="row justify-content-between mb-5">
                <div class="col-md-2 col-lg-6 col-12 search-box">
                    <input type="text" class="form-control" placeholder="Search">
                    <x-heroicon-o-search class="search-icon"/>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-4 col-12">
                    <div class="row justify-content-between">
                        <div class="col-md-7 col-8">
                            <button class="btn btn-custom">Request for Help</button>
                        </div>
                        <div class="col-md-5 col-4">
                            <button class="btn btn-custom">New Post</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="posts">
                <div class="post">
                    <div class="row post-header justify-content-between">
                        <div class="col-lg-3 col-md-4 col-sm-5">
                            <div class="row">
                                <div class="col-lg-3 col-md-5 col-sm-3">
                                    <img class="post-image" src="images/help-image1.png" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6 col post-user-info ms-1">
                                    <h5>Eduard Gabrielyan</h5>
                                    <h5>@edgabrielian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2 col text-end">
                            <p>2022-02-19</p>
                            <p>07:18 PM</p>
                        </div>
                        <div class="col-12">
                            Եկել ենք մի ընտանիք որտեղ լույս չկա , ապրում է միայնակ մայր և 3 անչափահաս երեխա😔❤️
                        </div>
                    </div>
                    <div class="post-main mb-3 mt-3">
                        <video height="500" width="100%" controls>
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/mp4">--}}
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/ogg">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="post-media row justify-content-center text-center">
                        <div class="col-2">
                            <x-iconpark-like-o class="icon "/>
                        </div>
                        <div class="col-2">
                            <x-far-comment class="icon"/>
                        </div>
                        <div class="col-2">
                            <x-carbon-reply class="icon"/>
                        </div>
                        <div class="col-2">
                            <x-bi-share class="icon"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
