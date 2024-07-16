@extends('app')
@section('body')
    @include('navbar-home')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes marquee-left-to-right {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        @keyframes marquee-right-to-left {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .marquee-left-to-right {
            animation: marquee-left-to-right 10s linear infinite;
        }
        .marquee-right-to-left {
            animation: marquee-right-to-left 10s linear infinite;
        }
    </style>
    <title>Platform Edukasi Mesin</title>
</head>
<body class="bg-cover" style="background-image: url('path_to_your_image.jpg');">
    <div class="container mx-auto py-20">
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
        <div class="mt-10 text-center">
            <a href="{{ url('about') }}" class="inline-block px-8 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg">About Us</a>
        </div>
    </div>
</body>
@endsection