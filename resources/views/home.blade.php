@extends('app')
@section('body')
    @include('navbar-home')
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <title>Platform Edukasi Mesin</title>
    </head>
    
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/Untitled design.png') }}');">
        <div class="absolute inset-0 bg-blue-950 bg-opacity-50">
        <div class="relative flex items-center justify-center h-full">
          <div class="text-center text-white">
            <div class="overflow-hidden relative h-16">
              <div class="marquee-left-to-right absolute whitespace-nowrap">
                <p class="text-white text-xl font-bold">"Platform edukasi terdepan untuk memahami dan menguasai teknologi mesin, dari dasar hingga tingkat lanjutan."</p>
              </div>
            </div>
            <div class="overflow-hidden relative h-16 mt-8">
              <div class="marquee-right-to-left absolute whitespace-nowrap">
                <p class="text-white text-xl font-bold">"Tingkatkan Pengetahuan Anda Tentang Peralatan Mesin dengan Platform Pendidikan Kami"</p>
              </div>
            </div>
            <div class="overflow-hidden relative h-16 mt-8">
              <div class="marquee-left-to-right absolute whitespace-nowrap">
                <p class="text-white text-xl font-bold">"Menjelajahi Dunia Mesin, Menguasai Masa Depan"</p>
              </div>
            </div>
            <div class="overflow-hidden relative h-16 mt-8">
              <div class="marquee-right-to-left absolute whitespace-nowrap">
                <p class="text-white text-xl font-bold">"Mulailah perjalanan Anda dalam dunia mesin hari ini dan raih masa depan yang cemerlang bersama kami!"</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
            </div>
        </div>
    </body>
    @include('footer')
@endsection
