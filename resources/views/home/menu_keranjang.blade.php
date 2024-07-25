<!DOCTYPE html>
<html lang="en">
   <head>

    @include('home.css')
    <style type="text/css">
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 50px;

    } 
    .order_deg{
        padding-right: 100px;
        margin-top: -30px;
    }
    label{
        display: inline-block;
        width: 150px
    }
    .div_gap{
        padding: 10px;
    }
    table{
        border: 3px solid white;
        text-align: center;
        width: 50%;
    }
    th{
        border: 3px solid white;
        text-align: center;
        color : white;
        font: 20px;
        font-weight: bold;
        background-color: red;
    }
    td{
        border: 1px solid;

    }
    .total_harga{
        text-align: center;
        margin-bottom: 100px;
        padding: 10px;
    }

    </style>
   
    </head>
   <!-- body -->
   <body class="main-layout">
    @include('home.header')
        <!-- top -->

        <div class="div_deg">
            
            <div class="order_deg">
                <form action="{{ url('confirm_order') }}" method="Post">
                    @csrf
                    <div class="div_gap">
                        <label for="">Nama</label>
                        <input type="text" name="nama" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="div_gap">
                        <label for="">Alamat</label>
                        <textarea name="alamat">{{ Auth::user()->address }}</textarea>
                    </div>
                    <div class="div_gap">
                        <label for="">No hp</label>
                        <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                    </div>
                    <div class="div_gap">
                        <input class="btn btn-primary" type="submit" value="Order">
                    </div>
                </form>
            </div>

            <table>
                <tr>
                    <th>Nama Ikan</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>hapus</th>
                    
                </tr>
                <?php 
                $value=0;
                ?>
                @foreach ( $keranjang as $keranjang )
                    
                <tr>
                    <td>{{ $keranjang->produk->title }}</td>
                    <td>{{ $keranjang->produk->harga }}</td>
                    <td>
                        <img width="200" src="/produks/{{ $keranjang->produk->gambar }}">
                    </td>
                    <td>
                        <a class="btn btn-danger" href="">Hapus</a>
                    </td>
                </tr>
                <?php 
                $value = $value + $keranjang->produk->harga;
                ?>
                @endforeach
            </table>
        </div>
        <div class="total_harga">
            <h3>
                Total Harga : Rp.{{ $value }}
            </h3>
        </div>

            
        
      <!--  footer -->
    @include('home.footer')
   </body>
</html>