@extends('layouts/admin')
@section('content')
    <div class="row">
        <h1>Show Videos</h1>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Featured Image</td>
                <td>Created</td>
                <td>Updated</td>
                <td>Edit/Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($videos as $video)
                <tr>
            <td>{{$video->id}}</td>
            <td>{{$video->title}}</td>
                <td><img src="{{URL::asset("storage/" . $video->featuredimage)}}" alt="" width="100px"></td>
                <td>{{$video->created_at}}</td>
                <td>{{$video->updated_at}}</td>
                <td><a data-toggle="modal" data-target="#" class="btn btn-success">edit</a>
                    <form action="{{URL::asset('/admin/deletevideo/')}}" method="post" class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{$video->id}}">
                    <button  class="btn btn-warning">delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $videos->links() }}
    </div>
@stop