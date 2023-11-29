@extends('layouts/main')

@section('content')
    {{-- Heroes --}}
    <div class="container-fluid px-5 py-5 bg-dark">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="/img/c3.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="600" height="400" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold lh-1 mb-4 text-white">BukuKu</h1>
              <p class="lead mb-3 text-white">Di BukuKu, Anda akan menemukan lebih dari sekadar buku. Kami menyediakan kurasi terbaik dari berbagai genre, mulai dari fiksi hingga non-fiksi, literatur klasik hingga yang terkini, dan sumber daya pembelajaran yang memikat. Setiap halaman adalah petualangan baru, dan kami bersemangat untuk membantu Anda menemukan cerita yang tepat untuk setiap momen dalam hidup Anda.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><a href="/products" class="text-white text-decoration-none">See products</a></button>
              </div>
            </div>
          </div>
      </div>
    {{-- End Heroes --}}

    {{-- Content --}}
    <div class="container">
        <div class="row flex-column-reverse flex-sm-column-reverse flex-lg-row flex-md-row featurette mt-5 align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Buku-buku original.</h2>
                <p class="lead">Buku-buku Original adalah jendela ke dunia kreativitas yang orisinal dan otentik. Kami adalah penghubung antara pembaca dengan karya-karya tulisan yang menginspirasi, memukau, dan menghadirkan pengalaman membaca yang tak terlupakan. Dengan komitmen pada kualitas dan keaslian, kami menghadirkan buku-buku yang memperkaya pikiran, merangsang imajinasi, dan mengabadikan kisah-kisah yang tak ternilai dalam literatur."</p>
            </div>
            <div class="col-md-5">
                <img src="img/c2.svg" class="d-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" src="" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
                </img>
            </div>
        </div>
        <div class="row featurette align-items-center">
            <div class="col-md-5">
                <img src="img/hero.png" class="d-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" src="" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
                </img>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Jenis Buku yang beragam</h2>
                <p class="lead">Kami menjadi rumah bagi berbagai jenis buku, menyuguhkan keberagaman cerita dari berbagai genre, ilmu pengetahuan yang mendalam, serta menyemai imajinasi dari setiap halaman. Di sini, keberagaman bukan hanya tentang judul-judul, tapi juga tentang pengalaman membaca yang membangkitkan rasa ingin tahu dan menghidupkan khayalan."</p>
            </div>
        </div>
        <div class="row flex-column-reverse flex-sm-column-reverse flex-lg-row flex-md-row featurette align-items-center mt-5">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Anytime, Everything, Everywhere. </h2>
                <p class="lead">Kami di sini untuk memastikan bahwa setiap buku yang Anda inginkan tersedia kapan pun Anda membutuhkannya. Dari klasik hingga terbaru, buku-buku favorit Anda dan bahkan yang belum Anda temukan, semuanya ada di ujung jari Anda.

                    Tidak peduli waktu atau tempat, koleksi buku kami hadir untuk memenuhi setiap kebutuhan literasi Anda. Dari kenyamanan rumah hingga saat bepergian, buku-buku yang Anda cari selalu siap untuk dipesan dan dinikmati, di mana pun Anda berada.
                    
                    Kami hadir dengan komitmen untuk memberikan akses tanpa batas ke dunia pengetahuan, imajinasi, dan inspirasi. Dengan layanan kami yang siap sedia 24/7, kami ingin memastikan bahwa setiap buku yang Anda inginkan ada di genggaman Anda, setiap saat, segala sesuatu, di mana pun Anda berada.</p>
            </div>
            <div class="col-md-5">
                <img src="img/content3.png" class="d-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" src="" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
                </img>
            </div>
        </div>
    </div>
    {{-- End Content --}}

    {{-- Content 2 --}}
    <div class="container">
        <div class="device-header p-3 pb-md-4 mb-2 mx-auto text-center">
            <h1 class="display-4 fw-normal text-body-emphasis my-5">Tersedia di</h1>
        </div>
        <div class="mx-auto mb-5">
            <div class="row text-center">
                <div class="col-lg-6 my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="currentColor" class="bi bi-phone mb-5" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg>
                    <h2 class="fw-normal mb-4">Android or iPhone</h2>
                </div>
                <div class="col-lg-6 my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="currentColor" class="bi bi-globe2 mb-5" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                      </svg>
                    <h2 class="fw-normal mb-4">Website</h2>
                </div>
            </div>
        </div>
    </div>
    {{-- End Content 2 --}}
@endsection