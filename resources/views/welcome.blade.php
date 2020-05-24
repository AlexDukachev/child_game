@extends('layouts.app')

@section('content')
    <section class="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('flash::message')
                </div>
                <div class="col-lg-6">
                    <div class="single-about">
                        <div class="section-title">
                            <h6>about us</h6>
                            <h2>welcome to the learning leader baby care</h2>
                            <img src="https://templates.envytheme.com/humpty/default/assets/img/title-border.png" alt="Image">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="about-list">
                            <ul>
                                <li>
                                    Supporting the child Personality
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </li>

                                <li>
                                    Professional &amp; Qualified Teacher
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </li>

                                <li>
                                    Indoor/Outdoor Games For Kids
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </li>

                                <li>
                                    Best learning School For Kids
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </li>
                            </ul>
                        </div>
                        <div class="custom-button">
                            @if (session('uid'))
                            <a href="/question" class="custom-btn">Приступить к заданию</a>
                            @else
                            <a data-toggle="modal" data-target="#signupModal" href="#" class="custom-btn">discover more</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-about-bg item-bg">
                        <div class="about-img-cartwrap">
                            <div class="image">
                                <img src="{{ asset('build/img/about-bg.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape1">
            <img src="{{ asset('build/img/shape/shape1.png') }}" alt="Image">
        </div>
        <div class="shape2">
            <img src="{{ asset('build/img/shape/shape2.png') }}" alt="Image">
        </div>
        <div class="shape3">
            <img src="{{ asset('build/img/shape/shape3.png') }}" alt="Image">
        </div>
        <div class="shape4">
            <img src="{{ asset('build/img/shape/shape4.png') }}" alt="Image">
        </div>
        <div class="bg-shape">
            <img src="{{ asset('build/img/shape/bg-shape2.png') }}" alt="Shape">
        </div>
    </section>
@endsection