@extends('main')

@section('content')
<div class="container mx-auto p-5 ">
    <div class="p-5 border border-gray-200 rounded-lg">
        <h1 class="text-3xl mb-3">My Cart Items</h1>
        <div class="bg-white rounded-lg p-3">
            <div>
            {{-- cart item --}}
            <div class="flex gap-4 hover:bg-gray-100 cursor-pointer p-5 rounded">
                <img src="{{ asset('images/img.png') }}" alt="" class="w-36" onclick="">
                <div class="flex flex-col justify-between w-full">
                    <div class="flex sm:flex-row flex-col justify-between mb-3 gap-2" onclick="">
                        <h3>Orang Hitam</h3>
                        <span class="text-lg font-semibold">
                            Rp 2.000.000
                        </span>
                    </div>
                    <div class="flex sm:flex-row flex-col justify-between">
                        <div class="flex sm:flex-row flex-col sm:items-center items-start">
                            Jumlah :
                            <div class="flex items-center gap-2 sm:ml-3 py-1">
                                <button class="bg-primary text-white rounded w-8 h-8 font-bold" name="btnKurang">-</button>
                                <input class="outline outline-1 rounded outline-gray-200 w-8 h-8 text-center" type="number" value="1" name="inputCount">
                                <button class="bg-primary text-white rounded w-8 h-8 font-bold"  name="btnTambah">+</button>     
                            </div>
                        </div>
                        <a href="" class="text-primary hover:text-primary-500">Remove </a>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            {{-- /cart item --}}
            
            {{-- cart item --}}
            {{-- /cart item --}}
            </div>
            <div class="border-t border-gray-300 mt-5 pt-5">
                <div class="flex mb-5 justify-between">
                    <span class="font-bold">Subtotal</span>
                    
                    <span class="text-lg font-bold">Rp 2.000.000</span>
                </div>
                <div>
                    <p>Shipping and tax will be applied on checkout</p>
                </div>

                <button class="btn-primary w-full mt-3">Checkout</button>
            </div>
        </div>
    </div>
</div>
@endsection