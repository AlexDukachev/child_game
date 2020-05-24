@extends('layouts.app2')

@section('content')
@foreach ($question as $item)
    <div class="questions">
        <div class="question_single_image">
            <figure>
                <div class="question_single_image_wrapper">
                    <span>{{ $item->question }}</span>
                </div>
            </figure>
        </div>
        <div class="q-element">
            <div class="q-box" style="background-color:#ffffff; " data-hover="0fbaf4">
                <div class="content">
                    @if (file_exists(public_path($item->A)))
                    <img src="{{ $item->A }}" style="max-height: 172px" class="img-fluid">
                    @else
                    <h3 class="title">{{ $item->A }}</h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="q-element">
            <div class="q-box" style="background-color:#ffffff; " data-hover="f96a9a">
                <div class="content">
                    @if (file_exists(public_path($item->B)))
                    <img src="{{ $item->B }}" style="max-height: 172px" class="img-fluid">
                    @else
                    <h3 class="title">{{ $item->B }}</h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="q-element">
            <div class="q-box" style="background-color:#ffffff; " data-hover="f9b001">
                <div class="content">
                    @if (file_exists(public_path($item->C)))
                    <img src="{{ $item->C }}" style="max-height: 172px" class="img-fluid">
                    @else
                    <h3 class="title">{{ $item->C }}</h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="q-element">
            <div class="q-box" style="background-color:#ffffff; " data-hover="43cd66">
                <div class="content">
                    @if (file_exists(public_path($item->D)))
                    <img src="{{ $item->D }}" style="max-height: 172px" class="img-fluid">
                    @else
                    <h3 class="title">{{ $item->D }}</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection