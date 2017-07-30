@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @foreach($users as $user)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Joined</td>
                        <td>Updated</td>
                        <td>Edit/Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            <div class="btn-group">
                            <a data-toggle="modal" data-target="#edit{{$user->id}}" class="btn btn-success">edit</a>
                            <a data-toggle="modal" data-target="#delete{{$user->id}}" class="btn btn-warning">delete</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="modal fade" id="edit{{$user->id}}" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" style="color: black;" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p>Update {{$user->name}}</p>
                            </div>
                            <div class="modal-body" style="color: black;">
                                <form action="{{URL::asset('/update/user')}}" method="post" class="form-group" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <? $address = $user->getAddress()?>
                                    <div class="form-group">
                                        <label for="name-{{$user->id}}">Name</label>
                                        <input type="text" class="form-control" name="name" id="name-{{$user->id}}" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email-{{$user->id}}">Email</label>
                                        <input type="text" class="form-control" name="email" id="email-{{$user->id}}" value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="adr1-{{$user->id}}">Address line 1</label>
                                        <input type="text" class="form-control" name="adr1" id="adr1-{{$user->id}}"
                                               value="{{$address['address_line_one']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="adr2-{{$user->id}}">Address line 2</label>
                                        <input type="text" class="form-control" name="adr2" id="adr2-{{$user->id}}"
                                               value="{{$address['address_line_two']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="adr3-{{$user->id}}">Address line 3</label>
                                        <input type="text" class="form-control" name="adr3" id="adr3-{{$user->id}}"
                                               value="{{$address['address_line_three']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="town-{{$user->id}}">Town</label>
                                        <input type="text" class="form-control" name="town" id="town-{{$user->id}}" value="{{$address['town']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="country-{{$user->id}}">Country</label>
                                        <input type="text" class="form-control" name="country" id="country-{{$user->id}}" value="{{$address['country']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ccode-{{$user->id}}">Country Code</label>
                                        <input type="text" class="form-control" name="ccode" id="ccode-{{$user->id}}"
                                               value="{{$address['country_code']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pcode-{{$user->id}}">Postcode</label>
                                        <input type="text" class="form-control" name="pcode" id="pcode-{{$user->id}}" value="{{$address['postcode']}}">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success pull-right">submit</button>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" style="color: black;" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body" style="color: black;">
                                <form action="{{URL::asset('/delete/user')}}" method="post" class="form-group" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $user->id }}">

                                    <button type="button" class="btn btn-default" data-dismiss="modal">Dismiss</button>
                                    <button class="btn btn-success ">Confirm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{$users->links()}}
@stop