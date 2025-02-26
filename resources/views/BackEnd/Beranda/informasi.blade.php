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
    @if(session('Judul'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{ session('Judul') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="py-3 px-3">
            <button type="button" data-bs-toggle="modal"
            data-bs-target="#basicModal" class="btn rounded-pill btn-primary">Tambah</button>
        </div>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>SubJudul</th>
                <th>Deskripsi</th>
                <th>Image</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($Data as $key => $item)
                    <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->Judul }}</td>
                    <td>{{ $item->SubJudul }}</td>
                    <td>{{ $item->Deskripsi }}</td>
                    <td>
                        @if ($item->Image)
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Gambar"
                                >
                                <img src="{{ asset($item->Image) }}" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul>
                        @else
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="No Image"
                                >
                                <img src="sneat/assets/img/elements/no-image.jpg" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul>
                        @endif

                    </td>
                    <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('informasi.edit', $item->SubJudul) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="submit" onclick="return confirm('Yakin ingin menghapus?')"><i class="bx bx-trash me-1"></i>Hapus</button>

                        </form>
                        </div>
                    </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
      <!--/ Hoverable Table rows -->
</div>
</div>
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Tambah Informasi</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
        <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col mb-3">
                    <label for="nameBasic" class="form-label">Judul</label>
                    <input type="text" name="Judul" id="nameBasic" class="form-control" placeholder="Enter Judul" />
                    </div>
                </div>
                <div>
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="Deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Pilih Foto</label>
                    <input class="form-control" name="Image" type="file" id="formFile" />
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection
