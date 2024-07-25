<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
    input[type='text']{
        width: 400px;
        height: 38px;
    }
    .div_deg{
        display: flex;
        justify-content: left;
        align-items: center;
    }
    .tabel_deg{
        text-align: center;
        margin: auto;
        border: 2px solid yellowgreen;
        margin-top: 50px;
        width: 500px;
    }
    th{
        background-color: skyblue;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
        color: white;
    }
    td{
        color: white;
        padding: 10px;
        border: 1px solid skyblue;
    }

    </style>
  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_deg">
                <h3>Add kategori</h3>
                <form action="{{ url('add_kategori') }}" method="post">
                    @csrf
                <div>
                    <input type="text" name="kategori">
                    <input class="btn btn-primary" type="submit" value="add kategori">
                </div>
            </form>
            </div>
            <div>
                <table class="tabel_deg">
                    <tr>
                        <th>Kategori Ikan</th>

                        <th>Edit</th>

                        <th>Delete</th>
                    </tr>
                    @foreach ($data as $data )
                    
                    <tr>
                        
                        <td>{{ $data->nama_kategori }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ url('edit_kategori',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class= "btn btn-danger" onclick="confirmation(event)" 
                            href="{{ url('delete_kategori', $data->id) }}">Delete</a>
                        </td>
                    </tr>
                        @endforeach
                </table>
            </div>
        </div> 
    </div>
@include('admin.js')
  </body>
</html>