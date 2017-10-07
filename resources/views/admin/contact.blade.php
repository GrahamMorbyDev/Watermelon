@extends('layouts/admin')
@section('content')
    <div class="row">
        <h1>Contact to site</h1>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td width="10%">ID</td>
                <td width="20%">Name</td>
                <td width="10%">Email</td>
                <td width="50%">Message</td>
                <td width="10%">Created</td>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->message}}</td>
                    <td>{{$contact->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop