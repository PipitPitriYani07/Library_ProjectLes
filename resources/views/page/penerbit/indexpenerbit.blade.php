@extends('layout.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Penerbit</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables Penerbit
            </h6>
            <br>
            <a href="/tambahpenerbit" class="btn btn-primary pull-right">Tambah Penerbit</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penerbit</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Penerbit</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Option</th>

                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($penerbit as $item )
                    <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_penerbit }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="/penerbit/edit/{{ $item->id }}">Edit</a>
                        <a href="/hapuspenerbit/{{ $item->id }}">Hapus</a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
