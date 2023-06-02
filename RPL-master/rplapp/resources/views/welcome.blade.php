<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vanguard Solution Indonesia</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- TailWind -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
    <div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-h-full max-w-sm rounded-md bg-gray-500 py-8 px-4">
      <form class=" shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="block text-center mb-6">
            <h1 class="font-bold font-sans text-white">
                Vanguad Solution <br>
                Indonesia
            </h1>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-bold text-white mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform focus:scale-110 hover:scale-110"
            id="username" autocomplete="off" type="text" placeholder="Username">
        </div>
        <div class="mb-6">
          <label class="block text-sm text-white font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform focus:scale-110 hover:scale-110"
            id="password" type="password" placeholder="Password">
        </div>
        <div class="flex justify-center items-center">
          <button
            class="items-center w-full bg-gray-700 hover:bg-gray-200 hover:text-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform hover:scale-110"
            type="button">
            Sign In
          </button>
          
        </div>
      </form>
      <p class="text-center text-xs text-white">
        &copy; 2023 Company Name. All rights reserved.
      </p>
    </div>
  </div>
    </body>
</html>
