<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="evenementen-list.blade.php" method="post" class="panel panel-body">

    <div class="row">
        <div class="col-md-6">Klantnummer</div>
        <div class="col-md-6"><input type="date" name="Klantnummer" id="Klantnummer"></div>
    </div>
    <div class="row">
        <div class="col-md-6" >Naam</div>
        <div class="col-md-6"><input type="text" name="Naam" id="n-Naam"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Voornaam</div>
        <div class="col-md-6"><input type="text" name="Voornaam" id="Voornaam"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Postcode</div>
        <div class="col-md-6"><input type="text" name="Postcode" id="Postcode"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Gemeente</div>
        <div class="col-md-6"><input type="text" name="Gemeente" id="Gemeente"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Straat</div>
        <div class="col-md-6"><input type="text" name="Straat" id="Straat"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Huisnummer</div>
        <div class="col-md-6"><textarea type="text" name="Huisnummer" id="Huisnummer"></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-6">Telefoonnummer</div>
        <div class="col-md-6"><textarea type="number" name="Telefoonnummer" id="Telefoonnummer"></textarea></div>
    </div> <div class="row">
        <div class="col-md-6">Email</div>
        <div class="col-md-6"><textarea type="date" name="Email" id="Email"></textarea></div>
    </div>

    <input type="submit">

</form>


</body>
</html>