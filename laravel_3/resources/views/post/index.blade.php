@extends('layouts.master')
@section('content')

    <div id="wowslider-container1" class="ws_gestures">
        <div class="ws_images">
            <ul>

                @foreach($post as $item)

                    <li><img src="{{asset('images/post/'.$item->image)}}" alt="{{$item->title}}" title="{{$item
                        ->title}}" >
                    </li>

                @endforeach
            </ul>
        </div>


        <div class="ws_shadow"></div>
    </div>

@endsection
@section('js')
    <script src={{asset('js/script.js')}}></script>
    <script src={{asset('js/wowslider.js')}}></script>
@endsection
