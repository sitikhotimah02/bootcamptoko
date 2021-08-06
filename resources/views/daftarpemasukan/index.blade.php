@extends('layout.index')

@section('Pemasukan')
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Pemasukan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.3.5/sweetalert2.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.3.5/sweetalert2.min.js"></script>
    </head>
    <body>
    @section('content')
        

        <nav class="navbar navbar-expand-sm bg-light">
            <div class="acc2">
                <ul class="navbar-nav" >
                <li class="nav-item li2" style="background-color:#000805;">
                    <a style="color:#fff; display: inline-block; font-size: 18px;" class="nav-link" href="/daftarpemasukan">Pemasukan</a>
                </li>
                <li class="nav-item li2" style="background-color:#000805; ">
                    <a style="color:#fff; display: inline-block; font-size: 18px;" class="nav-link" href="/daftarpengeluaran">Pengeluaran</a>
                </li>
                <!-- <img class ="acc "src="{{asset('assets/images/accessories-2.png')}}"> -->
                </ul>
            </div>
        </nav>
        
        <label for="tanaman" style="font-size:37px;">Daftar Pemasukan</label>
        <hr>
        @if (session('status'))
        <div class="alert alert-success"> 
        {{ session('status')}} 
            <button type="button" class="close" data-dismiss="alert">×</button> 
        </div> 
        @endif
        <br>
        <!-- tabel -->
        <div class="table-hover table-responsive-sm">
            <table class="table">
                <thead class="thead-white" style="background-color:#C0C0C0;">
                    <tr>
                        <th scope="col">Tanggal </th>
                        <th scope="col">Jumlah Pemesanan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total</th>
                        <th scope="co1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftarpemasukan as $masuk)
                        <tr>
                            <td>{{$masuk->tgl_pemesanan}}</td>
                            <td>{{$masuk->jumlah_pemesanan}}</td>
                            <td>{{$masuk->harga_tanaman}}</td>
                            <td>{{$masuk->total}}</td>
                            <td>
                                <a href="#" method="POST" class="btn btn-warning btn-sm" data-toggle="modal">Edit</a>
                                <a id="btn-delete" href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
        <!-- </div>
        </div> -->



</body>
</html>
@endsection