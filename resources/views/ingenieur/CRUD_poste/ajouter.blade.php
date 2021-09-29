<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Ajouter une poste</h2>
 	<br/>
     @if (session('ajoutee'))
        <div class="alert alert-success">
        {{session('ajoutee')}} au <a href="{{route('listePoste', $tt->id)}}">{{$tt->nom_labo }}</a>

        </div>
        @endif
<form action="{{route('Ajoutposte')}}" method="post"  >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 

 	<div class="form-group">
      
        <label>Nom poste</label>
      

        <div>@if ($errors->has('nom_poste'))
            <strong style="color: red;">{{ $errors->first('nom_poste') }}</strong>
            @endif</div>
     <input class="form-control" type="text" name="nom_poste" value="{{old('nom_poste') }}"required></br>
    
     <label>Modele</label>
     <div>@if ($errors->has('model'))
            <strong style="color: red;">{{ $errors->first('model') }}</strong>
            @endif</div>
     <input class="form-control" type="text" name="model" value="{{old('model') }}"required></br>
    
<input type="hidden" name="laboratoire_id" value="{{$tt->id }}">

</div>






</br>
        
    

    </br>

 

 	<a href="{{route('listePoste', $tt->id)}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-success pull-right">Ajouter</button>

</form>
</body>

</html>


