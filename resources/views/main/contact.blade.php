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
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
        <h2>Nous contacter</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-5 ml-7">

    
            <div class="contact" style="">
                <form method="POST" >
                    @csrf
                <p>N'hesitez pas à prendre contact avec nous via ce formulaire</p>

                <div class="d-flex mb-2">
                    <label for="mailo_name"><b>Envoyer un message à: </b></label>
                    <div style="margin-left:5px;">
                        <select name="mailto_name">
                            <option>bollo@bollo.fr</option>
                            <option>Mariam Bollo</option>
                            <option>Joseph Tchooungui Akoa</option>
                            <option selected="selected">O'Buro</option>
                        </select>

                    </div>
                </div>
        
    
                    <div class="d-flex mb-2">
                        <div style="margin-left:5px;">
                            <label for="email"><b>Votre adresse mail:</b></label>
                            <input type="text" name="email" value="moi@example.com" />
                        </div>

                    </div>
    
                <!-- case corps du message-->
                <textarea class="form-control mb-3"  rows="6" name="corps_du_message">
                </textarea>
    
                <input type="submit" class="btn btn-marron-clair" value="Envoyer message" />
                <input type="reset"  class="btn btn-primary"value="Remise à zéro" /></p>
                </form>

            </div>
    
        </div>

        <div class="col-md-5 ml-5">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1990.3946328607083!2d11.499516057793242!3d3.8553529754402898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcfbda1d06019%3A0xe07d3b2893e4568d!2sRestaurant%20N%C2%B01%2C%20Joseph%20Tchooungui%20Akoa%2C%20Yaound%C3%A9%2C%20Cameroun!5e0!3m2!1sfr!2sfr!4v1646319792252!5m2!1sfr!2sfr" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
</body>
</html>



    @include('main/footer')
</body>
</html>