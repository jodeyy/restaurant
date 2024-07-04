@extends('layout.main')

@section('title', 'reservasi')

@section('content')

<style>
  .tabel-kita {
    padding-left: 300px;
    padding-right: 200px;
  }
  .table-container {
    overflow-x: auto;
    white-space: nowrap;
  }
</style>

<div class="tabel-kita">
  <h2 class="my-6 text-2xl font-semibold text-gray-700">
    Reservasi Meja
  </h2>
  @can('create', App\kasir::class)
    <a href="{{route('kasir.create')}}" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Tambah Menu</a>
    @endcan
  </div><br>
  <div class="table-container tabel-kita">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
            <th class="text-center">No Kasir</th>
            <th class="text-center">Nama</th>
            <th class="text-center">No Telepon</th>
            <th class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kasir as $item)
        <tr>
          <td class="px-4 py-3 text-center">{{ $item["no_kasir"] }}</td>
          <td class="px-4 py-3 text-center">{{ $item["nama"] }}</td>
          <td class="px-4 py-3 text-center">{{ $item["no_telp"] }}</td>
          <td class="text-center">
            @can('delete', $item)
                <form action="{{route('kasir.destroy', $item["id"])}}" method="post">
                @method('DELETE')
                  @csrf
                  <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-red show_confirm" data-name="{{ $item["nama"] }}">Hapus</button>
              <a href="{{route('kasir.edit', $item["id"])}}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-red">Edit</a>
            </td>
        </form>
        @endcan

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
  <script>
    Swal.fire({
      title: "Good job!",
      text: "{{session('success')}}",
      icon: "success"
    });
  </script>
@endif

<script type="text/javascript">
  $('.show_confirm').click(function(event) {
    let form = $(this).closest("form");
    let name = $(this).data("name");
    event.preventDefault();
    Swal.fire({
      title: "Apakah Kamu Yakin " + name + " Data ini di hapus?",
      text: "Data yang sudah di hapus tidak akan bisa kembali!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Iya saya yakin!"
    })
    .then((willDelete) => {
      if (willDelete.isConfirmed) {
        form.submit();
      }
    });
  });
</script>

@endsection
