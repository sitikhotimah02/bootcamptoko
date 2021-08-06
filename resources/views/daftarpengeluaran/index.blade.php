@extends('layout.index')

@section('Pengeluaran')
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Pengeluaran</title>
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

        <label for="tanaman" style="font-size:37px;">Daftar Pengeluaran</label>
        <hr>
        <button type="button" class="button button2" data-toggle="modal" data-target="#exampleModal">+ Tambah</button>
        <br>
        @if (session('status'))
        <div class="alert alert-success"> 
        {{ session('status')}} 
            <button type="button" class="close" data-dismiss="alert">×</button> 
        </div> 
        @endif

         <!-- Create Materi Popup -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="" style="width:100%;" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                    <div class="form-group">
                            <label for="tgl_pengeluaran">Tanggal Pengeluaran</label>
                            <input type="date" class="form-control" id="tgl_pengeluaran" placeholder="Masukkan Tanggal Pengeluaran" name="tgl_pengeluaran">
                        </div>
                        <div class="form-group">
                            <label for="nama_pengeluaran">Nama Pengeluaran</label>
                            <input type="text" class="form-control" id="nama_pengeluaran" placeholder="Masukkan Nama Pengeluaran" name="nama_pengeluaran">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_item">Jumlah Item</label>
                            <input type="text" class="form-control" id="jumlah_item" placeholder="Masukkan Jumlah" name="jumlah_item">
                        </div> 
                        <div class="form-group">
                            <label for="harga_peritem">Harga Peritem</label>
                            <input type="text" class="form-control" id="harga_peritem" placeholder="Masukkan Harga" name="harga_peritem">
                        </div>
                        <div class="form-group">
                            <label for="total_pengeluaran">Total</label>
                            <input type="text" class="form-control" id="total_pengeluaran" placeholder="Masukkan Total" name="Total Pengeluaran">
                        </div>
                    </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>

    

        <!-- tabel -->
        <div class="table-hover table-responsive-sm">
            <table class="table">
                <thead class="thead-white" style="background-color:#C0C0C0;">
                    <tr>
                        <th scope="col">Tanggal Pengeluaran</th>
                        <th scope="col">Nama pengeluaran</th>
                        <th scope="col">Total Pengeluaran</th>
                        <th scope="co1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftarpengeluaran as $keluar)
                        <tr>
                            <td hidden>{{$keluar->id_pengeluaran}}</td>
                            <td>{{$keluar->tgl_pengeluaran}}</td>
                            <td>{{$keluar->nama_pengeluaran}}</td>
                            <td>{{$keluar->total_pengeluaran}}</td>
                            <td>
                                <a href="#" method="POST" class="btn btn-warning btn-sm" data-toggle="modal">Edit</a>
                                <a id="btn-delete" href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>



</body>
</html>
@endsection