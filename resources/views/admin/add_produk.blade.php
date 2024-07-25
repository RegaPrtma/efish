<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style text="text/css">
        .div_deg{
            display: flex;
            justify-content: left;
            align-items: center;
            margin-top: 60px;
            
        }
        h2{
            color: white;
        }
        label{
            display: inline-block;
            width: 250px;
            font-size: 15px!important;
            color: white!important;
        }
        input[tuye='text']{
            width: 350px;
            height: 50px;
        }
        /*textarea{
            width: 450px;
            height: 80px;
        }*/
        
        .input_deg{
            padding: 10px
        }
    </style>
  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2>Tambahkan Produk : </h2>
            <div class="div_deg">


                <form action="{{ url('upload_produk') }}" method="Post" enctype="multipart/form-data">
                    @csrf

                    <div class="input_deg">
                        <label for="">Nama Produk : </label>
                        <input type="text" name="title" required>
                    </div>
                    <div class="input_deg">
                        <label for="">Deskrpsi : </label>
                        <textarea name="deskripsi" required></textarea>
                    </div>
                    <div class="input_deg">
                        <label for="">Harga : </label>
                        <input type="text" name="harga">
                    </div>
                    <div class="input_deg">
                        <label for="">Kilo : </label>
                        <input type="number" name="qty">
                    </div>
                    <div class="input_deg">
                        <label for="">Kategori Produk : </label>


                        <select name="kategori" required>
                            <option value="">Pilih Option</option>
                            @foreach ($kategori as $kategori )
                            <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div class="input_deg">
                        <label for="">Gambar : </label>
                        <input type="file" name="gambar">
                    </div>
                    <div class="input_deg">
                        
                        <input class="btn btn-success" type="submit" value="Add Produk">
                    </div>
                </form>

            </div>
          </div>
@include('admin.js')
  </body>
</html>