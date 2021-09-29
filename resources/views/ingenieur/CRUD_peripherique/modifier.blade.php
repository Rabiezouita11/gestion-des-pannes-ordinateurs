<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
</head>
<body>
<div class="container">

 	<br/>
 	 	<h2 class="text-center">Modifier peripherique</h2>
 	<br/>
	 @if (session('modifiee'))
        <div class="alert alert-success">
        {{session('modifiee')}}  <a href="{{route('peripherique', $periph->poste_id)}}"> Retour</a>

        </div>
        @endif



		<form action="{{route('modifierperipherique')}}" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $periph->id }}">

 	<div class="form-group">
          <label>Type</label>
          
 	 	<input class="form-control" type="text" name="type" value="{{ $periph->type }}" required>
		  <label>Image</label>
		  <br>
		  <td><img src="{{asset('storage/'.$periph->image)}}" alt=" " class="img-fluid"  width="300px" height="300px"></td>

	<input type="file"  name="newphoto" class="form-control"><br>
   
	</div>
     


 	<a href="{{route('peripherique', $periph->poste_id)}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
