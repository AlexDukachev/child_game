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
                            <h2>Привет, малыш!</h2>
                            <h6>Команда АО «ERG Service» рада приветствовать тебя на нашей викторине!</h6>
                            <p class="text-justify mb-2">Викторина посвящена Всемирному Дню Охраны Окружающей Среды, который отмечается 5 июня.<br/>Мы уверены, что ты очень любознательный и смышленый ребенок!<br/>Участвуя в нашей праздничной викторине ты узнаешь о животных, птицах, растениях, правилах поведения в природе и просто проведешь время с пользой.<br/>Надеемся тебе с нами понравится!</p>
                            <p class="text-justify mb-2"><em><strong>Цель нашей викторины:</strong></em> способствовать формированию знаний о природе (животных, птицах, растениях, правилах поведения в природе), развитию, экологического мышления и творческого воображения.</p>
                            <p><em><strong>Задачи:</strong></em></p>
                        </div>
                        <div class="about-list">
                            <ul>
                                <li>Уточнять, расширять и закреплять знания детей о животных и растениях;</li>
                                <li>Развивать память, любознательность, сообразительность, умение анализировать, обобщать и сравнивать;</li>
                                <li>Воспитывать познавательный интерес, уважение и любовь к родной природе, интерес к жизни животных и растений.</li>
                            </ul>
                        </div>
                        <div class="custom-button">
                            @if (Auth::user())
                            <a href="/question" class="custom-btn">Начать игру</a>
                            @else
                            <a href="/register" class="custom-btn">Принять участие</a>
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