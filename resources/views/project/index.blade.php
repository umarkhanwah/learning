@extends('project.main')
@section('body')
<div class="container my-5">
  <div class="row">
      @foreach($products as $i)
      <div class="col-lg-4 mb-5 ">
          <div class="card text-start">
            <img class="card-img-top img-fluid w-100" src="images/{{$i->image}}" alt="Title">
            <div class="card-body">
              <h4 class="card-title">{{$i->name}}</h4>
              <p class="card-text">{{$i->description}}</p>
            </div>
          </div>
      </div>

  @endforeach
  </div>
</div>
@endsection
@section('id')
'#home'
@endsection