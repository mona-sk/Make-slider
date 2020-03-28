@extends('layouts.master')
@section('content')
    <section
        style="width: 800px ; padding: 40px;box-sizing: border-box;text-align: center;
        background-color: aquamarine;margin: 0 auto;box-shadow: 5px 5px 5px lightcyan,-5px -5px 5px lightcyan">
        <form action="{{url('post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <section class="form-group">
                <input type="text" class="form-control" name="title"><br>
            </section>
            <section class="form-group">
                <input type="file" class="form-control" name="image"><br>

            </section>
            <section class="form-group">
                <textarea name="description" class="form-control" cols="30" rows="10"></textarea><br>
            </section>
            <section class="form-group">
                <select class="form-control" name="active">
                    <option value="1">فعال</option>
                    <option value="0">غیر فعال</option>
                </select>
            </section>
            <input type="submit" value="ثبت" class="btn btn-success btn-block">

        </form>
    </section>



@endsection
@section('title')
    @parent
    صفحه ثبت اطلاعات
@endsection

