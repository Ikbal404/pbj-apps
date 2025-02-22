@extends('FrontEnd.main')
@section('judul','PBJ | Info Katalog Detail')
@section('isi')

    <!-- ====== Banner Section Start -->
    <div
      class="relative bg-primary z-10 overflow-hidden pb-[60px] pt-[120px] dark:bg-dark md:pt-[130px] lg:pt-[160px]"
    >
      <div
        class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke to-stroke/0 dark:via-dark-3"
      ></div>
      <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="text-center">
              <h1
                class="mb-4 text-3xl font-bold text-white dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                Detail Proges E-Katalog
              </h1>

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
              class="wow fadeInUp relative z-20 mb-[50px] h-[300px] overflow-hidden rounded-[5px] md:h-[400px] lg:h-[500px]"
              data-wow-delay=".1s
              "
            >
              <img
                src="template/assets/images/blog/blog-details-01.jpg"
                alt="image"
                class="object-cover object-center w-full h-full"
              />

            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- ====== Blog Details Section End -->

@endsection
