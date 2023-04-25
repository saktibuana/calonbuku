<div class="bg-white px-5 lg:px-14 py-10">
    <h1 class="text-xl text-gray-900 font-semibold mb-10">Shipping Information</h1>
    <form>
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Lengkap</label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="john" value="{{ Auth::user()->name }}" readonly>
        </div>
        <div class="mb-6">
            <label for="noHandphone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                Handphone</label>
            <input type="text" id="noHandphone" name="noHandphone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="0821 7865 0987" value="{{ Auth::user()->contact_number }}">
        </div>
        <div class="mb-6">
            <label for="alamatLengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                Pengiriman</label>
            <textarea id="alamatLengkap" rows="4" name="alamatLengkap"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Jl.roket no 23">{{ Auth::user()->address }}</textarea>
        </div>
        <hr class="my-5">
        <h1 class="text-xl text-gray-900 font-semibold my-5">Delivery Method</h1>
        <div class="grid grid-cols-2 gap-5 mb-5">
            <label for="standar"
                class="outline outline-1 card-delivery cursor-pointer hover:outline-3 outline-gray-400 hover:outline-indigo-500 rounded-lg p-3">
                <div class="flex justify-between">
                    <h2 class="text-gray-900 font-semibold">Standard</h2>
                    <i id="standar-cek" class="hidden text-indigo-500 fa-solid fa-circle-check"></i>
                </div>
                <h4 class="text-gray-400 mb-3">4-5 bussines day</h4>
                <h2 class="text-gray-900 font-semibold">Rp 8.000</h2>
            </label>
            <label for="express"
                class="outline outline-1 card-delivery cursor-pointer hover:outline-3 outline-gray-400 hover:outline-indigo-500 rounded-lg p-3">
                <div class="flex justify-between">
                    <h2 class="text-gray-900 font-semibold">Express</h2>
                    <i id="express-cek" class="hidden text-indigo-500 fa-solid fa-circle-check"></i>
                </div>
                <h4 class="text-gray-400 mb-3">4-5 bussines day</h4>
                <h2 class="text-gray-900 font-semibold">Rp 16.000</h2>
            </label>
        </div>
        <div class="_readio_button hidden">
            <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                <input id="standar" type="radio" value="8000" name="delivery"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                <input id="express" type="radio" value="16000" name="delivery"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
        </div>
        <hr class="my-5">
        <h1 class="text-xl text-gray-900 font-semibold my-5">Payment Method</h1>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mb-10 content-center">
            <button
                class=" hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg block content-center outline-gray-300">
                <img src="{{ asset('src/icon/dana.png') }}" alt=""></button>
            <button
                class="hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg inline-block  content-center outline-gray-300">
                <img src="{{ asset('src/icon/ovo.png') }}" alt=""></button>
            <button
                class="hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg block content-center outline-gray-300">
                <img src="{{ asset('src/icon/shopee.png') }}" alt=""></button>
            <button
                class="hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg block content-center outline-gray-300">
                <img src="{{ asset('src/icon/gopay.png') }}" alt=""></button>
        </div>
        <button type="submit"
            class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>
<div class="bg-indigo-900 text-indigo-300 px-5 lg:px-14 py-10">
    <h1 class="text-lg text-indigo-300 font-semibold mt-5">Order Summery</h1>
    {{-- <h1 class="text-white font-bold text-2xl">Rp 200.000</h1> --}}
    <div class="mt-5">
        @php
        $subtotal=0;
        @endphp
        @foreach ($data as $cart)
        <div class="flex justify-between">
            <div class="_left flex">
                <img src="{{ asset($cart['cover']) }}" class="w-16 bg-white outline outline-white">
                <div class="ml-4 flex flex-col justify-start">
                    <h3 class="text-indigo-50 text-lg">{{ $cart['title'] }}</h3>
                    <h4 class="text-sm">{{ $cart['penulis'] }}</h4>
                    <h3 class="text-sm">100Halaman</h3>
                </div>
            </div>
            <div class="_right text-end">
                <h1 class="text-sm">@currency($cart['price'])</h1>
                <h1 class="text-sm">{{ $cart['qty'] }} Qty</h1>
                <h1>@currency($cart['price'] * $cart['qty'])</h1>
            </div>
        </div>
        <hr class="h-px my-5 bg-gray-200/40 border-0 dark:bg-gray-700">
        @php
        $subtotal+=$cart['price'] * $cart['qty'];
        @endphp
        @endforeach
    </div>
    <div class="flex justify-between">
        <div class="text-start">
            <h1>Subtotal</h1>
            <h1 class="mt-5">Shipping</h1>
            <h1 class="mt-5">Taxes</h1>
        </div>
        <div class="text-end">
            <input type="text" class="outline-none focus:outline-none bg-transparent border-none text-end rp"
                id="subtotal" value="{{ $subtotal }}" readonly>
            <input type="text" class="outline-none focus:outline-none bg-transparent border-none text-end rp"
                id="delivery" readonly>
            <input type="text" class="outline-none focus:outline-none bg-transparent border-none text-end rp" id="taxes"
                readonly>

        </div>
    </div>
    <hr class="h-px my-5 bg-gray-200/40 border-0 dark:bg-gray-700">
    <div class="flex justify-between text-white">
        <h1 class="font-bold">TOTAL</h1>
        <h1 class="font-bold">Rp 217.000</h1>
    </div>
</div>
<script src="{{ asset('src/autoNumeric.js') }}"></script>
<script>
    $(document).ready(function () {
        let token = $("meta[name='csrf-token']").attr("content");
        $('#standar').click(function (e) {
            e.preventDefault();
            let hargaDelivery = $("input[name='delivery']:checked").val()
            $("#standar-cek").removeClass('hidden')
            $("label[for='express']").removeClass('outline-2 outline-indigo-500')
            $("label[for='standar']").addClass('outline-2 outline-indigo-500')
            $("#express-cek").addClass('hidden')
            $("#delivery").val(hargaDelivery);
        });
        $('#express').click(function (e) {
            e.preventDefault();
            let hargaDelivery = $("input[name='delivery']:checked").val()
            $("#standar-cek").addClass('hidden')
            $("label[for='standar']").removeClass('outline-2 outline-indigo-500')
            $("label[for='express']").addClass('outline-2 outline-indigo-500')
            $("#express-cek").removeClass('hidden')
            $("#delivery").val(hargaDelivery);
        });
        //========( format rupiah )========>
    });

</script>
