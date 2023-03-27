<div class="flex shadow-md my-10">
    <div class="w-3/4 bg-white px-10 py-10">
        <div class="flex justify-between border-b pb-8">
            <h1 class="font-semibold text-2xl">Shopping Cart</h1>
            <h2 class="font-semibold text-2xl">{{ $carts[0]->cart_count }} Items</h2>
        </div>

        <div class="flex mt-10 mb-5">
            <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Quantity</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Price</h3>
            <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Total</h3>
        </div>
        @php
        $grandTotal=0;
        @endphp
        @foreach ($carts[0]->cart as $cart)
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
            <div class="flex w-2/5">
                <!-- product -->
                <div class="w-20">
                    <img class="h-24" src="{{ asset($cart->products[0]->cover) }}" alt="">
                </div>
                <div class="flex flex-col justify-between ml-4 flex-grow">
                    <span class="font-bold text-sm">{{ $cart->products[0]->name }}</span>
                    <span class="text-red-500 text-xs">{{ $cart->products[0]->users->name }}</span>
                    <form action="{{ route('cart.destroy',$cart->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</button>
                    </form>
                </div>
            </div>
            <div class="flex justify-center w-1/5">
                <span onclick="kurangCount({{ $cart->id }})"
                    class="hover:bg-slate-400 focus:outline-none minus dark:text-white focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer border border-gray-300 border-r-0 w-7 h-7 flex items-center justify-center pb-1">-</span>
                <input id="counter" aria-label="input"
                    class="border counter dark:text-white border-gray-300 dark:bg-transparent counter h-7 text-center w-14 pb-1"
                    type="text" value="{{ $cart->count }}" readonly />
                <span onclick="tambahCount({{ $cart->id }})"
                    class="hover:bg-slate-400 focus:outline-none plus dark:text-white focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer border border-gray-300 border-l-0 w-7 h-7 flex items-center justify-center pb-1">+</span>
            </div>
            <span class="text-center w-1/5 font-semibold text-sm">@currency($cart->products[0]->price)</span>
            <span class="text-center w-1/5 font-semibold text-sm">@currency($cart->products[0]->price *
                $cart->count)</span>
            @php
            $total=$cart->products[0]->price *
            $cart->count;
            $grandTotal +=$total
            @endphp
        </div>
        @endforeach
        <a href="{{ url('/') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">

            <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                <path
                    d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
            </svg>
            Continue Shopping
        </a>
    </div>
    <div id="summary" class="w-1/4 px-8 py-10">
        <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
        <div class="flex justify-between mt-10 mb-5">
            <span class="font-semibold text-sm uppercase">Items {{ $carts[0]->cart_count }}</span>
            <span class="font-semibold text-sm">@currency($grandTotal)</span>
        </div>
        <div>
            <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
            <select class="block p-2 text-gray-600 w-full text-sm">
                <option>Standard shipping - $10.00</option>
            </select>
        </div>
        <div class="border-t mt-8">
            <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                <span>Total cost</span>
                <span>$600</span>
            </div>
            <a href="{{ route('checkout') }}"
                class="bg-indigo-500 font-semibold inline-block text-center hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</a>
        </div>
    </div>
</div>
<script script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
</script>
<script>
    let token = $("meta[name='csrf-token']").attr("content");

    function tambahCount(idProduk) {
        $.ajax({
            type: "POST",
            url: "tambah_count_cart",
            data: {
                id: idProduk,
                _token: token
            },
            dataType: "JSON",
            success: function (response) {
                $('#load').load('load_cart')
            }
        });
    }

    function kurangCount(idProduk) {
        $.ajax({
            type: "POST",
            url: "kurang_count_cart",
            data: {
                id: idProduk,
                _token: token
            },
            dataType: "JSON",
            success: function (response) {
                $('#load').load('load_cart')
            }
        });
    }

</script>
