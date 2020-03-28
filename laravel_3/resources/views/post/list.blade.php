@extends('layouts.master')
@section('content')

    <section class="col-4 offset-2">
        <table class="table table-hover table-success">
            <thead>
            <tr>
                <td>id</td>
                <td>title</td>
                <td>image</td>
                <td>description</td>
                <td>active</td>
                <td>show</td>
                <td>edit</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($post as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td><img src="{{asset('images/post/'.$item->image)}}" name="image" width="50px" height="50px"></td>
                    <td>{{$item->description}}</td>
                    @if($item->active)
                        {
                        <td>{{"فعال"}}</td>
                        }
                    @else{
                    <td>{{"غیرفعال"}}</td> }
                    @endif
                    <td><a href="{{route('post.show',$item->id)}}">show</a></td>
                    <td><a href="{{route('post.edit',$item->id)}}">edit</a></td>
                    <td>
                        <form action={{route("post.destroy",$item->id)}} method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="حذف">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
    <section class="col-8 offset-2 text-center">
        {{$post->links()}}
    </section>
@endsection

