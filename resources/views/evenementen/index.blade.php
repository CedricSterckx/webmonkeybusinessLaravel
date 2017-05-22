<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="evenementen-list.blade.php" method="post" class="panel panel-body">

    <div class="row">
        <div class="col-md-6" >Naam</div>
        <div class="col-md-6"><input type="text" name="Naam" id="n-Naam"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Klantnummer</div>
        <div class="col-md-6"><input type="date" name="Klantnummer" id="Klantnummer"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Locatie</div>
        <div class="col-md-6"><input type="text" name="Locatie" id="Locatie"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Begin datum</div>
        <div class="col-md-6"><input type="date" name="BeginDatum" id="BeginDatum"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Eind datum</div>
        <div class="col-md-6"><input type="date" name="EindDatum" id="EindDatum"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Evenement kost</div>
        <div class="col-md-6"><input type="date" name="Kost" id="Kost"></div>
    </div>
    <div class="row">
        <div class="col-md-6">Description</div>
        <div class="col-md-6"><textarea type="date" name="Description" id="Description"></textarea></div>
    </div>

    <input type="submit">

</form>


</body>
</html>