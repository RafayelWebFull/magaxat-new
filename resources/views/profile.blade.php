@extends('layouts.home')

@section('main')
    <div class="container">
        <div class="profile">
            <img src="images/profile-background.png" alt="profile-background">
            <div class="row">
                <div class="profile-box col-2 text-center">
                    <div>
                        <img src="images/help-image1.png" alt="profile">
                        <h3>Eduard Gabrielyan</h3>
                        <h5>+374 ( 94 ) 99 58 28</h5>
                        <h5>eduard.gabrielyan@gmail.com</h5>
                    </div>
                </div>
                <div class="nav-tab col-8">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-custom btn active" id="setting-tab" data-bs-toggle="pill"
                                    data-bs-target="#setting" type="button" role="tab" aria-controls="setting"
                                    aria-selected="true">Setting
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-custom btn" id="posts-tab" data-bs-toggle="pill"
                                    data-bs-target="#posts" type="button" role="tab" aria-controls="posts"
                                    aria-selected="false">Posts
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-custom btn" id="appeals-tab" data-bs-toggle="pill"
                                    data-bs-target="#appeals" type="button" role="tab" aria-controls="appeals"
                                    aria-selected="false">Appeals
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-custom btn" id="images-tab" data-bs-toggle="pill"
                                    data-bs-target="#images" type="button" role="tab" aria-controls="images"
                                    aria-selected="false">Images
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-custom btn" id="videos-tab" data-bs-toggle="pill"
                                    data-bs-target="#videos" type="button" role="tab" aria-controls="videos"
                                    aria-selected="false">Video
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-custom btn" id="subscribtions-tab" data-bs-toggle="pill"
                                    data-bs-target="#subscribtions" type="button" role="tab" aria-controls="subscribtions"
                                    aria-selected="false">Subscribtions
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link-custom btn" id="subscribers-tab" data-bs-toggle="pill"
                                    data-bs-target="#subscribers" type="button" role="tab" aria-controls="subscribers"
                                    aria-selected="false">Subscribers
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content d-flex justify-content-between" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="setting" role="tabpanel"
                             aria-labelledby="setting">Settings
                        </div>
                        <div class="tab-pane fade" id="posts" role="tabpanel"
                             aria-labelledby="posts">Posts
                        </div>
                        <div class="tab-pane fade" id="appeals" role="tabpanel"
                             aria-labelledby="appeals">Appeals
                        </div>
                        <div class="tab-pane fade" id="images" role="tabpanel"
                             aria-labelledby="appeals">Images
                        </div>
                        <div class="tab-pane fade" id="videos" role="tabpanel"
                             aria-labelledby="videos">Videos
                        </div>
                        <div class="tab-pane fade" id="subscribtions" role="tabpanel"
                             aria-labelledby="subscribtions">Subscribtions
                        </div>
                        <div class="tab-pane fade" id="subscribers" role="tabpanel"
                             aria-labelledby="subscribers">Subscribers
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
