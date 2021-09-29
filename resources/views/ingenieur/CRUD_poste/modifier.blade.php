<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Modifier poste</h2>
 	<br/>
<form action="{{route('modifierposte')}}" method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $pos->id }}">

 	<div class="form-group">
          <label>Nom poste</label>
          
 	 	<input class="form-control" type="text" name="nom_poste" value="{{ $pos->nom_poste }}" required>
 	</div>
     <div class="form-group">
          <label>Modele</label>
          
 	 	<input class="form-control" type="text" name="model" value="{{ $pos->model }}" required>
 	</div>


 	<a href="{{route('listeLaboratoire')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
