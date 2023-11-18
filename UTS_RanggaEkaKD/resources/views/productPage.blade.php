@extends('layouts/main')

@section('content')
    {{-- Search bar --}}
    {{-- <div class="container d-flex justify-content-center align-items-center mt-5">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 w-550px" role="search">
            <input type="search" class="form-control form-control bg-tertiary text-bg-white" placeholder="Search..." aria-label="Search">
          </form>
    </div> --}}


    {{-- End of Carousel --}}


    {{-- Collection --}}
    <div class="album py-5 bg-body-primary">
        <div class="container mb-4">
            <h2 class="fw-bold mb-4">Best Seller</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku1.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 1</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku2.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 2</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="fw-bold mb-4">All Book</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku1.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 1</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku2.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 2</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku3.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 3</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku4.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 4</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku5.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 5</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku6.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 6</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku7.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 7</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku8.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 8</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buku9.jpg" class="bd-placeholder-img card-img-top" width="550px" height="550px"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>
                        </img>
                        <div class="card-body">
                            <h3 class="fw-normal mb-4">Book 9</h3>
                            <small>Author</small>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <h4 class="text-body-secondary">Price</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Collection --}}

    {{-- Pagination --}}
    <div class="container mt-5 mb-5">
        <nav aria-label="Page navigation example mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- End of Pagination --}}
@endsection
