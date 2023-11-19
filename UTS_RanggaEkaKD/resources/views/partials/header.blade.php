<nav class="navbar navbar-expand-lg bg-body-tertiary rounded py-4" aria-label="Thirteenth navbar example">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
      <a class="navbar-brand col-lg-3 me-0" href="#">BukuKu</a>
      <ul class="navbar-nav col-lg-6 justify-content-lg-center">
        <li class="nav-item">
          <a class="nav-link {{ ($title==="Home") ? 'active' : '' }}"  href="/main">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title==="Product") ? 'active' : '' }}" href="/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title==="About") ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
      <div class="d-lg-flex col-lg-3 justify-content-lg-end">
        <form class="d-flex" role="search">
          <input class="form-control me-3 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>