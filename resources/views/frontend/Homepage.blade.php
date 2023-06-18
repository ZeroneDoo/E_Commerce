@extends('Main')

@section('content')
{{-- <h1 class="my-2">Popular on this week</h1> --}}
    <div class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-12 mx-auto w-fit">
        @foreach ($datas as $data)
        <div class="w-[250px] border-2 border-solid border-[#111] rounded-lg h-fit ">
            <div class="w-full shadow-foo border-b-2 rounded-lg border-solid border-[#111]">
                <div class="relative">
                    <span class="material-symbols-outlined border-2 border-solid border-[#111] p-2 rounded-full absolute right-2 top-2 bg-white">favorite</span>
                </div>
                <img src="{{ asset('storage/images/'.$data->gambar) }}" class="rounded-lg w-full" alt="">
            </div>
            <div class="p-3">
                <h2 class="font-semibold text-xl">{{ $data->nama }}</h2>
                {{-- <h3 class="text-base">seller name</h3> --}}
                <svg width="104" height="20" viewBox="0 0 104 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.854 18.3333L6.20817 12.4792L1.6665 8.54167L7.6665 8.02083L9.99984 2.5L12.3332 8.02083L18.3332 8.54167L13.7915 12.4792L15.1457 18.3333L9.99984 15.2292L4.854 18.3333Z" fill="#E32227"/>
                    <path d="M25.854 18.3333L27.2082 12.4792L22.6665 8.54167L28.6665 8.02083L30.9998 2.5L33.3332 8.02083L39.3332 8.54167L34.7915 12.4792L36.1457 18.3333L30.9998 15.2292L25.854 18.3333Z" fill="#E32227"/>
                    <path d="M46.854 18.3333L48.2082 12.4792L43.6665 8.54167L49.6665 8.02083L51.9998 2.5L54.3332 8.02083L60.3332 8.54167L55.7915 12.4792L57.1457 18.3333L51.9998 15.2292L46.854 18.3333Z" fill="#E32227"/>
                    <path d="M102.333 7.7L96.3415 7.18334L93.9998 1.66667L91.6582 7.19167L85.6665 7.7L90.2165 11.6417L88.8498 17.5L93.9998 14.3917L99.1498 17.5L97.7915 11.6417L102.333 7.7ZM93.9998 12.8333L90.8665 14.725L91.6998 11.1583L88.9332 8.75834L92.5832 8.44167L93.9998 5.08334L95.4248 8.45001L99.0748 8.76667L96.3082 11.1667L97.1415 14.7333L93.9998 12.8333Z" fill="#E32227"/>
                    <path d="M72.9998 6.77083V13.2708L75.6248 14.875L74.9373 11.875L77.2498 9.875L74.2082 9.60417L72.9998 6.77083ZM67.854 18.3333L69.2082 12.4792L64.6665 8.54167L70.6665 8.02083L72.9998 2.5L75.3332 8.02083L81.3332 8.54167L76.7915 12.4792L78.1457 18.3333L72.9998 15.2292L67.854 18.3333Z" fill="#E32227"/>
                </svg>
                <div class="flex justify-between items-center">
                    <h2 class="font-semibold text-xl">Rp {{ $data->harga }}</h2>
                    <button class="p-2 pl-4 pr-4 rounded-full bg-[#E32227] text-white border-2 border-solid border-[#111] shadow-foo">Buy Now</button>
                </div>
            </div>
        </div>
        @endforeach
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
