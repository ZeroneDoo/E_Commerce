@extends('Main')

@section('content')
<div class="px-8 py-10 grid grid-cols-4 gap-6">
    <div class="card w-64 bg-base-100 shadow-md">
        <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="flex items-center">
                <p class="font-bold">Rp.1.000.000</p>
                <button class="btn btn-primary text-white">Add To Chart</button>
            </div>
            {{-- <div class="card-actions justify-end mt-5 flex ">
                <button class="btn btn-primary text-white">Buy Now</button>
                <button class="btn btn-primary text-white">Buy Now</button>
            </div> --}}
        </div>
    </div>
</div>
@endsection