<nav class="navbar navbar-expand-lg  bg-dark">
  <div class="container-fluid">
    <img src="images/logo.png" alt="" style="width:50px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{route('hospital.index')}}"><strong>HOME</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('hospital.create')}}"><strong>ADD CASE</strong></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('hospital.trash')}}"><b>RECYCLE BIN</b></a>
        </li>
          </ul>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>