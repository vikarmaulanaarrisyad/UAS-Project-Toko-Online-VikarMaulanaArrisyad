@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($barangs as $barang)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('uploads') }}/{{ $barang->gambar }}" width="230px" height="300">
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                            <p class="card-text">
                                <table >
                                    <tr>
                                        <td><strong>Harga Barang</strong></td>
                                        <td>:</td>
                                        <td> Rp. {{number_format ($barang->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Stok Barang</strong></td>
                                        <td>:</td>
                                        <td>{{number_format ($barang->stok) }}</td>
                                    </tr>
                                </table>
                                <hr>
                                <strong>Keterangan :</strong><br>  {{ $barang->keterangan}}
                            </p>
                            <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
