@extends('layouts.main')
@section('main')

<div class="lg:container lg:mx-auto grid grid-cols-1 my-10 lg:grid-cols-2 outline outline-1 outline-slate-200">
    <div class="bg-white px-10 py-10">
        <h1 class="text-xl text-gray-900 font-semibold mb-10">Shipping Information</h1>
        <form>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Lengkap</label>
                <input type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="john" required>
            </div>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                    Handphone</label>
                <input type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="0821 7865 0987" required>
            </div>
            <div class="mb-6">
                <label for="alamatLengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                    Lengkap</label>
                <textarea id="alamatLengkap" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Jl.roket no 23"></textarea>
            </div>
            <hr class="my-5">
            <h1 class="text-xl text-gray-900 font-semibold my-5">Delivery Method</h1>
            <div class="grid grid-cols-2 gap-5 mb-5">
                <div onclick="delivery('halooo')"
                    class="outline card-delivery cursor-pointer hover:outline-3 outline-gray-400 hover:outline-indigo-500 rounded-lg p-3">
                    <div class="flex justify-between">
                        <h2 class="text-gray-900 font-semibold">Standard</h2>
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <h4 class="text-gray-400 mb-3">4-5 bussines day</h4>
                    <h2 class="text-gray-900 font-semibold">Rp 8.000</h2>
                </div>
                <div
                    class="outline outline-1 card-delivery cursor-pointer hover:outline-3 outline-gray-400 hover:outline-indigo-500 rounded-lg p-3">
                    <div class="flex justify-between">
                        <h2 class="text-gray-900 font-semibold">Express</h2>
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <h4 class="text-gray-400 mb-3">4-5 bussines day</h4>
                    <h2 class="text-gray-900 font-semibold">Rp 16.000</h2>
                </div>
            </div>
            <hr class="my-5">
            <h1 class="text-xl text-gray-900 font-semibold my-5">Payment Method</h1>
            <div class="grid grid-cols-4 gap-5 mb-10">
                <button
                    class="hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg block content-center outline-gray-300"><img
                        src="{{ asset('src/icon/dana.png') }}" alt=""></button>
                <button
                    class="hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg block content-center outline-gray-300"><img
                        src="{{ asset('src/icon/ovo.png') }}" alt=""></button>
                <button
                    class="hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg block content-center outline-gray-300"><img
                        src="{{ asset('src/icon/shopee.png') }}" alt=""></button>
                <button
                    class="hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg block content-center outline-gray-300"><img
                        src="{{ asset('src/icon/gopay.png') }}" alt=""></button>
            </div>
            <button type="submit"
                class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
    <div class="bg-indigo-900 text-indigo-300 px-10 py-10">
        <h1 class="text-xl text-indigo-300 font-semibold my-5">Amount due</h1>
    </div>
</div>
{{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}
<script>
    function delivery(param) {
        let el = document.querySelector('.card-delivery');
        let cek = el.firstElementChild.lastElementChild
        cek.classList.add('text-indigo-500')
        console.log(cek)
    }

</script>
@endsection
