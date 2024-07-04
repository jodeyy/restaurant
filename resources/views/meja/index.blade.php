@extends('layout.main')

@section('title','meja')

@section('content')

<style>
  .tabel-kita{
    padding-left: 300px;
    padding-right: 300px;
  }
</style>

<div class="tabel-kita">
<h2 class="my-6 text-2xl font-semibold text-gray-700">
    Meja
</h2>
<br>
  <div>
    @can('create', App\Meja::class)
    <a href="{{route('meja.create')}}" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Tambah Menu</a>
    @endcan
  <div>
<br>
  <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
          <th style="width:25%">Nomor Meja</th>
          <th style="width:25%">Kuantitas Kursi</th>
          <th style="width:25%">Jenis Meja</th>
          <th style="width:25%">Status</th>
          <th style="width:25%">Aksi</th>
        </tr>
      </thead>

      <tbody class = "bg-white divide-y">
        @foreach ($meja as $item)
          <tr class="text-gray-700">    
            <td class="px-4 py-3">{{ $item["nomor_meja"]}} </td>
            <td class="px-4 py-3">{{ $item["kuantitas_kursi"]}}</td>
            <td class="px-4 py-3">{{ $item["jenis_meja"]}}</td>
            <td class="px-4 py-3 text-xs"> {{ $item["status_meja"]}} </td>
            <td class ="  ">
              @can('delete', $item)
              <form action="{{route('meja.destroy', $item["id"]) }}" method="post">
                @method('DELETE')
                  @csrf
                  <button type = "submit" class = "px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-red show_confirm" 
                    data-name="{{$item ["nomor_meja"] }}">Hapus</button>
                      <a href="{{route('meja.edit', $item["id"])}}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-red">Edit</a>
              </td>
                </form>
              @endcan
                      </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>  
        @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
           Swal.fire({
              title: "Good job!",
              text: "{{ session('success') }}",
              icon: "success"
            });
          </script>
          @endif
          {{-- confirm dialog --}}
          <script type="text/javascript">
          
          $('.show_confirm').click(function(event) {
              let form =  $(this).closest("form");
              let name = $(this).data("name");
              event.preventDefault();
              Swal.fire({
                title: "Yakin Dekk?"+name,
                text: "Setelah dihapus tidak bisa dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus"
              })
          
              .then((willDelete) => {
                if (willDelete.isConfirmed) {
                  form.submit();
                }
              });
          });
          
          </script>

@endsection