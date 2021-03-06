@extends('layouts/admin')
@section('content')
    <div class="row">
        <h1>Show Image Sets</h1>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>Name</td>
                <td>Featured Image</td>
                <td>Created</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($images as $image)
                <tr>
                    <td>{{$image->setname}}</td>
                    <td><img src="{{URL::asset("storage/" . $image->name)}}" alt="" width="100px"></td>
                    <td>{{$image->created_at}}</td>
                    <td>{{$image->updated_at}}</td>
                    <td>
                        <a href="{{URL::asset('/admin/images/set/'.$image->setname)}}" type="submit" class="btn btn-success">View Set</a>
                    </td>
                    <td>
                        <form action="{{URL::asset('/admin/images/set/delete')}}" method="post" class="form-group">
                            <button class="btn btn-warning">Delete</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="setname" value="{{$image->setname}}">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $images->links() }}
    </div>
@stop