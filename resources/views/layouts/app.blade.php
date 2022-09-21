<!--

=========================================================
* Notus JS - v1.1.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../../assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="../../assets/styles/style.css" />
    <title>Dashboard | Notus JS by Creative Tim</title>
    
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
  </head>

  <body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
     @livewire('sidebar')
      <div class="relative md:ml-64 bg-white">
       @livewire('navbar')
        <!-- Header -->
        <div class="relative bg-slate-700 md:pt-1 pb-20 pt-12">
          
        
        </div>
        <div class="px-4 md:px-10 mx-auto w-full">
          <div>
            <!-- Card stats -->
            {{$slot}}
            
           
          </div>
        </div>
        
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
       @stack('modals')
      @livewireScripts
  </body>
</html>
