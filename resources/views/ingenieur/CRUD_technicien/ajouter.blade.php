<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Ajouter un Technicien</h2>
 	<br/>
<form action="{{route('AjoutTechnicien')}}" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 

 	<div class="form-group">
      
        <label>Nom</label>
        <div>@if ($errors->has('name'))
            <strong style="color: red;">{{ $errors->first('name') }}</strong>
            @endif</div>
     <input class="form-control" type="text" name="name" value="{{old('name') }}"required></br>
     <label>Role</label>
     <input class="form-control" type="text" name="role" value="technicien" readonly></br>
     <label>email</label>
     <div>@if ($errors->has('email'))
            <strong style="color: red;">{{ $errors->first('email') }}</strong>
            @endif</div>
     <input class="form-control" type="email" name="email" value="{{old('email') }}" required></br>
   
     <label>Mot de passe</label>
     <div>@if ($errors->has('password'))
            <strong style="color: red;">{{ $errors->first('password') }}</strong>
            @endif</div>
     <input class="form-control" type="password" name="password"  required> <br>
   


</div>


     <div class="form-group d-flex flex-column" >
        <label>photo</label>

        <input class="form-control" type="file" name="image"  ></br>


</div>
</br>
        
    

    </br>

 

 	<a href="{{route('listeTechnicien')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-success pull-right">Ajouter</button>

</form>
</body>

</html>


