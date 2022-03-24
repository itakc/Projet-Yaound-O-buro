<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
@include('main/header')

<div class="container">
  @if($errors->any())
  <div class="mt-3 alert alert-danger">
  @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
  </div>
  @endif

  @if(Session()->has('success'))
  <div class="mt-3 alert alert-success">
    <p>{{ Session()->get('success') }}</p>
  </div>
  @endif
<form method="POST" class="mt-5">
  @csrf
  <div class="row mb-3">
        <div class="col">
            <label for="prenom">Prenom</label>
        <input type="text" name="prenom" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="Last name">
        </div>
  </div>

  <div class="row mb-3">
        <div class="col">
            <label for="prenom">Date</label>
        <input type="date" name="date" class="form-control" placeholder="First name">
        </div>

        <div class="col">
            <label for="heure">Heure</label>
            <input type="time" name="heure" class="form-control">
        </div>
        
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlSelect1">Couvert</label>
    <select name="couvert" class="form-control" id="exampleFormControlSelect1">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <div class="form-group mb-3">
    <label for="exampleFormControlTextarea1">Suggestion</label>
    <textarea name="commentaire" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-marron-clair">Envoyer</button>
</form>
</div>
</body>
</html>



    @include('main/footer')
</body>
</html>