@extends('main')
@section('title','about')
@section('container')

<ul class="list-unstyled">
  <li>NEWS</li>

</ul>

@for ($i=0; $i < 10; $i++)

<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x500" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Berita 1</p>
    <a href="#" class="btn btn-primary">Read More</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="https://unsplash.com/photos/rxlx9Yi0298" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">Berita 2</p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>
  </div>

@endfor
@endsection
