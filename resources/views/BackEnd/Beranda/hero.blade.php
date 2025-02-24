@extends('BackEnd.main')
@section('judul','PBJ | Beranda - Berita')
@section('isi')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Hero</h4>
    <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                        <div class="card mb-3">
                          <img class="card-img-top" src="sneat/assets/img/elements/18.jpg" alt="Card image cap" />
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                              This is a wider card with supporting text below as a natural lead-in to additional content. This
                              content is a little bit longer.
                            </p>
                            <p class="card-text">
                              <small class="text-muted">Last updated 3 mins ago</small>
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
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Judul</label>
                          <div class="input-group input-group-merge">

                            <input
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
                              class="form-control"
                              id="inputGroupFile04"
                              aria-describedby="inputGroupFileAddon04"
                              aria-label="Upload"
                            />
                          </div>
                        <button type="Simpan" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
  </div>
</div>
@endsection
