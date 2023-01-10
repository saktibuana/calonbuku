@extends('layouts.main')
@section('main')
<div class="px-5 py-10">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                Product</label>
            <select id="category_id" name="category_id"
                class="bg-gray-50 border border-gray-300 @error('category_id') border-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
            <input type="text" id="name" name="name"
                class="shadow-sm bg-gray-50 border @error('name') border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                value="{{ @old('name') }}">
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover Book</label>
            <input type="file" id="cover" name="cover"
                class="shadow-sm bg-gray-50 border @error('name') border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                value="{{ @old('cover') }}">
            @error('cover')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input type="text" id="price" name="price"
                class="shadow-sm bg-gray-50 border @error('price') border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                value="{{ @old('price') }}">
            @error('price')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Count</label>
            <input type="text" id="count" name="count"
                class="shadow-sm bg-gray-50 border border-gray-300 @error('count') border-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                value="{{ @old('count') }}">
            @error('count')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="description" name="description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 @error('description')  border-red-500 @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your description here...">{{ @old('description') }}</textarea>
            @error('description')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
            Product</button>
    </form>

</div>
@endsection
