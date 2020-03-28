@extends('layouts.master')
@section('content')
    <section
        style="width: 800px ; padding: 40px;box-sizing: border-box;text-align: center;
        background-color: aquamarine;margin: 0 auto;box-shadow: 5px 5px 5px lightcyan,-5px -5px 5px lightcyan">
        <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <section class="form-group">
                <input type="text" class="form-control" name="title" value="{{"$post->title"}}"><br>
            </section>
            <section class="form-group">
                <input type="file" class="form-control" name="image" ><br>
                <img src="{{asset('images/post/'.$post->image)}}" height="50px" width="50px">
            </section>
            <section class="form-group">
                <textarea name="description" class="form-control" cols="30"
                          rows="10">{{"$post->description"}}</textarea><br>
            </section>
            <section class="form-group">
                <select class="form-control" name="active" >

                    <option value="1" {{ $post->active == 1 ? 'selected' : '' }}>فعال</option>
                    <option value="0" {{ $post->active == 0 ? 'selected' : '' }}>غیر فعال</option>
                </select>
            </section>
            <input type="submit" value="ویرایش" class="btn btn-success btn-block">

        </form>
    </section>

@endsection
@section('title')
    @parent
    صفحه ویرایش اطلاعات
@endsection

