<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Ajouter un laboratoire</h2>
 	<br/>
<form action="{{route('AjoutLaboratoire')}}" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 

 	<div class="form-group">
      
        <label>Nom laboratoire</label>
        <div>@if ($errors->has('nom_labo'))
            <strong style="color: red;">{{ $errors->first('nom_labo') }}</strong>
            @endif</div>
     <input class="form-control" type="text" name="nom_labo" value="{{old('nom_labo') }}"required></br>
    
    
   
    


</div>






</br>
        
    

    </br>

 

 	<a href="{{route('listeLaboratoire')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-success pull-right">Ajouter</button>

</form>
</body>

</html>


