@extends('partials.backend.base')
@section('konten')
    <button type="button" onclick="location.href = '{{ route('view.barang') }}' "
        class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-6 py-2 mr-2 mb-2">Add
        Items</button>

    <div class="relative">
        <table class="w-[20vw] text-sm text-left text-gray-500 mx-auto">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th scope="col" class="px-8 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Stok
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Gambar
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->nama }}
                        </th>
                        <td class="px-8 py-4">
                            {{ $data->deskripsi }}
                        </td>
                        <td class="px-8 py-4">
                            {{ $data->harga }}
                        </td>
                        <td class="px-8 py-4">
                            {{ $data->stok }}
                        </td>
                        <td class="px-8 py-4">
                            <img src='{{ asset("storage/images/$data->gambar") }}'' alt="{{ $data->gambar }}">
                        </td>
                        <td class="px-8 py-4 flex">
                            <div class="flex">
                                <a href="/edit/{{ $data->id }}">
                                    <button type="button"
                                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2">Edit</button>
                                </a>
                                <a href="/delete/{{ $data->id }}">
                                    <button type="button"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 ">Delete</button>
                                </a>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection

@push('js')
@if (Session::has('msg_info'))
      <script>
        Noticme.any({
            text: "{{ Session::get('msg_info') }}",
            type: "info",
            color: "blue",
            icon: "info",
            timer: 5000
        })
      </script>
      @endif
@endpush

