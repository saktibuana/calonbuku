@extends('layouts.main')
@section('main')
<div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
    {{-- start alert success--}}
    @if (Session::get('success'))
    <div id="alert-border-1"
        class="flex p-4 mb-4 text-blue-700 bg-blue-100 border-t-4 border-blue-500 dark:text-blue-400 dark:bg-gray-800"
        role="alert">
        <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3 text-sm font-medium">
            <a href="{{ route('cart.index') }}"
                class="font-semibold underline hover:text-blue-200">{{ Session::get('success') }}</a>
        </div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-blue-300 dark:hover:bg-gray-700"
            data-dismiss-target="#alert-border-1" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    @endif
    {{-- end alert --}}

    {{-- start alert error --}}
    @error('count')
    <div id="alert-border-2"
        class="flex p-4 mb-4 text-red-700 bg-red-100 border-t-4 border-red-500 dark:text-red-400 dark:bg-gray-800"
        role="alert">
        <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3 text-sm font-medium">
            {{ $message }}
        </div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-300 dark:hover:bg-gray-700"
            data-dismiss-target="#alert-border-2" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    @enderror
    {{-- end alert error --}}


    <div class="flex justify-center items-center lg:flex-row flex-col gap-8">
        <!-- Description Div -->

        <form action="{{ route('cart.store') }}" method="POST" class="w-full sm:w-96 md:w-8/12 lg:w-6/12 items-center">
            @csrf
            <a href="{{ url('/') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">

                <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                    <path
                        d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                </svg>
                Continue Shopping
            </a>
            <h2 class="font-semibold lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 dark:text-white mt-4">
                {{ $detail[0]->name }}</h2>

            <div class="flex flex-row justify-between mt-5">
                <div class="value_review">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 font-normal text-base leading-4 text-gray-700 hover:underline hover:text-gray-800 dark:text-white duration-100 cursor-pointer">
                    22 reviews</p>
            </div>

            <p class="font-normal text-base leading-6 text-gray-600  mt-7">{{ $detail[0]->description }}</p>
            <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 mt-6 dark:text-white">
                @currency($detail[0]->price)</p>

            <div class="lg:mt-11 mt-10">
                <div class="flex flex-row justify-between">
                    <p class="font-medium text-base leading-4 text-gray-600 ">Select quantity</p>
                    <div class="flex">
                        <span onclick="minus()"
                            class="focus:outline-none dark:text-white focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer border border-gray-300 border-r-0 w-7 h-7 flex items-center justify-center pb-1">-</span>
                        <input id="counter" aria-label="input" name="count"
                            class="border dark:text-white border-gray-300 dark:bg-transparent h-7 text-center w-14 pb-1"
                            type="text" value="1" />
                        <span onclick="plus()"
                            class="focus:outline-none dark:text-white focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer border border-gray-300 border-l-0 w-7 h-7 flex items-center justify-center pb-1">+</span>
                        <input type="hidden" value="{{ $detail[0]->id }}" name="product_id">
                    </div>
                </div>
                <hr class="bg-gray-200 w-full my-2" />
                <div class="flex flex-row justify-between items-center mt-4">
                    <p class="font-medium text-base leading-4 text-gray-600 ">Dikirim dari</p>
                    <p class="font-medium text-base leading-4 text-blue-600 ">{{ $detail[0]->users->address }}</p>
                </div>
                <hr class="bg-gray-200 w-full mt-4" />
            </div>

            <button type="submit"
                class="focus:outline-none focus:ring-2 hover:bg-indigo-600 focus:ring-offset-2 focus:ring-gray-800 font-medium text-base leading-4 text-white bg-indigo-500 w-full py-5 lg:mt-12 mt-6 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100">Add
                to cart</button>
        </form>

        <!-- Preview Images Div For larger Screen-->

        <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 flex lg:flex-row flex-col lg:gap-5 sm:gap-4 gap-4">
            <div class="w-full lg:w-8/12 bg-gray-100 flex justify-center items-center">
                <img src="{{ asset($detail[0]->cover) }}" />
            </div>
            <div class="w-full lg:w-4/12 grid lg:grid-cols-1 sm:grid-cols-4 grid-cols-2 gap-5">
                <div class="bg-gray-100 flex justify-center items-center">
                    <img src="{{ asset($detail[0]->cover) }}" alt="{{ asset($detail[0]->name) }}" />
                </div>
                <div class="bg-gray-100 flex justify-center items-center">
                    <img src="{{ asset($detail[0]->cover) }}" alt="{{ asset($detail[0]->name) }}" />
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center w-full">
        <div>
            <p class="font-semibold text-xl leading-5 text-gray-800 dark:text-white lg:mt-10 mt-9">Description
            </p>
            <p class="text-normal text-base text-justify leading-6 text-gray-600  mt-4">Lorem ipsum dolor sit amet
                consectetur
                adipisicing elit. Officiis, repudiandae. Vel dolorem dolores ducimus sunt earum reprehenderit labore
                animi temporibus laudantium deserunt debitis nihil nam delectus aliquam fugiat repudiandae accusamus
                ipsa quasi asperiores pariatur eveniet, ipsum accusantium adipisci quisquam? Quae consectetur
                praesentium magnam incidunt reprehenderit! Rerum, beatae! Laudantium ducimus iste excepturi in
                doloremque necessitatibus beatae alias. Dolorum eligendi quibusdam quasi praesentium quos aliquid magni
                modi omnis, molestias tempora pariatur repellendus reiciendis perferendis mollitia in! Neque sequi error
                porro saepe quasi numquam dolores ratione unde inventore laudantium iure sunt minus praesentium magnam
                provident culpa facilis, quo sed vitae aspernatur dignissimos! Deleniti eaque laboriosam rem, impedit
                nemo sequi, quibusdam quo quaerat consequatur tempore error incidunt non dolorum, labore quisquam
                aspernatur odit et.</p>
        </div>
    </div>
</div>
<script>
    function plus() {
        var preValue = document.getElementById("counter").value;
        document.getElementById("counter").value = parseInt(preValue) + 1;
    }

    function minus() {
        var preValue = document.getElementById("counter").value;
        if (parseInt(preValue) != 0) {
            document.getElementById("counter").value = parseInt(preValue) - 1;
        }
    }

    function rotate() {
        document.getElementById("rotateSVG").classList.toggle("rotate-180");
    }

</script>

@endsection
