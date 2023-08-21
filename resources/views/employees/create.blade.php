@extends('employees.layouts')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"  style="background-color:  rgb(77, 255, 0);">
                <h1>Tambah Pegawai</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" name="name" id="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="division">Divisi:</label>
                        <input type="text" name="division" id="division" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="salary">Gaji:</label>
                        <input type="number" name="salary" id="salary" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="allowance">Tunjangan:</label>
                        <input type="number" name="allowance" id="allowance" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
                <a href="{{ route('employees.index') }}" class="mt-2">Kembali ke Daftar</a>
            </div>
        </div>
    </div>
</div>
@endsection
