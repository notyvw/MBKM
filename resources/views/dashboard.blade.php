@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('components.navbar')

    <div class="grid grid-cols-12 gap-6 mx-40 my-24">
        <div class="col-span-12 text-center">
            <p class="font-semibold text-2xl">Our Pricing</p>
            <p class="font-medium">Penawaran terbaik untuk anda</p>
        </div>
        <div class="col-span-4 text-center bg-white rounded-xl drop-shadow-xl shadow-lg shadow-gray-400">
            <p class="font-semibold text-2xl uppercase tracking-widest p-6 bg-blue-500 text-white rounded-t-xl">Basic</p>
            <p class="font-semibold text-2xl tracking-wide my-10">20k/Project</p>
            <div class="space-y-2">
                <p>10 Graphic Content</p>
                <p>Design Theme</p>
                <p>5 Photo Product</p>
            </div>
            <button class="py-1 px-4 font-medium  bg-blue-500 rounded-lg my-10 text-white">Get This</button>
        </div>
        <div class="col-span-4 text-center bg-blue-500 rounded-xl drop-shadow-xl shadow-lg shadow-gray-400">
            <p class="font-semibold text-2xl uppercase tracking-widest p-6 bg-white text-blue-500 rounded-t-xl">Standard</p>
            <p class="font-semibold text-2xl tracking-wide my-10 text-white">20k/Project</p>
            <div class="space-y-2 text-white">
                <p>10 Graphic Content</p>
                <p>Design Theme</p>
                <p>5 Photo Product</p>
            </div>
            <button class="py-1 px-4 font-medium  bg-white rounded-lg my-10 text-blue-500">Get This</button>
        </div>
        <div class="col-span-4 text-center bg-white rounded-xl drop-shadow-xl shadow-lg shadow-gray-400">
            <p class="font-semibold text-2xl uppercase tracking-widest p-6 bg-blue-500 text-white rounded-t-xl">Premium</p>
            <p class="font-semibold text-2xl tracking-wide my-10">20k/Project</p>
            <div class="space-y-2">
                <p>10 Graphic Content</p>
                <p>Design Theme</p>
                <p>5 Photo Product</p>
            </div>
            <button class="py-1 px-4 font-medium  bg-blue-500 rounded-lg my-10 text-white">Get This</button>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-8 mx-40 mb-24">
        <div class="col-span-12 text-center">
            <p class="font-semibold text-2xl">Our Service</p>
            <p class="font-medium">Layanan yang kita tawarkan untuk anda</p>
        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 rounded-full mx-auto bg-blue-500 w-fit mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-14 h-14 mx-auto text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                </svg>              
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Photo</p>
            <p class="font-medium mx-10 mb-10">Membuat foto produk anda lebih menarik</p>
        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 rounded-full mx-auto bg-blue-500 w-fit mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-14 h-14 mx-auto text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                </svg>              
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Photo</p>
            <p class="font-medium mx-10 mb-10">Membuat foto produk anda lebih menarik</p>
        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 rounded-full mx-auto bg-blue-500 w-fit mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-14 h-14 mx-auto text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                </svg>              
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Photo</p>
            <p class="font-medium mx-10 mb-10">Membuat foto produk anda lebih menarik</p>
        </div>
        <div class="col-span-2 h-20 ">

        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 rounded-full mx-auto bg-blue-500 w-fit mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-14 h-14 mx-auto text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                </svg>              
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Photo</p>
            <p class="font-medium mx-10 mb-10">Membuat foto produk anda lebih menarik</p>
        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 rounded-full mx-auto bg-blue-500 w-fit mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-14 h-14 mx-auto text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                </svg>              
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Photo</p>
            <p class="font-medium mx-10 mb-10">Membuat foto produk anda lebih menarik</p>
        </div>
        <div class="col-span-2 h-20 ">

        </div>
        
    </div>

@endsection