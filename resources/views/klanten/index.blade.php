<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evenement indienen</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


<div class="container">
    <h1 class="title">Evenement indienen</h1>
    <hr>
    <form class="form-horizontal" action="/evenements/create" method="POST" >

        {{ csrf_field() }}

        <div class="form-group">
            <label for="Naam" class="col-sm-2 control-label">Naam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Naam" name="Naam" placeholder="Naam">
            </div>
        </div>
        <div class="form-group">
            <label for="Klantnummer" class="col-sm-2 control-label">Klantnummer</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Klantnummer" name="Klantnummer" placeholder="Klantnummer">
            </div>
        </div>
        <div class="form-group">
            <label for="Locatie" class="col-sm-2 control-label">Locatie</label>
            <div class="col-sm-10">
                <input type="text" name="Locatie" class="form-control" id="Locatie" placeholder="Locatie">
            </div>
        </div>
        <div class="form-group">
            <label for="Begin datum" class="col-sm-2 control-label">Begin datum</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="Begindatum" id="Begindatum" placeholder="Begin datum">
            </div>
        </div>
        <div class="form-group">
            <label for="EindDatum" class="col-sm-2 control-label">Eind Datum</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="EindDatum" name="EindDatum" placeholder="EindDatum">
            </div>
        </div>
        <div class="form-group">
            <label for="Description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea name="Description" id="Description" cols="129"  rows="5"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="EvenementKost" class="col-sm-2 control-label">Evenement kost(€)</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Evenementkost" name="Evenementkost" placeholder="Evenement kost">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    @include('layouts.errors')

</div>


</body>
</html>