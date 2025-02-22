@extends('FrontEnd.main')
@section('judul','PBJ | Profil - Dasar dan Tupoksi')
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
            <h1 class="mb-4 text-3xl font-bold text-white dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
              Dasar Dan Tupoksi</h1>
            <p class="mb-5 text-base text-white dark:text-dark-6">
              profile
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Banner Section End -->

  <!-- ====== About Section Start -->
  <section
    id="about"
    class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]"
  >
    <div class="container">
      <div class="wow fadeInUp" data-wow-delay=".2s">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 max-w-[540px] lg:mb-0">
              <h2
                class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]"
              >
                DASAR
              </h2>
              <p
                class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6"
              >
              PERATURAN GUBERNUR NUSA TENGGARA BARAT NOMOR 10 TAHUN 2023 TENTANG KEDUDUKAN,
              SUSUNAN ORGANISASI, TUGAS DAN FUNGSI SERTA TATA KERJA SEKRETARIAT DAERAH PROVINSI NUSA TENGGARA BARAT
                <br />
              </p>
              <h2
                class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]"
              >
                TUPOKSI
              </h2>
              <embed src="{{ asset('Data/PDF/tes.pdf') }}" type="application/pdf" width="100%" height="400px" />
              <br>
              <a
                  href="{{ url('/Data/PDF/tes.pdf') }}"
                  class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border rounded-md border-primary bg-primary px-7 hover:border-blue-dark hover:bg-blue-dark"
                >
                  Full
                </a>
            </div>
          </div>

          <div class="w-full px-4 lg:w-1/2">
            <div class="flex flex-wrap -mx-2 sm:-mx-4 lg:-mx-2 xl:-mx-4">
              <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                <div
                  class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]"
                >
                  <img
                    src="template/assets/images/about/about-image-01.jpg"
                    alt="about image"
                    class="object-cover object-center w-full h-full"
                  />
                </div>
              </div>

              <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                <div
                  class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]"
                >
                  <img
                    src="template/assets/images/about/about-image-02.jpg"
                    alt="about image"
                    class="object-cover object-center w-full h-full"
                  />
                </div>

                <div
                  class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8"
                >
                  <div>
                    <span class="block text-5xl font-extrabold text-white">
                      09
                    </span>
                    <span class="block text-base font-semibold text-white">
                      We have
                    </span>
                    <span
                      class="block text-base font-medium text-white text-opacity-70"
                    >
                      Years of experience
                    </span>
                  </div>
                  <div>
                    <span class="absolute top-0 left-0 -z-10">
                      <svg
                        width="106"
                        height="144"
                        viewBox="0 0 106 144"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          opacity="0.1"
                          x="-67"
                          y="47.127"
                          width="113.378"
                          height="131.304"
                          transform="rotate(-42.8643 -67 47.127)"
                          fill="url(#paint0_linear_1416_214)"
                        />
                        <defs>
                          <linearGradient
                            id="paint0_linear_1416_214"
                            x1="-10.3111"
                            y1="47.127"
                            x2="-10.3111"
                            y2="178.431"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop stop-color="white" />
                            <stop
                              offset="1"
                              stop-color="white"
                              stop-opacity="0"
                            />
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                    <span class="absolute top-0 right-0 -z-10">
                      <svg
                        width="130"
                        height="97"
                        viewBox="0 0 130 97"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          opacity="0.1"
                          x="0.86792"
                          y="-6.67725"
                          width="155.563"
                          height="140.614"
                          transform="rotate(-42.8643 0.86792 -6.67725)"
                          fill="url(#paint0_linear_1416_215)"
                        />
                        <defs>
                          <linearGradient
                            id="paint0_linear_1416_215"
                            x1="78.6495"
                            y1="-6.67725"
                            x2="78.6495"
                            y2="133.937"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop stop-color="white" />
                            <stop
                              offset="1"
                              stop-color="white"
                              stop-opacity="0"
                            />
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                    <span class="absolute bottom-0 right-0 -z-10">
                      <svg
                        width="175"
                        height="104"
                        viewBox="0 0 175 104"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          opacity="0.1"
                          x="175.011"
                          y="108.611"
                          width="101.246"
                          height="148.179"
                          transform="rotate(137.136 175.011 108.611)"
                          fill="url(#paint0_linear_1416_216)"
                        />
                        <defs>
                          <linearGradient
                            id="paint0_linear_1416_216"
                            x1="225.634"
                            y1="108.611"
                            x2="225.634"
                            y2="256.79"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop stop-color="white" />
                            <stop
                              offset="1"
                              stop-color="white"
                              stop-opacity="0"
                            />
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->
@endsection
