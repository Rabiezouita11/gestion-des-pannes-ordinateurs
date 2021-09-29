<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Ajouter une peripherique</h2>
 	<br/>
     @if (session('ajouteee'))
        <div class="alert alert-success">
        {{session('ajouteee')}} au <a href="{{route('peripherique', $peri->id)}}">{{$peri->nom_poste }}</a>

        </div>
        @endif
<form action="{{route('Ajoutperipherique')}}" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 

 	<div class="form-group">
      
        <label>Type</label>
      

        <div>@if ($errors->has('type'))
            <strong style="color: red;">{{ $errors->first('type') }}</strong>
            @endif</div>
     <input class="form-control" type="text" name="type" value="{{old('type') }}"required></br>
     <label>Image</label>
    
     <input type="file"  name="image" class="form-control"><br>
    
    
    
<input type="hidden" name="poste_id" value="{{$peri->id }}">

</div>






</br>
        
    

    </br>

 

 	<a href="{{route('peripherique', $peri->id)}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-success pull-right">Ajouter</button>

</form>
</body>

</html>


