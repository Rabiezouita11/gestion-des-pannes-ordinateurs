<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Modifier laboratoire</h2>
 	<br/>
<form action="{{route('w')}}" method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $labo->id }}">

 	<div class="form-group">
          <label>Nom laboratoire</label>
          
 	 	<input class="form-control" type="text" name="nom_labo" value="{{ $labo->nom_labo }}" required>
 	</div>



 	<a href="{{route('listeLaboratoire')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
