@extends('layout.main')

@section('title', 'reservasi')

@section('content')

<style>
    .tabel-kita{
      padding-left: 400px;
      padding-right: 200px;
    }
  </style>

<div class="tabel-kita">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Pembayaran
      </h2>
    <div class="flex items-center">
      <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" >
        <div class="flex items-center">
          <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <span>Halaman Pembayaran </span>
        </div>
      </a>
  </div><br>
            <form method="POST" action="{{route('pembayaran.update',$pembayaran['id'])}}" class="forms-sample" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label class="block text-sm" for="reservasi_id">No Reservasi</label>
                    <select class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"  id="reservasi_id" name="reservasi_id" >
                        @foreach ($reservasi as $items)
                        <option value="{{$items['id']}}">
                            {{$items['no_reservasi']}}
                        </option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label class="block text-sm" for="meja_id">No Meja</label>
                    <select class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"  id="meja_id" name="meja_id" >
                        
                        @foreach ($meja as $items)
                        <option value="{{$items['id']}}">
                            {{$items['nomor_meja']}}
                        </option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="metode">Metode Pembayaran</label>
                    <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" id="metode" name="metode" 
                        placeholder="metode">
                    @error('metode')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                      <div class="form-group">
                        <label for="total">Total</label>
                        <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" id="total" name="total" 
                            placeholder="total">
                        @error('total')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                  </div><br>
              
                
                <button type="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Bayar</button>
                <a href="{{url('pembayaran')}}"class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection