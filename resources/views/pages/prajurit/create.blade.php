@extends('layouts.app')

@section('title', 'Advanced Forms')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Prajurit</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Prajurit</h2>



                <div class="card">
                    <form action="{{ route('prajurits.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            {{-- name --}}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control @error('name')
                                is-invalid
                            @enderror"
                                    name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- pangkat --}}
                            <div class="form-group">
                                <label>Pangkat</label>
                                <input type="text"
                                    class="form-control @error('pangkat')
                                is-invalid
                            @enderror"
                                    name="pangkat">
                                @error('pangkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- korps --}}
                            <div class="form-group">
                                <label>Korps</label>
                                <input type="text"
                                    class="form-control @error('korps')
                                is-invalid
                            @enderror"
                                    name="korps">
                                @error('korps')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- nrp --}}
                            <div class="form-group">
                                <label>NRP</label>
                                <input type="text"
                                    class="form-control @error('nrp')
                                is-invalid
                            @enderror"
                                    name="nrp">
                                @error('nrp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- password --}}
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password"
                                        class="form-control @error('password')
                                is-invalid
                            @enderror"
                                        name="password">
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- phone --}}
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" class="form-control" name="phone">
                            </div>

                            {{-- jabatan --}}
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text"
                                    class="form-control @error('jabatan')
                                is-invalid
                            @enderror"
                                    name="jabatan">
                                @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Departement --}}
                            <div class="form-group">
                                <label class="form-label">Departement</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="departement" value="minpers" class="selectgroup-input"
                                        checked="">
                                        <span class="selectgroup-button">Minpers</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="departement" value="satma" class="selectgroup-input">
                                        <span class="selectgroup-button">Satma</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="departement" value="ti" class="selectgroup-input">
                                        <span class="selectgroup-button">Prodi TI</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="departement" value="te" class="selectgroup-input">
                                        <span class="selectgroup-button">Prodi TE</span>
                                    </label>

                                    <label class="selectgroup-item">
                                        <input type="radio" name="departement" value="mahasiswa" class="selectgroup-input">
                                        <span class="selectgroup-button">Mahasiswa</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
