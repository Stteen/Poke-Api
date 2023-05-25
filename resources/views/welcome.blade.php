<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Poke Random</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
   
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
        @foreach($responses as $response)
        <div class="rounded-lg shadow-lg bg-slate-200 ">

            <div class="flex flex-col md:flex-row">
                <div class="p-4 md:w-1/2">
                  <h2 class="text-xl font-bold text-center">{{$response['id']}}. {{$response['name']}}</h2> 
                    @foreach($response['types'] as $item)
                        <p class="text-lg font-bold text-slate-400">{{ $item['type']['name'] }}</p>
                    @endforeach
                </div>
                <div class="p-4 md:w-1/2">
                    <img class="w-full h-full object-cover" src="{{$response['sprites']['other']['dream_world']['front_default']}}" />
                </div>
            </div>

        </div>
        @endforeach
    </div>     
        
    </body>
   
</html>
