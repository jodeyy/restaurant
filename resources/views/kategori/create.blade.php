@extends('layout.main')

@section('title','tambah kategori')

@section('content')

<style>
    .tabel-kita{
      padding-left: 400px;
      padding-right: 200px;
    }
  </style>
<div class="tabel-kita">
<h2 class="my-6 text-2xl font-semibold text-gray-700">Tambah Kategori</h2>
<br>
<div class ="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{route('kategori.store') }}" class="forms-sample" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="nama_kategori">Kategori</label>
            <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" name="nama_kategori" placeholder="Kategori">
              @error('nama_kategori')
                <span class = "text-danger">{{$message }}</span>
              @enderror
        </div>
      <br>
            <button type="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Submit</button>
              <a href="{{url('kategori')}}" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Batal</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
