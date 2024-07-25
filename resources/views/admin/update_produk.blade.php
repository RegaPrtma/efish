<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{ $data->title }}</h2>
    <h2>{{ $data->deskripsi }}</h2>
    <img width="200" src="/produks/{{ $data->gambar }}" alt="">
    <h2>{{ $data->title }}</h2>
    <h2>{{ $data->title }}</h2>
    <h2>{{ $data->title }}</h2>
</body>
</html>-->

<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div{
            display: flex;
            justify-content: left;
            align-items: center;
            margin-top: 60px;

        }
        input[type='text']{
            width: 400px;
            height: 39px;

        }
        label{
            display: inline-block;
            width: 250px;
            font-size: 15px!important;
            color: white!important;
        }
        textarea{
            width: 400px;
            height: 80px;
        }
    </style>
  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h2>Update Produk</h2>

            <div class="div_deg">
                <form action="{{ url('edit_produk',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{ $data->title }}">
                    </div>
                    <div>
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi">{{ $data->deskripsi }}</textarea>
                    </div>
                    <div>
                        <label for="">Harga</label>
                        <input type="text" name="harga" value="{{ $data->harga }}">
                    </div>
                    <div>
                        <label for="">Kilo</label>
                        <input type="text" name="qty" value="{{ $data->quantity }}">
                    </div>
                    <div>
                        <label>Kategori</label>
                        <select name="kategori" >
                            <option value="{{ $data->kategori }}">
                                {{ $data->kategori }}
                            </option>
                            @foreach ($kategori as $kategori)
                                <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div>
                        <label>Gambar Sekarang</label>
                        <img width="150px" src="/produks/{{ $data->gambar }}" alt="">
                    </div>
                    <label for="">update Gambar Baru</label>
                    <input type="file" name="gambar">
                    <div>
                        <input class="btn btn-success" type="submit">
                    </div>
                </form>
            </div>

          </div>
    <!-- JavaScript files-->
@include('admin.js')
  </body>
</html>