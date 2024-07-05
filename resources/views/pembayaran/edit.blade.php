@extends('layout.main')

@section('title', 'pembayaran')

@section('content')
<style>
    .tabel-kita{
      padding-left: 400px;
      padding-right: 200px;
    }
  </style>

<div class="tabel-kita">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Edit Pembayaran
    </h2>
<br>
    <form method="POST" action="{{route('pembayaran.update', $pembayaran['id'])}}" class="forms-sample" enctype="multipart/form-data">
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
          <label class="block text-sm" for="menu_id">Harga Menu</label>
          <select class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"  id="menu_id" name="menu_id" >
              @foreach ($menu as $items)
              <option value="{{$items['id']}}">
                  {{$items['harga_menu']}}
              </option>
          @endforeach
      </select>
      </div>

            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" id="jumlah" name="jumlah" 
                  placeholder="jumlah">
              @error('jumlah')
                  <span class="text-danger">{{$message}}</span>
              @enderror
        </div><br>
                <button type="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Submit</button>
                <a href="{{url('pembayaran')}}"class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Batal</a>
    </form>
    </div>
    </div>
</div>
@endsection