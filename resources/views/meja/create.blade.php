@extends('layout.main')

@section('title','tambah meja')

@section('content')

<style>
    .tabel-kita{
      padding-left: 400px;
      padding-right: 200px;
    }
  </style>
<div class="tabel-kita">
<h2 class="my-6 text-2xl font-semibold text-gray-700">
    MEJA
</h2>
<br>
<div class ="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{route('meja.store') }}" class="forms-sample" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="nomor_meja">Nomor Meja</label>
              <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" name="nomor_meja" placeholder="Nomor Meja">
                @error('nomor_meja')
                  <span class = "text-danger">{{$message }}</span>
                @enderror
          </div>
          <div class="form-group">
            <label for="kuantitas_kursi">Kuantitas Kursi</label>
              <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" name="kuantitas_kursi" placeholder="Kuantitas Kursi">
                @error('kuantitas_kursi')
                  <span class = "text-danger">{{$message }}</span>
                    @enderror
          </div>
        <br>
          <div class="form-group">
            <label for="jenis_meja">Jenis Meja</label>
              <input type="text" class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" id="jenis_meja"  name="jenis_meja" placeholder="Jenis Meja">
                @error('jenis_meja')
                  <span class = "text-danger">{{$message }}</span>
                @enderror
          </div>
          <div class="form-group">
            <label for="status_meja">Status</label>
              <select class="block w-full mt-1 text-sm form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" name="status_meja" placeholder="Status">
                <option>Available</option>
                <option>Reserved</option>
                <option>Closed</option>
              </select>
          </div>
          <button type="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Submit</button>
            <a href="{{url('meja')}}" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Batal</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
