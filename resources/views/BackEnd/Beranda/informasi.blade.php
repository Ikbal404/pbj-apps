@extends('BackEnd.main')
@section('judul','PBJ | Beranda - Informasi')
@section('isi')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Informasi</h4>
    <!-- Basic Layout -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if($Data)
        <div class="row">
            <div class="col-xl">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset($Data->Image) }}" alt="Card image cap" />
                    <div class="card-body">
                    <h5 class="card-title">{{ $Data->Judul }}</h5>
                    <p class="card-text">
                        {{ $Data->SubJudul }}
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated {{ $Data->updated_at->format('d M Y ') }}</small>
                    </p>
                    </div>
                </div>
                </div>
            <div class="col-xl">
            <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Update Data Hero</h5>
                <small class="text-muted float-end">Akan di tampilkan di halaman beranda utama</small>
            </div>
            <div class="card-body">
                <form action="{{ route('hero.update', $Data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Judul</label>
                    <div class="input-group input-group-merge">

                    <input
                        name="Judul"
                        type="text"
                        value="{{$Data->Judul}}"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="Input Judul"
                        aria-label="Input Judul"
                        aria-describedby="basic-icon-default-fullname2" required
                    />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company">Sub-Judul</label>
                    <div class="input-group input-group-merge">
                    <input
                        type="text"
                        name="SubJudul"
                        value="{{$Data->SubJudul}}"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="Input Sub-Judul"
                        aria-label="Input Sub-Judul"
                        aria-describedby="basic-icon-default-company2" required
                    />
                    </div>
                </div>
                <div class="div">
                <small class="text-muted float-left">Disarankan Ukuran Gambar 1400 X 600 pixel (Max 2000 kb)</small>
                <div class="input-group mb-3">
                    <input
                        type="file"
                        name="Image"
                        class="form-control"
                        id="inputGroupFile04"
                        aria-describedby="inputGroupFileAddon04"
                        aria-label="Upload"
                    />
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
            </div>
            </div>
    @else
        <div class="row">
        <div class="col-xl">
                <div class="card mb-3">
                <img class="card-img-top" src="sneat/assets/img/elements/no-image.jpg" alt="Card image cap" />
                </div>
        </div>
        <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tambah Data Hero</h5>
            <small class="text-muted float-end">Akan di tampilkan di halaman beranda utama</small>
            </div>
            <div class="card-body">
                <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Judul</label>
                <div class="input-group input-group-merge">

                    <input
                    name="Judul"
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="Input Judul"
                    aria-label="Input Judul"
                    aria-describedby="basic-icon-default-fullname2"
                    />
                </div>
                </div>
                <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Sub-Judul</label>
                <div class="input-group input-group-merge">
                    <input
                    type="text"
                    name="SubJudul"
                    id="basic-icon-default-company"
                    class="form-control"
                    placeholder="Input Sub-Judul"
                    aria-label="Input Sub-Judul"
                    aria-describedby="basic-icon-default-company2"
                    />
                </div>
                </div>
                <div class="input-group mb-3">
                    <input
                    type="file"
                    name="Image"
                    class="form-control"
                    id="inputGroupFile04"
                    aria-describedby="inputGroupFileAddon04"
                    aria-label="Upload"
                    />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
        </div>
        </div>
    @endif
</div>
</div>
@endsection
