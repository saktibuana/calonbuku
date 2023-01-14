@extends('layouts.main')

@section('main')
{{-- alerty success --}}
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
        {{ Session::get('success') }}
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
{{-- end alert success --}}
<div class="py-10 px-5 grid grid-cols-1 md:grid-cols-2">
    <form action="{{ route('account.update_profile',Auth::id()) }}" method="POST" enctype="multipart/form-data"
        class="md:px-5 lg:px-10">
        @csrf
        @method('PUT')
        <img src="{{ asset(Auth::user()->profile_foto) }}" alt="{{ Auth::user()->profile_foto }}"
            class="w-72 rounded-full border-2 border-solid mx-auto border-slate-700 shadow-xl">
        <input type="file" name="profile_foto" id="profile_foto"
            class="mt-5 bg-gray-800 @error('profile_foto') border-2 border-red-500 @enderror hover:bg-gray-700 text-slate-200 w-full shadow-md">
        @error('profile_foto')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <button class="bg-gray-800 hover:bg-gray-700 px-4 py-2 text-slate-100 w-full my-3" type="submit">Update Photo
            Profile</button>
    </form>
    <form action="{{ route('account.update',Auth::id()) }}" method="POST" class="md:px-5 lg:px-10">
        @csrf
        @method('PUT')
        <div class="relative z-0 mb-6 w-full group mt-5">
            <input type="email" name="email" id="email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ Auth::user()->email }}" />
            <label for="email"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                address</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="name" id="name"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ Auth::user()->name }}" />
            <label for="name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                Lengkap</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="age" id="age"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ Auth::user()->age }}" />
            <label for="age"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Umur</label>
        </div>
        <div class="relative z-0 mb-6 w-full group grid grid-cols-2">
            @if (Auth::user()->gender == 'male')
            <div class="flex items-center">
                <input checked id="default-radio-1" type="radio" value="male" name="gender"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="female" name="gender"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
            </div>
            @elseif(Auth::user()->gender == 'female')
            <div class="flex items-center">
                <input id="default-radio-1" type="radio" value="male" name="gender"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
            </div>
            <div class="flex items-center">
                <input checked id="default-radio-2" type="radio" value="female" name="gender"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
            </div>
            @else
            <div class="flex items-center">
                <input id="default-radio-1" type="radio" value="male" name="gender"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="female" name="gender"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
            </div>
            @endif
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="contact_number" id="contact_number"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required value="{{ Auth::user()->contact_number }}" />
                <label for="contact_number"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                    number (123-456-7890)</label>
            </div>
        </div>
        <div class="relative z-0 mb-6 w-full">
            <textarea id="message" rows="4" name="address"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Alamat lengkap ....">{{ Auth::user()->address }}</textarea>
        </div>
        <div>
            <button type="submit"
                class="text-white bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                profile</button>
            <button type="button"
                class="text-white bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah
                Password</button>
        </div>
    </form>

</div>
@endsection
