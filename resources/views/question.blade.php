@extends('layouts.app2')

@section('content')
<input type="hidden" id="question" value="{{ $question->currentPage() }}">
<input type="hidden" id="last-page" value="{{ $question->lastPage() }}">
<input type="hidden" id="next-page" value="{{ $question->currentPage() + 1 }}">
@foreach ($question as $item)
    <div class="questions">
        <div class="question_single_image">
            <figure>
                <div class="question_single_image_wrapper">
                    <span>{{ $item->question }}</span>
                </div>
            </figure>
        </div>
        <div class="q-element" id="A">
            @if (file_exists(public_path($item->A)))
            <div class="q-box" style="background-color:#ffffff; " data-hover="0fbaf4">
                <img src="{{ $item->A }}" style="max-height: 172px" class="img-fluid">
            </div>
            @else
            <div class="q-box d-flex align-items-center" style="background-color:#ffffff; " data-hover="0fbaf4">
                <h3 class="title mx-auto mb-0">{{ $item->A }}</h3>
            </div>
            @endif
        </div>
        <div class="q-element" id="B">
            @if (file_exists(public_path($item->B)))
            <div class="q-box" style="background-color:#ffffff; " data-hover="f96a9a">
                <img src="{{ $item->B }}" style="max-height: 172px" class="img-fluid">
            </div>
            @else
            <div class="q-box d-flex align-items-center" style="background-color:#ffffff; " data-hover="f96a9a">
                <h3 class="title mx-auto mb-0">{{ $item->B }}</h3>
            </div>
            @endif
        </div>
        <div class="q-element" id="C">
            @if (file_exists(public_path($item->C)))
            <div class="q-box" style="background-color:#ffffff;" data-hover="f9b001">
                <img src="{{ $item->C }}" style="max-height: 172px" class="img-fluid">
            </div>
            @else
            <div class="q-box d-flex align-items-center" style="background-color:#ffffff; " data-hover="f9b001">
                <h3 class="title mx-auto mb-0">{{ $item->C }}</h3>
            </div>
            @endif
        </div>
        <div class="q-element" id="D">
            @if (file_exists(public_path($item->D)))
            <div class="q-box" style="background-color:#ffffff;" data-hover="C43AFF">
                <img src="{{ $item->D }}" style="max-height: 172px" class="img-fluid">
            </div>
            @else
            <div class="q-box d-flex align-items-center" style="background-color:#ffffff; " data-hover="C43AFF">
                <h3 class="title mx-auto mb-0">{{ $item->D }}</h3>
            </div>
            @endif
        </div>
    </div>
@endforeach
@endsection

@section('css')
<style>
    html {
        background-color: #9ae1ff;
    }
</style>
@endsection