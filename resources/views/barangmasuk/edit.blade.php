@extends('layout.main')
@section('title', 'Barang Masuk')

@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
        <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Edit Barang Masuk</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('barangmasuk.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal') ? old('tanggal') : $barangMasuk->tanggal }}">
                        @error('tanggal')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kode_transaksi" class="form-label">Kode Transaksi</label>
                            <input type="text" class="form-control" name="kode_transaksi" value="{{ old('kode_transaksi') ? old('kode_transaksi') : $barangMasuk->kode_transaksi }}">
                            @error('kode_transaksi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" name="kode_barang" value="{{ old('kode_barang') ? old('kode_barang') : $barangMasuk->kode_barang }}">
                        @error('kode_barang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ old('nama_barang') ? old('nama_barang') : $barangMasuk->nama_barang }}">
                            @error('nama_barang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>                      
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" name="kategori" value="{{ old('kategori') ? old('kategori') : $barangMasuk->kategori }}">
                            @error('kategori')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ old('jumlah') ? old('jumlah') : $barangMasuk->jumlah }}">   
                            @error('jumlah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select class="form-control" name="satuan">
                                <option value="">-- Pilih Satuan --</option>
                                <option value="pcs" {{ old('satuan', $barangmasuk->satuan ?? '') == 'pcs' ? 'selected' : '' }}>pcs</option>
                                <option value="unit" {{ old('satuan', $barangmasuk->satuan ?? '') == 'unit' ? 'selected' : '' }}>unit</option>
                                <option value="kotak" {{ old('satuan', $barangmasuk->satuan ?? '') == 'kotak' ? 'selected' : '' }}>kotak</option>
                                <option value="lembar" {{ old('satuan', $barangmasuk->satuan ?? '') == 'lembar' ? 'selected' : '' }}>lembar</option>
                                <option value="pak" {{ old('satuan', $barangmasuk->satuan ?? '') == 'pak' ? 'selected' : '' }}>pak</option>
                                <option value="rim" {{ old('satuan', $barangmasuk->satuan ?? '') == 'rim' ? 'selected' : '' }}>rim</option>
                                <option value="dus" {{ old('satuan', $barangmasuk->satuan ?? '') == 'dus' ? 'selected' : '' }}>dus</option>
                                <option value="roll" {{ old('satuan', $barangmasuk->satuan ?? '') == 'roll' ? 'selected' : '' }}>roll</option>
                                <option value="lusin" {{ old('satuan', $barangmasuk->satuan ?? '') == 'lusin' ? 'selected' : '' }}>lusin</option>
                            </select>
                            @error('satuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" fdprocessedid="s51n9k">Simpan</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
        </div>
    </div>
    <!--end::Row-->
@endsection