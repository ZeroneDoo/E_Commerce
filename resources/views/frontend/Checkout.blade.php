@extends('main')

@section('content')
<div class="flex sm:flex-row flex-col-reverse gap-5 p-10 mx-auto">
    <form class="sm:w-1/2 w-full m-4 mx-auto p-10 bg-white rounded-xl shadow-xl">
        <p class="text-gray-800 font-medium">Customer information</p>
        <div class="">
            <label class="block text-sm text-gray-00" for="cus_name">Name</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text"
                required="" placeholder="Your Name" aria-label="Name">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="cus_email">Email</label>
            <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                type="text" required="" placeholder="Your Email" aria-label="Email">
        </div>
        <div class="mt-2">
            <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                type="text" required="" placeholder="Street" aria-label="Email">
        </div>
        <div class="mt-2">
            <label class="hidden text-sm block text-gray-600" for="cus_email">City</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                type="text" required="" placeholder="City" aria-label="Email">
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="hidden block text-sm text-gray-600" for="cus_email">Country</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                type="text" required="" placeholder="Country" aria-label="Email">
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="hidden block text-sm text-gray-600" for="cus_email">Zip</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email"
                type="text" required="" placeholder="Zip" aria-label="Email">
        </div>
        <p class="mt-4 text-gray-800 font-medium">Payment information</p>
        <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Card</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name"
                type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
        </div>
        <div class="mt-4 flex gap-4 items-center ">
            <a href="{{ route('home') }}" class="px-6 py-2 text-white bg-primary rounded font-semibold">Back</a>
            <button class="px-4 py-2 font-semibold text-white font-light tracking-wider bg-gray-900 rounded"
                type="submit">Rp {{ $data->harga }}</button>
        </div>
    </form>
    {{-- barang --}}
    <div class="grid sm:w-1/2 w-full bg-white mx-auto rounded-xl shadow-xl grid-cols-1 gap-6 py-5 px-5">
        <div class="col-span-3">
            <div class="flex rounded-xl overflow-clip justify-center">
                <img src="{{ asset('storage/images/'.$data->gambar) }}" alt="">
            </div>
        </div>
    
        <div class="col-span-2 ">
            <h1 class="text-lg font-semibold">
                {{ $data->nama }}
            </h1>
    
            <p class="text-lg font-bold mb-3">
                Rp {{ $data->harga }}
            </p>
    
            <p class="mb-3">
                Jumlah 1
            </p>
        </div>
    </div>
</div>
@endsection