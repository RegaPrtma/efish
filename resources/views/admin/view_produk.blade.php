<!DOCTYPE html>
<html>
  <head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @include('admin.css')

    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: left;
            align-items: center;
            margin-top: 60px;
        }
        .table_deg{
            border: 2px solid greenyellow;
        }
        th{
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }
        td{
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }
        h2{
            color: white;
        }
        input[type='search']{
            width: 500px;
            height: 38px;
            margin-left: 10px;
        }
    </style>
  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h2>List Produk</h2>
            <form action="{{ url('cari_produk') }}" method="get">
                @csrf
                <input type="search" name="cari">
                <input type="submit" class="btn btn-success" value="Cari">
            </form>

            <div class="div_deg">

                <table class="table_deg">
                    <tr>
                        <th>Nama Ikan</th>
                        <th>Deskrpisi</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Kilo</th>
                        <th>Gambar</th>
                        <th>Edit Produk</th>
                        <th>Hapus Produk</th>
                        
                    </tr>
                    @foreach ( $produk as $produks )
                    <tr>
                        <td>{{ $produks->title }}</td>
                        <td>{{ $produks->deskripsi }}</td>
                        <td>{{ $produks->kategori }}</td>
                        <td>{{ $produks->harga }}</td>
                        <td>{{ $produks->quantity }}</td>
                        <td>
                            <img height="150" width="150" src="produks/{{ $produks->gambar }}" alt="">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ url('update_produk',$produks->id) }}">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{ url('delete_produk', $produks->id) }}">Delete</a>
                        </td>
                </tr>
                    @endforeach
                    
                </table>
                
            </div>
            <div class="div_deg">
                {{ $produk->onEachSide(1)->links() }}
            </div>
            
          </div>
@include('admin.js')
        </body>
</html>