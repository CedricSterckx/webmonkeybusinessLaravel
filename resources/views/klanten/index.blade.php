<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evenement indienen</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


<div class="container">
    <h1 class="title">Klant toevoegen</h1>
    <hr>
    <form class="form-horizontal" action="/klanten/create" method="POST">

        {{ csrf_field() }}


        <div class="form-group">
            <label for="Klantnummer" class="col-sm-2 control-label">Klantnummer</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Klantnummer" name="Klantnummer" placeholder="Klantnummer">
            </div>
        </div>
        <div class="form-group">
            <label for="Naam" class="col-sm-2 control-label">Naam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Naam" name="Naam" placeholder="Naam">
            </div>
        </div>
        <div class="form-group">
            <label for="Voornaam" class="col-sm-2 control-label">Voornaam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Voornaam" name="Voornaam" placeholder="Voornaam">
            </div>
        </div>

        <div class="form-group">
            <label for="Postcode" class="col-sm-2 control-label">Postcode</label>
            <div class="col-sm-10">
                <input type="text" name="Postcode" class="form-control" id="Postcode" placeholder="Postcode">
            </div>
        </div>
        <div class="form-group">
            <label for="Gemeente" class="col-sm-2 control-label">Gemeente</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Gemeente" name="Gemeente" placeholder="Gemeente">
            </div>
        </div>
        <div class="form-group">
            <label for="Straat" class="col-sm-2 control-label">Straat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Straat" name="Straat" placeholder="Straat">
            </div>
        </div>
        <div class="form-group">
            <label for="Huisnummer" class="col-sm-2 control-label">Huisnummer</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Huisnummer" name="Huisnummer" placeholder="Huisnummer">
            </div>
        </div>
        <div class="form-group">
            <label for="Telefoonnummer" class="col-sm-2 control-label">Telefoonnummer</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Telefoonnummer" name="Telefoonnummer" placeholder="Telefoonnummer">
            </div>
        </div>

        <div class="form-group">
            <label for="Email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="Email" name="Email" placeholder="Email">
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