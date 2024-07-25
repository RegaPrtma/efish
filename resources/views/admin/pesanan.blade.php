<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        table{
            border: 2px solid skyblue;
            text-align: center;

        }
        th{
            background-color: skyblue;
            padding: 10px;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
        }
        .table_center{
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        td{
            color: white;
            padding: 10px;
            border : 1px solid skyblue;
        }
    </style>
  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="table_center">
            <table>
                <tr>
                    <th>Nama Customer</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Nama Ikan</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Ganti status</th>
                </tr>
                @foreach ( $data as $data )
                    
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->produk->title }}</td>
                    <td>{{ $data->produk->harga }}</td>
                    <td>
                        <img width="150" src="produks/{{ $data->produk->gambar }}">
                    </td>
                    <td>
                        @if ($data->status == 'in progress')
                        <span style="color: red">{{ $data->status }}</span>
                        @elseif ($data->status == 'Dalam Perjalanan')
                        <span style="color: rgb(4, 255, 4)">{{ $data->status }}</span>
                        @else
                        <span style="color: yellow">{{ $data->status }}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('otw',$data->id) }}">Dalam Perjalanan</a>
                        <a class="btn btn-success" href="{{ url('dikirim',$data->id) }}">Dikirim</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
          </div>
    <!-- JavaScript files-->
    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>
  </body>
</html>