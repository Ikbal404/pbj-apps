@extends('BackEnd.main')
@section('judul','PBJ | Beranda - Informasi-Update')
@section('isi')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Informasi Update</h4>
    <!-- Basic Layout -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('Judul'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{ session('Judul') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

</div>
</div>
@endsection
