@extends('layout.main')

@section('title', 'menu')

@section('content')
<style>
    .tabel-kita{
      padding-left: 400px;
      padding-right: 200px;
    }
  </style>
<div class="tabel-kita">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Reservasi
      </h2>
<br>
            <form method="POST" action="{{route('kasir.update',$kasir['id'])}}" class="forms-sample" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="no_kasir">Nomor Kasir </label>
                        <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" id="no_kasir" name="no_kasir" value="{{old('no_kasir') ? old('no_kasir') : $kasir['no_kasir'] }}"
                            placeholder="Masukan Nomor Kasir">
                        @error('no_kasir')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama </label>
                        <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" id="nama" name="nama" value="{{old('nama') ? old('nama') : $kasir['nama'] }}"
                            placeholder="Masukan Nama">
                        @error('nama')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telepon </label>
                        <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" id="no_telp" name="no_telp" value="{{old('no_telp') ? old('no_telp') : $kasir['no_telp'] }}"
                            placeholder="Masukkan Nomor Telepon">
                        @error('no_telp')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                
                <button type="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Submit</button>
                <a href="{{url('reservasi')}}"class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection