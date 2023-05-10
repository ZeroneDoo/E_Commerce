@extends('partials.backend.base')
@section('konten')
    <form method="POST" action="{{ route('put.barang',['id'=>$data->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
            <input type="text" id="nama" name="nama" value="{{ $data->nama }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5" required>
        </div>
        <div class="mb-6">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga Produk</label>
            <input type="number" id="harga" name="harga" value="{{ $data->harga }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5" required autocomplete="off">
        </div>
        <div class="mb-6">
            <label for="stok" class="block mb-2 text-sm font-medium text-gray-900">Stok Tersedia</label>
            <input type="number" id="stok" name="stok" value="{{ $data->stok }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5" required autocomplete="off">
        </div>
        <div class="flex flex-col items-center w-full">
            <label for="dropzone-file" class="block mb-2 text-sm font-medium text-gray-900">Upload Gambar</label>
            
            <label for="dropzone-file" class="overflow-hidden flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6" id="box">
                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
                </div>
                <div id="result" class="w-full flex items-center justify-center"></div>
                {{-- <div id="result"></div> --}}
                <input autocomplete="off" id="dropzone-file" type="file" class="hidden" onchange="readURL(this)" name="gambar" value="{{ $data->gambar }}"/>
            </label>
          </div>
        <div class="mb-6">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Produk</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" required>{{ $data->deskripsi }}</textarea>
        </div>
        
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

@endsection
