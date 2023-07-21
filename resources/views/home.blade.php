<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<style>
    footer{
        background-color:black
    }
</style>

<body>
    
   @include('partials.header')
    <div class="container">

        <main></main>
    </div>
    <footer>
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled d-flex align-items-center h-100 justify-content-around">
                    <a href="/"><li><img class="w-50" src="{{Vite::asset('./resources/images/buy-comics-digital-comics.png')}}" alt=""> <span></span></li></a>
                    <a href="/"><li><img class="w-50" src="{{Vite::asset('./resources/images/buy-comics-merchandise.png')}}" alt=""> <span></span></li></a>
                    <a href="/"><li><img class="w-50" src="{{Vite::asset('./resources/images/buy-comics-shop-locator.png')}}" alt=""> <span></span></li></a>
                    <a href="/"><li><img class="w-50" src="{{Vite::asset('./resources/images/buy-comics-subscriptions.png')}}" alt=""> <span></span></li></a>
                    <a href="/"><li class="text-center"><img class="w-50" src="{{Vite::asset('./resources/images/buy-dc-power-visa.png')}}" alt=""> <span></span></li></a>
                </ul>
            </div>
        </div>
    </footer>

  
</body>

</html>