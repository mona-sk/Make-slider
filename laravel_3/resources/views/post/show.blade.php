@extends('layouts.master')
@section('content')

<section class="text-center col-8 offset-2 bg-info p-5">
    <h1>{{$post->title}}</h1>
    <section class="form-group">

        <img src="{{asset('images/post/'.$post->image)}}" height="50px" width="50px">
    </section>

    <h1>        @if($post->active)

            {{"فعال"}}

        @else
            {{"غیرفعال"}}
        @endif</h1>
    <h1>{{$post->description}}</h1>

</section>
<a href="{{route('post.index')}}" class="btn btn-block btn-primary">بازگشت</a>
@endsection

@section('title')
    @parent
نمایش
@endsection

