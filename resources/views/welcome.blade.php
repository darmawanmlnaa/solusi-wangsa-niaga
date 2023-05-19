@extends('layouts.guest')
@section('contents')

    {{-- greeting Text --}}
    <div class="display-image-wrapper scrollspy" id="home">
        <div class="display-image"></div>
        <div class="greeting-text">
          <p class="welcome">Solusi Wangsa Niaga</p>
          <p class="branding">SOWAN</p>
        </div>
    </div>


    {{-- about --}}
    <section id="about" class="about scrollspy">
        <div class="container">
          <div class="row">
            <p class="title text-center">Tentang Kami</h2>
            <div class="col-md-10 offset-md-1">
              <p class="desc">
                Kami merupakan perusahaan yang bergerak dibidang kesehatan, kami menyediakan berbagai produk alat kesehatan dan sistem informasi manajemen khususnya sistem informasi manajemen rumah sakit dan klinik.
              </p>
            </div>
          </div>
        </div>
    </section>

    {{-- parallax --}}
    <div class="parallax-header">
        <div class="container">
            <div class="parallax-content">
                {{-- <p class="title text-white text-center">Our Value</p> --}}
                <p class="desc text-white"><b>Misi :</b> Membuat sesuatu menjadi lebih mudah dan terintegrasi. Perangkat Lunak menjadi alat bantu di setiap sektor kehidupan baik secara individu maupun perusahaan.</p>
                <p class="desc text-white"><b>Visi :</b> Melalui perangkat lunak, apa yang selama ini dianggap mustahil bahkan tidak terpikirkan menjadi nyata.</p>
            </div>
        </div>
    </div>

    {{-- services --}}
    <section id="services" class="services scrollspy">
        <div class="container">
            <div class="row">
                <p class="title text-center">Layanan Kami</p>

                <div class="col-md-4 card-wrapper mb-3">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="card-body">
                          <p class="card-title text-center">MUDAH</p>
                          <p class="card-text text-center">Mudah Digunakan Oleh Pengguna</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 card-wrapper mb-3">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <i class="bi bi-bar-chart"></i>
                        <div class="card-body">
                          <p class="card-title text-center">CEPAT</p>
                          <P class="card-text text-center">Program Sangat Ringan Dan Cepat</P>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 card-wrapper mb-3">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <i class="bi bi-phone-flip"></i>
                        <div class="card-body">
                          <p class="card-title text-center">RESPONSIF</p>
                          <p class="card-text text-center">Mendukung Berbagai Macam Perangkat</p>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 card-wrapper mb-3">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <i class="bi bi-share"></i>
                        <div class="card-body">
                          <p class="card-title text-center">TERINTEGRASI</p>
                          <p class="card-text text-center">Terintegrasi Dengan Semua Bagian</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 card-wrapper mb-3">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <i class="bi bi-bezier2"></i>
                        <div class="card-body">
                          <p class="card-title text-center">AKURAT</p>
                          <P class="card-text text-center">Meminimalisir Kesalahan - Kesalahan Manual</P>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 card-wrapper mb-3">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <i class="bi bi-shield-lock"></i>
                        <div class="card-body">
                          <p class="card-title text-center">AMAN</p>
                          <p class="card-text text-center">Keamanan Sistem Level Bertingkat</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- portfolio --}}
    <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
            <div class="row">
                <p class="title text-center">Mitra Kami</p>
                {{-- <p class="desc text-center">Telah Diimplementasikan Dibeberapa Rumah Sakit</p> --}}

                <div class="col-md-4 card-wrapper mb-3">
                {{-- <div class="card" style="width: 18rem;"> --}}
                    <img src="assets/portfolio/gea.png" class="card-img-top" alt="...">
                    {{-- <div class="card-body">
                      <p class="card-title text-center">RSUD PROBOLINGGO</p>
                      <p class="card-text text-center">Kota Probolinggo, Jawa Timur</p>
                    </div> --}}
                {{-- </div> --}}
                </div>

                <div class="col-md-4 card-wrapper mb-3">
                {{-- <div class="card" style="width: 18rem;"> --}}
                    <img src="assets/portfolio/omron.png" class="card-img-top" alt="...">
                    {{-- <div class="card-body">
                      <p class="card-title text-center">RSIA AMANAH</p>
                      <p class="card-text text-center">Kota Probolinggo, Jawa Timur</p>
                    </div> --}}
                {{-- </div> --}}
                </div>

                <div class="col-md-4 card-wrapper mb-3">
                {{-- <div class="card" style="width: 18rem;"> --}}
                    <img src="assets/portfolio/onehealth.png" class="card-img-top" alt="...">
                    {{-- <div class="card-body">
                      <p class="card-title text-center">RSIA FATIMAH</p>
                      <p class="card-text text-center">Kota Probolinggo, Jawa Timur</p>
                    </div> --}}
                {{-- </div> --}}
                </div>

            </div>

            <div class="row">
              {{-- <p class="title text-center">Portfolio</p> --}}
              {{-- <p class="desc text-center">Telah Diimplementasikan Dibeberapa Rumah Sakit</p> --}}

              <div class="col-md-4 card-wrapper mb-3">
              {{-- <div class="card" style="width: 18rem;"> --}}
                  <img src="assets/portfolio/sony.png" class="card-img-top" alt="...">
                  {{-- <div class="card-body">
                    <p class="card-title text-center">RSUD PROBOLINGGO</p>
                    <p class="card-text text-center">Kota Probolinggo, Jawa Timur</p>
                  </div> --}}
              {{-- </div> --}}
              </div>

              <div class="col-md-4 card-wrapper mb-3">
              {{-- <div class="card" style="width: 18rem;"> --}}
                  <img src="assets/portfolio/provita.png" class="card-img-top" alt="...">
                  {{-- <div class="card-body">
                    <p class="card-title text-center">RSIA AMANAH</p>
                    <p class="card-text text-center">Kota Probolinggo, Jawa Timur</p>
                  </div> --}}
              {{-- </div> --}}
              </div>

              <div class="col-md-4 card-wrapper mb-3">
              {{-- <div class="card" style="width: 18rem;"> --}}
                  <img src="assets/portfolio/bistos.png" class="card-img-top" alt="...">
                  {{-- <div class="card-body">
                    <p class="card-title text-center">RSIA FATIMAH</p>
                    <p class="card-text text-center">Kota Probolinggo, Jawa Timur</p>
                  </div> --}}
              {{-- </div> --}}
              </div>

          </div>

        </div>
    </section>

    {{-- contact --}}
    <section id="contact" class="contact scrollspy">

		<div class="container">

            <div class="row">
                <div class="col-md-6 pb-4">
                    <p class="title">Hubungi Kami</p>
                    <p class="get-in-touch">GET IN TOUCH</p>
                    <p class="get-in-desc">
                      Get in touch untuk berdiskusi dengan kami. Silahkan Hubungi Kami, dengan cara isi nama, email, nomor telepon, dan pesan anda, atau cukup tekan saja logo WhatsApp disamping kanan bawah untuk menghubungi kami.
                    </p>

                    <div style="margin-top: 50px; display: flex; flex-direction: column;">

                    {{-- <a href="https://www.google.co.id/maps/@-6.9949746,110.4265696,14z" style="text-decoration: none;">
                      <div style="display: flex;">
                        <div class="circle-location">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text-location">
                          <p class="we-are">
                            We are here :
                          </p>
                          <p class="real-location">
                            Semarang, Jawa Tengah
                          </p>
                        </div>
                      </div>
                    </a> --}}

                    <a href="mailto:info@sowan.my.id" style="text-decoration: none;">
                      <div style="display: flex;">
                        <div class="circle-location">
                          <i class="fa fa-envelope"></i>
                        </div>
                        <div class="text-location">
                          {{-- <p class="we-are">
                            Mail Us :
                          </p> --}}
                          <p class="real-location">
                            info@sowan.my.id
                          </p>
                        </div>
                      </div>
                    </a>

                    <a href="https://wa.me/6281221987868" style="text-decoration: none;">
                      <div style="display: flex;">
                        <div class="circle-location">
                          <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </div>
                        <div class="text-location">
                          {{-- <p class="we-are">
                            Mail Us :
                          </p> --}}
                          <p class="real-location">
                            +62 8122 584 02044
                          </p>
                        </div>
                      </div>
                    </a>

                    <a href="https://www.instagram.com/sowan_official_store/" style="text-decoration: none;">
                      <div style="display: flex;">
                        <div class="circle-location">
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                        <div class="text-location">
                          {{-- <p class="we-are">
                            Mail Us :
                          </p> --}}
                          <p class="real-location">
                            &#64;sowan_official_store
                          </p>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-md-6 pb-4">

                    <div class="card" style="border-radius: 20px; box-shadow: 2px 2px 3px #999;">

                    <form action="" method="POST" id="contactForm" name="contactForm" class="contactForm p-5">
                      @csrf
                        <div class="row">
                            <div class="col-md-6 pb-4">
                                <div class="form-group">
                                    <label class="label" for="name">Full Name</label>
                                    <input type="text" class="validate form-control" name="name" id="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="form-group">
                                    <label class="label" for="email">Email Address</label>
                                    <input type="email" class="validate form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-12 pb-4">
                                <div class="form-group">
                                    <label class="label" for="phone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-md-12 pb-4">
                                <div class="form-group">
                                    <label class="label" for="#">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Write Your Message Here"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 pt-4">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn text-white" style="background-color: #09203f;">
                                    <div class="submitting"></div>
                                </div>
                            </div>

                        </div>
                    </form>

                    </div>

                </div>
            </div>

        </div>

    </section>

    {{-- @if(Session::has('success_message'))
      <script>
          alert('{{Session::get("success_message")}}');
      </script>
    @endif --}}

@endsection