@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <p></p>
                    <a href="./evenements"> <button class="btn btn-primary">Evenement aanmaken</button></a>
                    <a href="./klanten"><button class="btn btn-primary">Klant aanmaken</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
