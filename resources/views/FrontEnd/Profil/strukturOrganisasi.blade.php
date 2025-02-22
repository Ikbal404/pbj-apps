@extends('FrontEnd.main')
@section('judul','PBJ | Profil - Struktur Organisasi')
@section('isi')
    <!-- ====== Banner Section Start -->
  <div class="relative bg-primary z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] dark:bg-dark">
    <div
      class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke dark:via-dark-3 to-stroke/0">
    </div>
    <div class="container">
      <div class="flex flex-wrap items-center -mx-4">
        <div class="w-full px-4">
          <div class="text-center">
              <p class="mb-5 text-base text-white dark:text-dark-6">
                Bagian Pengadaan Barang dan Jasa SETDA - KLU
              </p>
            <h1 class="mb-4 text-3xl font-bold text-white dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
              Struktur Organisasi</h1>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Banner Section End -->

  <!-- ====== Blog Details Section Start -->
    <section class="pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
      <div class="container">
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4">
            <div
              class="wow fadeInUp relative z-20 mb-[50px] h-[500px] overflow-hidden rounded-[5px] md:h-[400px] lg:h-[500px]"
              data-wow-delay=".1s
              "
            >
              <img
                src="template/assets/images/team/2.png"
                alt="image"
                class=" object-center w-full h-full hidden dark:block"
              />
              <img
                src="template/assets/images/team/1.png"
                alt="image"
                class=" object-center w-full h-full dark:hidden"
              />
            </div>

          </div>
        </div>


      </div>
    </section>
    <!-- ====== Blog Details Section End -->

@endsection
