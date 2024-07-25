<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orderan</title>
    @include('home.css')
    <style class="text/css">
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px;

        }
        table{
            border: 3px solid white;
            text-align: center;
            width: 500px;

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
    </style>
</head>
<body>
    @include('home.header')
<div class="div_center">
    <table>
        <tr>
            <th>Nama Ikan</th>
            <th>Harga</th>
            <th>Status Pengiriman</th>
            <th>Gambar</th>
        </tr>
        @foreach ($pesan as $pesan )
        <tr>
            <td>{{ $pesan->produk->title }}</td>
            <td>{{ $pesan->produk->harga }}</td>
            <td>{{ $pesan->status }}</td>
            <td>
                <img height="100" src="produks/{{ $pesan->produk->gambar }}">
            </td>
        </tr>
        @endforeach
    </table>
</div>




    @include('home.footer')
</body>
</html>