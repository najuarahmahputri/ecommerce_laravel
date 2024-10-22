@extends('layouts.admin.main') 
@section('title', 'Admin Distributor') 
@section('content') 
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">
                        Dashboard</a></div>
                <div class="breadcrumb-item">Distributor</div>
            </div>
        </div>

        <a href="{{ route('distributor.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="fas fa-plus"></i> Tambah Distributor</a>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>No</th>
                        <th>Nama Distributor</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Kontak</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @php 
                        $no = 0 
                    @endphp 
                    @forelse ($distributors as $distributor) 
                        <tr>
                            <td>{{ $no += 1 }}</td>
                            <td>{{ $distributor->nama_distributor }}</td>
                            <td>{{ $distributor->kota }}</td>
                            <td>{{ $distributor->provinsi }}</td>
                            <td>{{ $distributor->kontak }}</td>
                            <td>{{ $distributor->email }}</td>
                            <td>
                                <a href="{{ route('admin.distributor.edit', $distributor->id) }}" class="badge badge-info">Edit</a>
                                <a href="{{ route('distributor.delete', $distributor->id) }}" data-confirm-delete="true" class="badge badge-warning">Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <td colspan="7" class="text-center">Data Distributor Kosong</td>
                    @endforelse
                </table>
            </div>
        </div>
</div>
</div>
@endsection