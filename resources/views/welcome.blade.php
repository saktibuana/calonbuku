@extends('layouts.main')
@section('main')
<div id="_hero_section" class="_hero_section py-7 px-10 swiper mySwiper">
    <div class="swiper-wrapper">
        <img src="{{ asset('src/dummy/1.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}" class="rounded-md swiper-slide">
        <img src="{{ asset('src/dummy/2.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}" class="rounded-md swiper-slide">
        <img src="{{ asset('src/dummy/3.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}" class="rounded-md swiper-slide">
        <img src="{{ asset('src/dummy/4.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}" class="rounded-md swiper-slide">
        <img src="{{ asset('src/dummy/5.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}" class="rounded-md swiper-slide">
    </div>
    {{-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> --}}
    <div class="swiper-pagination"></div>
</div>
<div id="_category" class="grid grid-cols-4 lg:grid-cols-8 gap-8 md:gap-14 py-10 mx-5">
    <a href="#" class="_card inline-block text-center">
        <img src="{{ asset('src/icon/book.png') }}" alt="imagess">
        <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
    </a>
    <a href="#" class="_card inline-block text-center">
        <img src="{{ asset('src/icon/book-1.png') }}" alt="imagess">
        <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
    </a>
    <a href="#" class="_card inline-block text-center">
        <img src="{{ asset('src/icon/book-2.png') }}" alt="imagess">
        <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
    </a>
    <a href="#" class="_card inline-block text-center">
        <img src="{{ asset('src/icon/science-book.png') }}" alt="imagess">
        <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
    </a>
    <a class="_card inline-block text-center">
        <img src="{{ asset('src/icon/book.png') }}" alt="imagess">
        <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
    </a>
    <a class="_card inline-block text-center">
        <img src="{{ asset('src/icon/book-1.png') }}" alt="imagess">
        <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
    </a>
    <a class="_card inline-block text-center">
        <img src="{{ asset('src/icon/book-2.png') }}" alt="imagess">
        <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
    </a>
    <a class="_card inline-block text-center">
        <img src="{{ asset('src/icon/science-book.png') }}" alt="imagess">
        <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
    </a>
</div>
<hr class="my-3">
<div id="_rekomendasi" class="_rekomendasi">
    <div id="_title_rekomendasi" class="flex justify-between mx-5">
        <h1 class="md:text-3xl font-semibold">Rekomendasi untukmu</h1>
        <a href="#" class="text-xl text-blue-500 font-semibold">Lihat Semua</a>
    </div>
    <div id="_list_rekomendasi" class="py-6 px-5 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-5">
        @foreach ($products as $product)
        <a href="#" id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
            <img src="{{ asset($product->cover) }}" alt="poto">
            <p id="_author" class="text-xs">{{ $product->users->name }}</p>
            <p id="_title" class="text-md">{{ $product->name }}</p>
            <p id="_price" class="text-lg text-blue-500 font-bold">@currency($product->price)</p>
        </a>
        @endforeach
    </div>
</div>
<hr class="my-3">
<div id="_populer" class="_populer">
    <div id="_title_populer" class="flex justify-between mx-5">
        <h1 class="md:text-3xl font-semibold">Buku - buku populer</h1>
        <a href="#" class="text-xl text-blue-500 font-semibold">Lihat Semua</a>
    </div>
    <div id="_list_rekomendasi" class="py-10 px-5 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-5">
        <div id="_card_populer" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
            <img src="{{ asset('src/dummy/buku7.jpg') }}" alt="poto">
            <p id="_author" class="text-xs">Gege Akutami</p>
            <p id="_title" class="text-md">Melangkah</p>
            <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
        </div>
        <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
            <img src="{{ asset('src/dummy/buku5.jpg') }}" alt="poto">
            <p id="_author" class="text-xs">Gege Akutami</p>
            <p id="_title" class="text-md">Melangkah</p>
            <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
        </div>
        <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
            <img src="{{ asset('src/dummy/buku6.jpg') }}" alt="poto">
            <p id="_author" class="text-xs">Gege Akutami</p>
            <p id="_title" class="text-md">Melangkah</p>
            <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
        </div>
        <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
            <img src="{{ asset('src/dummy/buku4.jpg') }}" alt="poto">
            <p id="_author" class="text-xs">Gege Akutami</p>
            <p id="_title" class="text-md">Melangkah</p>
            <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
        </div>
        <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
            <img src="{{ asset('src/dummy/buku5.jpg') }}" alt="poto">
            <p id="_author" class="text-xs">Gege Akutami</p>
            <p id="_title" class="text-md">Melangkah</p>
            <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
        </div>
        <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
            <img src="{{ asset('src/dummy/buku6.jpg') }}" alt="poto">
            <p id="_author" class="text-xs">Gege Akutami</p>
            <p id="_title" class="text-md">Melangkah</p>
            <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
        </div>
    </div>
</div>
<hr class="my-3">
@endsection
