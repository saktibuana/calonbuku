<form action="{{ route('transaksi.store') }}" method="POST"
    class="lg:container lg:mx-auto grid grid-cols-1 my-10 lg:grid-cols-2 outline outline-1 outline-slate-200">
    @csrf
    <div class="bg-white px-5 lg:px-14 py-10">
        <h1 class="text-xl text-gray-900 font-semibold mb-10">Shipping Information</h1>
        <div class="mb-6">
            <input type="text" id="userId" name="userId" value="{{ Auth::id() }}" hidden>
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
            <label for="standar" onclick="delivery(`#standar-cek`,`label[for='standar']`,8000)"
                class="outline outline-1 card-delivery cursor-pointer hover:outline-3 outline-gray-400 hover:outline-indigo-500 rounded-lg p-3">
                <div class="flex justify-between">
                    <h2 class="text-gray-900 font-semibold">Standard</h2>
                    <i id="standar-cek" class="hidden delivery-cek text-indigo-500 fa-solid fa-circle-check"></i>
                </div>
                <h4 class="text-gray-400 mb-3">4-5 bussines day</h4>
                <h2 class="text-gray-900 font-semibold">Rp 8.000</h2>
                <input id="standar" type="radio" value="8000" name="delivery_cost"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <input id="delivery_method_standar" type="radio" value="standar" name="delivery_method"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </label>
            <label for="express" onclick="delivery(`#express-cek`,`label[for='express']`,16000)"
                class="outline outline-1 card-delivery cursor-pointer hover:outline-3 outline-gray-400 hover:outline-indigo-500 rounded-lg p-3">
                <div class="flex justify-between">
                    <h2 class="text-gray-900 font-semibold">Express</h2>
                    <i id="express-cek" class="hidden delivery-cek text-indigo-500 fa-solid fa-circle-check"></i>
                </div>
                <h4 class="text-gray-400 mb-3">4-5 bussines day</h4>
                <h2 class="text-gray-900 font-semibold">Rp 16.000</h2>
                <input id="express" type="radio" value="16000" name="delivery_cost"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <input id="delivery_method_express" type="radio" value="express" name="delivery_method"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </label>
        </div>
        <hr class="my-5">
        <h1 class="text-xl text-gray-900 font-semibold my-5">Payment Method</h1>
        <div class="grid grid-cols-3 md:grid-cols-4 gap-5 mb-10">
            <label for="dana" onclick="payment('dana','#dana-cek')"
                class="payment relative flex justify-center items-center hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg  hover:outline-1 hover:outline-indigo-500 outline-gray-300">
                <img src="{{ asset('src/icon/dana.png') }}" alt=""><i id="dana-cek"
                    class="hidden payment-cek absolute top-2 right-2 text-indigo-500 fa-solid fa-circle-check"></i></label>
            <input id="dana" type="radio" value="dana" name="payment_method" class="hidden">
            <label for="ovo" onclick="payment('ovo','#ovo-cek')"
                class="payment relative flex justify-center items-center hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg  hover:outline-1 hover:outline-indigo-500 outline-gray-300">
                <img src="{{ asset('src/icon/ovo.png') }}" alt=""><i id="ovo-cek"
                    class="hidden payment-cek absolute top-2 right-2 text-indigo-500 fa-solid fa-circle-check"></i></label>
            <input id="ovo" type="radio" value="ovo" name="payment_method" class="hidden">
            <label for="shopee" onclick="payment('shopee','#shopee-cek')"
                class="payment relative flex justify-center items-center hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg  hover:outline-1 hover:outline-indigo-500 outline-gray-300">
                <img src="{{ asset('src/icon/shopee.png') }}" alt=""><i id="shopee-cek"
                    class="hidden payment-cek absolute top-2 right-2 text-indigo-500 fa-solid fa-circle-check"></i></label>
            <input id="shopee" type="radio" value="shopee" name="payment_method" class="hidden">
            <label for="gopay" onclick="payment('gopay','#gopay-cek')"
                class="payment relative flex justify-center items-center hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg  hover:outline-1 hover:outline-indigo-500 outline-gray-300">
                <img src="{{ asset('src/icon/gopay.png') }}" alt=""><i id="gopay-cek"
                    class="hidden payment-cek absolute top-2 right-2 text-indigo-500 fa-solid fa-circle-check"></i></label>
            <input id="gopay" type="radio" value="gopay" name="payment_method" class="hidden">
            <label for="qris" onclick="payment('qris','#qris-cek')"
                class="payment relative flex justify-center items-center hover:bg-indigo-100/70 outline outline-1 h-20 px-5 rounded-lg  hover:outline-1 hover:outline-indigo-500 outline-gray-300">
                <img src="{{ asset('src/icon/qris.svg') }}" alt=""><i id="qris-cek"
                    class="hidden payment-cek absolute top-2 right-2 text-indigo-500 fa-solid fa-circle-check"></i></label>
            <input id="qris" type="radio" value="qris" name="payment_method" class="hidden">
        </div>
        <div class="_payment-method hidden">
            <input id="dana" type="radio" value="" name="payment-method" class="w-4 h-4">
            <input id="ovo" type="radio" value="" name="payment-method" class="w-4 h-4">
            <input id="shopee" type="radio" value="" name="payment-method" class="w-4 h-4">
            <input id="gopay" type="radio" value="" name="payment-method" class="w-4 h-4">
        </div>


    </div>
    <div class="bg-indigo-900 text-indigo-300 px-5 lg:px-14 py-10 relative">
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
                    <h1 class="text-sm font-nunitoSans">@currency($cart['price'])</h1>
                    <h1 class="text-sm font-nunitoSans">{{ $cart['qty'] }} Qty</h1>
                    <h1 class="font-nunitoSans">@currency($cart['price'] * $cart['qty'])</h1>
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
                <h1 class="mt-5">Taxes(10%)</h1>
            </div>
            <div class="text-end">
                <input type="text"
                    class="font-nunitoSans outline-none focus:outline-none bg-transparent border-none text-end rp"
                    id="subtotal" value="@currency($subtotal)" readonly>
                <input type="text"
                    class="font-nunitoSans outline-none focus:outline-none bg-transparent border-none text-end rp"
                    id="delivery" value="0" readonly>
                <input type="text"
                    class="font-nunitoSans outline-none focus:outline-none bg-transparent border-none text-end rp"
                    id="taxes" value="0" readonly>

            </div>
        </div>
        <hr class="h-px my-5 bg-gray-200/40 border-0 dark:bg-gray-700">
        <div class="flex my-5 group">
            <input type="text" class="bg-transparent group-hover:border-indigo-500 text-white border-white w-[70%]"
                placeholder="kode promo">
            <button type="button"
                class="bg-white font-semibold group-hover:bg-indigo-500 group-hover:text-white text-indigo-600 w-[30%] py-2 px-5">
                Gunakan</button>
        </div>
        <div class="flex justify-between text-white">
            <h1 class="font-bold">TOTAL</h1>
            <h1 class="font-bold font-nunitoSans" id="grandTotal"></h1>
        </div>
        <div class="flex my-5">
            <button type="submit"
                class="text-indigo-600 bg-white hover:bg-indigo-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-indigo-300 font-bold w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                id="bayar">Bayar</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        // $('#taxes').autoNumeric('init');
        let token = $("meta[name='csrf-token']").attr("content");
        const subtotal = $('#subtotal').val();
        const parsingSubtotal = parseInt(subtotal.replace(/[^0-9]/g, ''));
        const taxes = (parsingSubtotal * 10) / 100
        const parsingTaxes = taxes.toLocaleString('id-ID');
        $('#taxes').val(parsingTaxes)
        grandTotal()
        $('#standar').click(function (e) {
            e.preventDefault();
            $('input[name="delivery_method"]').attr('checked', true);
        });
    });

    function grandTotal() {
        const subtotal = $('#subtotal').val();
        const parsingSubtotal = parseInt(subtotal.replace(/[^0-9]/g, ''));
        const delivery = parseInt($('#delivery').val().replace(/[^0-9]/g, ''));
        const taxes = $('#taxes').val();
        const parsingTaxes = parseInt(taxes.replace(/\./g, ''))
        const grandTotal = parsingSubtotal + delivery + parsingTaxes
        const parsingGrandTotal = grandTotal.toLocaleString("id-ID");
        $('#grandTotal').text(parsingGrandTotal)
    }

    function delivery(ceklis, label, harga) {
        $('label.card-delivery').removeClass('outline-2 outline-indigo-500 bg-indigo-100/70')
        $('.delivery-cek').addClass('hidden')
        $(`${ceklis}`).removeClass('hidden')
        $(`${label}`).addClass('outline-2 outline-indigo-500 bg-indigo-100/70')
        const hargabaru = harga;
        $("#delivery").val(hargabaru.toLocaleString('id-ID'));
        grandTotal()
    }

    function payment(params, params2) {
        $('label.payment').removeClass('outline-2 outline-indigo-500 bg-indigo-100/70')
        $('.payment-cek').addClass('hidden');
        $(`${params2}`).removeClass('hidden')
        $(`label[for="${params}"]`).addClass('outline-2 outline-indigo-500 bg-indigo-100/70')
    }

</script>
