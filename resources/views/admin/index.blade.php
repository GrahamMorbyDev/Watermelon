@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome To the Admin Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3 notice dark text-center">
                <h1 class="fa fa-user-circle-o"></h1>
               <p>You currently have <?= $users ?> Member's</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100" style="width:<?= $users ?>%">
                        <span class="sr-only"><?= $users ?>% Complete</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 notice light text-center">
                <h1 class="fa fa-play-circle-o"></h1>
                <p>You currently have <?= $videos ?> Video's</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="200" style="width:<?= $videos ?>%">
                        <span class="sr-only"><?= $videos ?>% Complete</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 notice dark text-center">
                <h1 class="fa fa-picture-o "></h1>
                <p>You currently have <?= $images ?> Photo's</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="200" style="width:<?= $images ?>%">
                        <span class="sr-only"><?= $images ?>% Complete</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 notice light text-center">
                <h1 class="fa fa-newspaper-o "></h1>
                <p>You currently have <?= $blogs ?> Blog Post's</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="200" style="width:<?= $blogs ?>%">
                        <span class="sr-only"><?= $blogs ?>% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
            <h2>Appearance</h2>
            <div class="col-md-3">
                <a href="{{URL::asset('/admin/headers')}}" class="btn btn-success">Change page header images</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-success">Remove/Add pages</a>
            </div>
        </div>
    </div>
@stop
