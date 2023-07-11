<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="{{asset('favicon.ico.png')}}">

        <title>Bookme-api</title>

    </head>
    <body >
    <div class="max-w-6xl px-6 mx-auto h-screen flex justify-center flex-col">
            <div class="mb-4 font-bold text-3xl text-teal-600">BookMe</div>
        <div class="border p-5 w-full rounded">
            <div class="space-y-6">
                <div >
                    <a href="{{ url('/api/bookables') }}" class=""><span class="bg-teal-500 px-4 text-sm font-semibold text-teal-50 py-1 rounded">GET</span> api/bookables</a>
                </div>
            </div>
        </div>
        <div class="mt-2 text-gray-500 text-sm">
            <a href="https://abayomi-francis-aluko.netlify.app/" target="_blank" class="underline ">With &#10084; by Abayomi</a>
        </div>
    </div>
    </body>
</html>
