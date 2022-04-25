@extends('layouts.home')

@section('main')
    <div class="container mt-5">
        <div class="row">
            <div onclick="window.location='/user-video/{{ 1 }}' " class="user-videos col-lg-3 col-md-4">
                <div class="user-video">
                    <div class="row post-header">
                        <div class="col-lg-8 col-md-8 col-sm-10 col-9">
                            <div class="row">
                                <div class="col-lg-2 col-1 col-md-5 col-sm-1">
                                    <img class="user-video-image" src="{{asset('images/help-image1.png')}}" alt="">
                                </div>
                                <div class="col-lg-5 col-5 post-user-info ms-1">
                                    <h5 class="mb-0">Eduard Gabrielyan</h5>
                                    <h5 class="mb-0">@edgabrielian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 col-2 text-end video-date">
                            <p class="m-0">2022-02-19</p>
                            <p class="p-0">07:18 PM</p>
                        </div>
                    </div>
                    <div class="user-video-main mb-3 mt-3">
                        <video height="187" width="100%" controls>
                                                        <source src="https://magaxat.s3.amazonaws.com/videos/2g7IygdLnYitJVeX82TJP9NsmvfxEe5S2qrrKFRf.mp4" type="video/mp4">
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/ogg">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-12">
                        Եկել ենք մի ընտանիք որտեղ լույս չկա , ապրում է միայնակ մայր և 3 անչափահաս երեխա😔❤️
                    </div>
                </div>
            </div>
            <div class="user-videos col-lg-3 col-md-4">
                <div class="user-video">
                    <div class="row post-header">
                        <div class="col-lg-8 col-md-8 col-sm-10 col-9">
                            <div class="row">
                                <div class="col-lg-2 col-1 col-md-5 col-sm-1">
                                    <img class="user-video-image" src="{{asset('images/help-image1.png')}}" alt="">
                                </div>
                                <div class="col-lg-5 col-5 post-user-info ms-1">
                                    <h5 class="mb-0">Eduard Gabrielyan</h5>
                                    <h5 class="mb-0">@edgabrielian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 col-2 text-end video-date">
                            <p class="m-0">2022-02-19</p>
                            <p class="p-0">07:18 PM</p>
                        </div>
                    </div>
                    <div class="user-video-main mb-3 mt-3">
                        <video height="187" width="100%" controls>
                                                        <source src="https://magaxat.s3.amazonaws.com/videos/3EWmmCYtWFZOwCVfaILgrczkZn3c216hgdDHGv86.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-12">
                        Եկել ենք մի ընտանիք որտեղ լույս չկա , ապրում է միայնակ մայր և 3 անչափահաս երեխա😔❤️
                    </div>
                </div>
            </div>
            <div class="user-videos col-lg-3 col-md-4">
                <div class="user-video">
                    <div class="row post-header">
                        <div class="col-lg-8 col-md-8 col-sm-10 col-9">
                            <div class="row">
                                <div class="col-lg-2 col-1 col-md-5 col-sm-1">
                                    <img class="user-video-image" src="{{asset('images/help-image1.png')}}" alt="">
                                </div>
                                <div class="col-lg-5 col-5 post-user-info ms-1">
                                    <h5 class="mb-0">Eduard Gabrielyan</h5>
                                    <h5 class="mb-0">@edgabrielian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 col-2 text-end video-date">
                            <p class="m-0">2022-02-19</p>
                            <p class="p-0">07:18 PM</p>
                        </div>
                    </div>
                    <div class="user-video-main mb-3 mt-3">
                        <video height="187" width="100%" controls>
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/mp4">--}}
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/ogg">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-12">
                        Եկել ենք մի ընտանիք որտեղ լույս չկա , ապրում է միայնակ մայր և 3 անչափահաս երեխա😔❤️
                    </div>
                </div>
            </div>
            <div class="user-videos col-lg-3 col-md-4">
                <div class="user-video">
                    <div class="row post-header">
                        <div class="col-lg-8 col-md-8 col-sm-10 col-9">
                            <div class="row">
                                <div class="col-lg-2 col-1 col-md-5 col-sm-1">
                                    <img class="user-video-image" src="{{asset('images/help-image1.png')}}" alt="">
                                </div>
                                <div class="col-lg-5 col-5 post-user-info ms-1">
                                    <h5 class="mb-0">Eduard Gabrielyan</h5>
                                    <h5 class="mb-0">@edgabrielian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 col-2 text-end video-date">
                            <p class="m-0">2022-02-19</p>
                            <p class="p-0">07:18 PM</p>
                        </div>
                    </div>
                    <div class="user-video-main mb-3 mt-3">
                        <video height="187" width="100%" controls>
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/mp4">--}}
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/ogg">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-12">
                        Եկել ենք մի ընտանիք որտեղ լույս չկա , ապրում է միայնակ մայր և 3 անչափահաս երեխա😔❤️
                    </div>
                </div>
            </div>
            <div class="user-videos col-lg-3 col-md-4">
                <div class="user-video">
                    <div class="row post-header">
                        <div class="col-lg-8 col-md-8 col-sm-10 col-9">
                            <div class="row">
                                <div class="col-lg-2 col-1 col-md-5 col-sm-1">
                                    <img class="user-video-image" src="{{asset('images/help-image1.png')}}" alt="">
                                </div>
                                <div class="col-lg-5 col-5 post-user-info ms-1">
                                    <h5 class="mb-0">Eduard Gabrielyan</h5>
                                    <h5 class="mb-0">@edgabrielian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 col-2 text-end video-date">
                            <p class="m-0">2022-02-19</p>
                            <p class="p-0">07:18 PM</p>
                        </div>
                    </div>
                    <div class="user-video-main mb-3 mt-3">
                        <video height="187" width="100%" controls>
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/mp4">--}}
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/ogg">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-12">
                        Եկել ենք մի ընտանիք որտեղ լույս չկա , ապրում է միայնակ մայր և 3 անչափահաս երեխա😔❤️
                    </div>
                </div>
            </div>
            <div class="user-videos col-lg-3 col-md-4">
                <div class="user-video">
                    <div class="row post-header">
                        <div class="col-lg-8 col-md-8 col-sm-10 col-9">
                            <div class="row">
                                <div class="col-lg-2 col-1 col-md-5 col-sm-1">
                                    <img class="user-video-image" src="{{asset('images/help-image1.png')}}" alt="">
                                </div>
                                <div class="col-lg-5 col-5 post-user-info ms-1">
                                    <h5 class="mb-0">Eduard Gabrielyan</h5>
                                    <h5 class="mb-0">@edgabrielian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 col-2 text-end video-date">
                            <p class="m-0">2022-02-19</p>
                            <p class="p-0">07:18 PM</p>
                        </div>
                    </div>
                    <div class="user-video-main mb-3 mt-3">
                        <video height="187" width="100%" controls>
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/mp4">--}}
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/ogg">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-12">
                        Եկել ենք մի ընտանիք որտեղ լույս չկա , ապրում է միայնակ մայր և 3 անչափահաս երեխա😔❤️
                    </div>
                </div>
            </div>
            <div class="user-videos col-lg-3 col-md-4">
                <div class="user-video">
                    <div class="row post-header">
                        <div class="col-lg-8 col-md-8 col-sm-10 col-9">
                            <div class="row">
                                <div class="col-lg-2 col-1 col-md-5 col-sm-1">
                                    <img class="user-video-image" src="{{asset('images/help-image1.png')}}" alt="">
                                </div>
                                <div class="col-lg-5 col-5 post-user-info ms-1">
                                    <h5 class="mb-0">Eduard Gabrielyan</h5>
                                    <h5 class="mb-0">@edgabrielian</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 col-2 text-end video-date">
                            <p class="m-0">2022-02-19</p>
                            <p class="p-0">07:18 PM</p>
                        </div>
                    </div>
                    <div class="user-video-main mb-3 mt-3">
                        <video height="187" width="100%" controls>
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/mp4">--}}
                            {{--                            <source src="{{asset('assetlibr/public' . $upload->filepath . '/' . $upload->filename)}}" type="video/ogg">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-12">
                        Եկել ենք մի ընտանիք որտեղ լույս չկա , ապրում է միայնակ մայր և 3 անչափահաս երեխա😔❤️
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
