@extends('layouts.main')

@section('main')
<div class="py-10 px-5 grid grid-cols-1 md:grid-cols-2">
    <form action="#" method="POST" enctype="multipart/form-data" class="md:px-5 lg:px-10">
        <img src="{{ asset(Auth::user()->profile_foto) }}" alt="{{ Auth::user()->profile_foto }}"
            class="w-72 rounded-full border-2 border-solid mx-auto border-slate-700 shadow-xl">
        <input type="file" name="profile_foto" id="profile_foto"
            class="mt-5 bg-gray-800 hover:bg-gray-700 text-slate-200 w-full shadow-md">
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
