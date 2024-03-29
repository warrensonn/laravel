<?php
/** Welcome view
 *  -------
 *  @file
 *  @brief Company view
 */
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yNlgh0SSBJY0Hcxk3Fv3dozOvzTpjVQQPyo9QF1i9PJZG0W+rTto7bOEXQyteEhD" crossorigin="anonymous">
    </head>
    <body>
        @include('header')
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- <pre>
            <?php // print_r(session()->all()); ?>
        </pre> -->
        <div id="accueil" style="margin-left: 40px" style="font-family:Times New Roman, Times, serif;">
            <h3> Lafleur, le prince des fleurs sur internet </h3>
            <h4>L’entreprise Flowers a été fondée en 2024.</h4>
            Nous vous proposons un large choix de produits pour agrémenter vos bureaux en toutes occasions. <br> <br>
            <b>Nos Coordonnées</b> <br>
            Adresse : …<br>
            Tél : …<br>
            Mail : …<br>
        </div>
    </body>
</html>
