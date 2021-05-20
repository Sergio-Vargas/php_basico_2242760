<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    legend{
        font-family: 'Pattaya', sans-serif;
        font-size: 40px;
        background-color:#597A90;
    }
    label{
        font-family: 'Abel', sans-serif;
        font-size: 20px;
    }
    body{
        background-color:#F5EEF8;
    }
    .fondo{
        background-color:#597A90;
        margin: 0px 180px;
    }
    #termino::placeholder {
  font-family:'Times New Roman', Times, serif;
  color:gray;
  font-size: 19px;
}
</style>
<body>
    <form
    method="POST"
    action="{{ url("buscar") }}"
    class="form-horizontal">
    @csrf
    <center>
        <fieldset>

        <!-- Form Name -->
        <legend>Busqueda en varios motores</legend>
        </center>
        <div>
        <div class="fondo">
        <br>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="termino">1.Ingrese termino de busqueda</label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="Colombia" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->

    <div class="form-group">
    <label class="col-md-4 control-label" for="motores">2.Seleccione motor de busqueda</label>
    <div class="col-md-4">
    <div class="radio">
      <label for="motores-0">
        <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
        1.<img src="https://cdn.icon-icons.com/icons2/1508/PNG/512/googlechrome_103832.png" width="20px" height="20px">Google
      </label>
      </div>
    <div class="radio">
      <label for="motores-1">
        <input type="radio" name="motores" id="motores-1" value="2">
        2.<img src="https://images.vexels.com/media/users/3/129372/isolated/preview/55be8cae0ff65759d2be67474785eb12-logo-de-bing-by-vexels.png" width="20px" height="20px">Bing
      </label>
      </div>
    <div class="radio">
      <label for="motores-2">
        <input type="radio" name="motores" id="motores-2" value="3">
        3.<img src="https://images.vexels.com/media/users/3/137425/isolated/preview/f2ea1ded4d037633f687ee389a571086-logotipo-del-icono-de-youtube-by-vexels.png" width="20px" height="20px">Youtube
      </label>
      </div>
    <div class="radio">
      <label for="motores-3">
        <input type="radio" name="motores" id="motores-3" value="4">
        4.<img src="https://img2.freepng.es/20180425/jfq/kisspng-cat-dog-animal-track-paw-cat-footprints-5ae0b2847a4132.3287965115246752045008.jpg" width="20px" height="20px">Baidu
      </label>
      </div>
    <div class="radio">
      <label for="motores-4">
        <input type="radio" name="motores" id="motores-4" value="5">
        5.<img src="https://images.vexels.com/media/users/3/137423/isolated/lists/6d269eba75e6a31a39e807e0da2e214e-logotipo-del-icono-de-yahoo.png" width="20px" height="20px">Yahoo!
      </label>
      </div>
    <div class="radio">
      <label for="motores-5">
        <input type="radio" name="motores" id="motores-5" value="6">
        6.<img src="data:image/png;base64,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" width="20px" height="20px">Aol
      </label>
      </div>
    <div class="radio">
      <label for="motores-6">
        <input type="radio" name="motores" id="motores-6" value="7">
        7.<img src="https://yastatic.net/s3/home-static/_/90/9034470dfcb0bea0db29a281007b8a38.png" width="20px" height="20px">Yandex
      </label>
      </div>
    <div class="radio">
      <label for="motores-7">
        <input type="radio" name="motores" id="motores-7" value="8">
        8.<img src="http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c540.png" width="20px" height="20px">Twitch
      </label>
      </div>
    <div class="radio">
      <label for="motores-8">
        <input type="radio" name="motores" id="motores-8" value="9">
        9.<img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" width="20px" height="20px">Twitter
      </label>
      </div>
    <div class="radio">
      <label for="motores-9">
        <input type="radio" name="motores" id="motores-9" value="10">
        10.<img src="data:image/png;base64,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" width="20px" height="20px">Amazon
      </label>
      </div>
    </div>
  </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-success">Buscar</button>
            </div>
          </div>
          <br>
        </div>
        </div>
        </fieldset>
        </form>

</body>
</html>
