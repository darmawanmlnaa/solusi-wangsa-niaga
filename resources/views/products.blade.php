@extends('layouts.guest')

@section('contents')

{{-- greeting Text --}}
<div class="display-image-wrapper scrollspy" id="home">
    <div class="display-image"></div>
    <div class="greeting-text">
        <p class="welcome">Cek Katalog Terbaru Kami Dibawah Ini !</p>
        <p class="branding">KATALOG</p>
    </div>
</div>

<section id="catalog" class="catalog">
    <div class="container">
        {{-- <p class="text-center pb-5" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif;">
            Check Our Latest Catalog Down Here !
        </p> --}}
        <div class="row">
            <div class="col-md-4 card-wrapper mb-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ asset('pdfs/GHEA Beres.pdf') }}" target="_blank">
                        <img src="assets/catalog/CoverdepanGHEA.png" class="card-img-top" alt="...">
                    </a>
                    {{-- <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-4 card-wrapper mb-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ asset("pdfs/IDC Beres.pdf") }}" target="_blank">
                        <img src="assets/catalog/CoverdepanIDC.png" class="card-img-top" alt="...">
                    </a>
                    {{-- <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-4 card-wrapper mb-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ asset('pdfs/OMRON Beres.pdf') }}" target="_blank">
                        <img src="assets/catalog/CoverdepanOmron.png" class="card-img-top" alt="...">
                    </a>
                    {{-- <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- second --}}

        <div class="row">
            <div class="col-md-4 card-wrapper mb-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ asset("pdfs/One Health Clear.pdf ") }}">
                        <img src="assets/catalog/CoverdepanOneHealth.png" class="card-img-top" alt="...">
                    </a>
                    {{-- <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-4 card-wrapper mb-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ asset('pdfs/RTM Beres.pdf') }}" target="_blank">
                    <img src="assets/catalog/CoverdepanRTM.png" class="card-img-top" alt="...">
                    </a>
                    {{-- <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-4 card-wrapper mb-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ asset('pdfs/RTM Beres 1.pdf') }}" target="_blank">
                        <img src="assets/catalog/CoverdepanRTM1.png" class="card-img-top" alt="...">
                    </a>
                    {{-- <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- third --}}

        <div class="row">
            <div class="col-md-4 card-wrapper mb-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{ asset('pdfs/SONY Beres 1.pdf') }}" target="_blank">
                        <img src="assets/catalog/CoverdepanSony.png" class="card-img-top" alt="...">
                    </a>
                    {{-- <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
