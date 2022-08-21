@extends('layouts.layout')
@section('content')
  <main class="px-3">
    <h2>Experience</h2>
    <hr>
    <div class="container">
      <div class="row g-2">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/experience/ggwp.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-dark">Back End Developer at <strong>GGWP.ID</strong></h5>
              <p class="card-text text-dark">Bandung, Indonesia<br>July 2019 - January 2022</p>
              <ul class="text-dark">
                <li><p class="card-text text-dark">Create REST API</p></li>
                <li><p class="card-text text-dark">Implement API on FrontEnd</p></li> 
                <li><p class="card-text text-dark">Troubleshoot and Fix Bugs</p></li> 
                <li><p class="card-text text-dark">Maintain or improve existing data structures</p></li> 
                <li><p class="card-text text-dark">Maintenance website</p></li> 
              </ul>
              <a href="https://ggwp.id/media" target="_blank" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/experience/no-image.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-dark">Back End Developer at <strong>PT Qlola Pelanggan Indonesia</strong></h5>
              <p class="card-text text-dark">Bandung, Indonesia<br>Maret 2021 - May 2021</p>
              <ul class="text-dark">
                <li><p class="card-text text-dark">Create REST API</p></li>
                <li><p class="card-text text-dark">Optimation query</p></li> 
                <li><p class="card-text text-dark">Troubleshoot and Fix Bugs</p></li> 
              </ul>
              {{-- <a href="#" class="btn btn-primary">Detail</a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/experience/affinity.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-dark">Back End Developer at <strong>PT Affinity Digital Asia</strong></h5>
              <p class="card-text text-dark">Bandung, Indonesia<br>September 2018 - Juny 2019</p>
              <ul class="text-dark">
                <li><p class="card-text text-dark">Create REST API</p></li>
                <li><p class="card-text text-dark">Optimation query</p></li> 
                <li><p class="card-text text-dark">Fixing Bugs</p></li> 
              </ul>
              {{-- <a href="#" class="btn btn-primary">Detail</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection