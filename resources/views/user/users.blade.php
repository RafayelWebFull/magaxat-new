@extends('layouts.home')

@section('main')
    <div class="container mt-5">
        <div class="search row justify-content-between">
            <div class="col-lg-3 col-2 position-relative">
                <input type="text" class="form-control" placeholder="Search">
                <x-heroicon-o-search class="search-icon"/>
            </div>
            <div class="col-7 ">
                <select name="" id="" class="me-4">
                    <option disabled selected value="">Interest</option>
                    @foreach($interesting_types as $interest)
                        <option value="">{{$interest->name}}</option>
                    @endforeach
                </select>
                <select name="" id="" class="me-4">
                    <option disabled selected value="">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <select name="" id="">
                    <option disabled selected value="">Country</option>
                    @foreach($countries as $country)
                        <option value="">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="users-main mt-5 row">
            <div class="user-card col-6">
                <div class="row">
                <div class="col-9">
                    <div class="row">
                    <div class="col-4">
                        <img src="{{asset('images/profile.png')}}" alt="">
                    </div>
                    <div class="my-auto user-info col-6">
                        <p class="m-0">Eduard Gabrielyan</p>
                        <p class="m-0">@edgabrielian</p>
                    </div>
                    </div>
                </div>
                <div class="col-3 my-auto">
                    <button>Subscribe</button>
                </div>
                </div>
            </div>
            <div class="user-card col-6">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('images/profile.png')}}" alt="">
                            </div>
                            <div class="my-auto user-info col-6">
                                <p class="m-0">Eduard Gabrielyan</p>
                                <p class="m-0">@edgabrielian</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-auto">
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="user-card col-6">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('images/profile.png')}}" alt="">
                            </div>
                            <div class="my-auto user-info col-6">
                                <p class="m-0">Eduard Gabrielyan</p>
                                <p class="m-0">@edgabrielian</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-auto">
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="user-card col-6">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('images/profile.png')}}" alt="">
                            </div>
                            <div class="my-auto user-info col-6">
                                <p class="m-0">Eduard Gabrielyan</p>
                                <p class="m-0">@edgabrielian</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-auto">
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
