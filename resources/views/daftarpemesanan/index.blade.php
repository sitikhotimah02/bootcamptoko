@extends('layout.index')

@section('Pesanan')
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Pesanan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.3.5/sweetalert2.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.3.5/sweetalert2.min.js"></script>
    </head>
    <body>
    @section('content')
        
        <label for="tanaman" style="font-size:37px;">Daftar Pesanan</label>
        <hr>
        @if (session('status'))
        <div class="alert alert-success"> 
        {{ session('status')}} 
            <button type="button" class="close" data-dismiss="alert">×</button> 
        </div> 
        @endif

         <!-- Create Materi Popup -->
         <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="tgl_pemesanan">Tanggal Pemesanan</label>
                            <input type="date" class="form-control" id="ntgl_pemesanan" placeholder="Masukkan Tanggal" name="tgl_pemesanan">
                        </div>
                        <div class="form-group">
                            <label for="nama_tanaman">Nama Tanaman</label>
                            <input type="text" class="form-control" id="nama_tanaman" placeholder="Masukkan Nama Tanaman" name="nama_tanaman">
                        </div>
                        <div class="form-group">
                            <label for="harga_tanaman">Harga</label>
                            <input type="text" class="form-control" id="harga_tanaman" placeholder="Masukkan Harga" name="harga_tanaman">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_stok">Jumlah Stok</label>
                            <input type="text" class="form-control" id="jumlah_stok" placeholder="Masukkan Jumlah Stok" name="jumlah_stok">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_pemesanan">Jumlah Pemesanan</label>
                            <input type="text" class="form-control" id="jumlah_pemesanan" placeholder="Masukkan Jumlah Pemesanan" name="jumlah_pemesanan">
                        </div>
                           
                    </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </div>
                </form> -->
            
        <br>

    

        <!-- tabel -->
        <div class="table-hover table-responsive-sm">
            <table class="table">
                <thead class="thead-white" style="background-color:#C0C0C0;">
                    <tr>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Nama Tanaman</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah Pemesanan</th>
                        <th scope="col">Total</th>
                        <th scope="co1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftarpemesanan as $pesan)
                        <tr>
                            <td hidden>{{$pesan->id_pesanan}}</td>
                            <td hidden>{{$pesan->id_tanaman}}</td>
                            <td>{{$pesan->tgl_pemesanan}}</td>
                            <td>{{$pesan->nama_tanaman}}</td>
                            <td>{{$pesan->harga_pemesanan}}</td>
                            <td>{{$pesan->jumlah_pemesanan}}</td>
                            <td>{{$pesan->total}}</td>
                            <td>
                                <a href="#" method="POST" class="btn btn-warning btn-sm" data-toggle="modal">Edit</a>
                                <a id="btn-delete" href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
        <!-- </div> -->
        <!-- </div> -->



</body>
</html>
@endsection