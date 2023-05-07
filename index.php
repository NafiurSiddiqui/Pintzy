<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="/icon.png" />

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
      integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
      crossorigin="" />
    <script defer src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
      integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
      crossorigin=""></script>

    <link rel="stylesheet" href="./dist/output.css" />
    <!-- <script type="module" src="/src/js/app.js"></script> -->
    <!-- <script type="module" src="/src/js/login.js"></script> -->
    <title>Pintzy - login</title>
  </head>

  <body class="flex justify-center items-center flex-col">
    <header class="w-full p-2">
      <div><span class="font-semibold desktop:ml-6">Pintzy</span></div>
    </header>
    <section class="flex flex-col items-center w-4/5 h-screen pt-4">
      <div class="flex justify-center">
        <img src="./icon.png" alt="Pintzy Icon" class="" />
      </div>
      <form action="src/api/inc/login.inc.php"
        class="py-6 px-2 border border-gray-300 w-full mt-4 flex justify-center flex-col items-center android-md/2:w-80 tablet-md:w-[26rem] tablet-md:px-6"
        method="POST">
        <div class="flex flex-col my-4 w-full">
          <label class="text-gray-600">Username / email</label>
          <input type="text" name="username" class="border border-gray-400 p-1" />
        </div>
        <div class="flex flex-col w-full">
          <label class="text-gray-600">Passoword</label>
          <input type="password" name="password" class="border border-gray-400 p-1" />
        </div>
        <button
          class="btn-user-input w-full mt-10 mb-3 h-10 rounded font-semibold text-m text-zinc-50  android-md/2:w-52 android-md:rounded-2xl  border-4 border-green-500 bg-green-500  laptop:hover:bg-green-500 laptop:hover:text-zinc-100 transition-colors active:text-zinc-100 "
          type="submit" name="submit">
          Login
        </button>
      </form>

      <!-- create account -->
      <div class="text-center mt-6 text-gray-500">
        Need an account?
        <a href="./src/api/signup-form.php" class="ml-1 font-bold underline text-accentColorHigh">Sign up</a>
      </div>
      <!-- or -->
      <div class="text-center w-full my-1 text-gray-400">
        <span class="inline-block border w-8 border-gray-300"></span>
        or
        <span class="inline-block border w-8 border-gray-300"></span>
      </div>
      <!-- actions -->
      <div class="text-center text-gray-500">
        Explore as a
        <a href="/projects/pintzy/src/html/guest_profile.html"
          class="ml-1 font-bold underline text-accentColorHigh">Guest</a>
      </div>
    </section>
  </body>

</html>
