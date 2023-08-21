@extends('employees.layouts')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                <h1>Edit Pegawai</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('employees.update', $employee) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" name="name" id="name" value="{{ $employee->name }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="division">Divisi:</label>
                        <input type="text" name="division" id="division" value="{{ $employee->division }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="salary">Gaji:</label>
                        <input type="number" name="salary" id="salary" value="{{ $employee->salary }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="allowance">Tunjangan:</label>
                        <input type="number" name="allowance" id="allowance" value="{{ $employee->allowance }}" required class="form-control">
                    </div>

                    <button type="submit" class="btn btn-danger">Simpan Perubahan</button>
                </form>

                <a href="{{ route('employees.index') }}" class="mt-2">Kembali ke Daftar</a>
            </div>
        </div>
    </div>
</div>
@endsection
