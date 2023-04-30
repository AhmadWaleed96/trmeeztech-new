@extends('front.master')

@section('title', 'Jop -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>Job</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="image/Vector 1.png" alt="">
  <img class="interested-img interested-right" src="image/Vector 2.png" alt="">
</section>
<!-- end section title-page -->

<section class="job">
  <div class="title">
    <h2>OUR OPENINGS</h2>
    <div class="paragraph" style="width: 70%; margin: 0;">
      <p class="text-start">We are looking for talented individuals to join our teams and help bring ideas to life in the digital world.</p>
    </div>
  </div>

  <div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="card ">
      <h2>Project Management Officer</h2>
      <p>Location : <span>Al Ain, UAE</span></p>
      <p>End Date : <span>01/05/2023</span></p>
      <p>Purpose
        Provide project support to the technology project team and participate in development projects within defined scope and responsibility. Partner... <a href="">Read More</a></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Apply</button>
    </div>

    <div class="card ">
      <h2>Project Management Officer</h2>
      <p>Location : <span>Al Ain, UAE</span></p>
      <p>End Date : <span>01/05/2023</span></p>
      <p>Purpose
        Provide project support to the technology project team and participate in development projects within defined scope and responsibility. Partner... <a href="">Read More</a></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Apply</button>
    </div>

    <div class="card ">
      <h2>Project Management Officer</h2>
      <p>Location : <span>Al Ain, UAE</span></p>
      <p>End Date : <span>01/05/2023</span></p>
      <p>Purpose
        Provide project support to the technology project team and participate in development projects within defined scope and responsibility. Partner... <a href="">Read More</a></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Apply</button>
    </div>
  </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Apply  This job</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="name" class="col-form-label">name:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="phone" class="col-form-label">phone:</label>
            <input type="number" class="form-control" id="phone">
          </div>

          <div class="mb-3">
            <label for="email" class="col-form-label">email:</label>
            <input type="email" class="form-control" id="email">
          </div>

          <div class="mb-3">
            <label for="file" class="col-form-label">email:</label>
            <input type="file" class="form-control" id="file">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>

@endsection
