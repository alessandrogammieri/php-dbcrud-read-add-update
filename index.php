<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <title>Bar dello Sport</title>
  </head>
  <body>
    <h1>Il Bancone</h1>
    <div class="container">
      <h2>Aggiungi un Drink</h2>
      <div class="form">
        <div>
            Drink: <input class="number" type="text">
            Marca: <input class="piano" type="text">
        </div>
        <div>
            Prezzo: <input class="letti" type="text">
            Scadenza: <input class="letti" type="text">
        </div>
        <input id="add" type="submit" value="Aggiungi">
      </div>
      <h2>I nostri Drink</h2>
      <div class="listino">
        
      </div> 
    </div>

    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
        <ul class="drink" data-id={{id}}>
            <li>Drink: {{drink_name}} Marca: {{brand}} Prezzo: € {{price}} Scadenza: {{expiration_date}}</li>
            <button id="delete">X</button>
            <button id="update">Modifica drink</button>
        </ul>
    </script>

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
