@extends('project.main')
@section('body')
<style>
  #bd{
border: 2px solid rgb(170, 169, 169);

transition: 0.5s all;
}
</style>
<div class="container" >

    <div class="row justify-content-center align-items-center my-5 g-2" >

        <div class="col-lg-8 p-3"id="bd">

<form action="{{route('prj.update',8)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="mb-3">
 <label for="name" class="form-label">Name</label>
 <input type="text"
   class="form-control" name="name" id="name" value="{{$project->all('name')}}" aria-describedby="helpId" placeholder="Enter Product's Name Here" title="What is your products name?">
 @error('name')
   <small id="helpId" class="form-text text-danger">{{$message}}</small>
@enderror
</div>
<div class="mb-3">
  <label for="image" class="form-label">Insert Image</label>
  <input type="file" class="form-control" name="image" id="image" placeholder="Insert Image Here" title="Insert an Image Here" aria-describedby="fileHelpId">
  @error('image')
  <small id="helpId" class="form-text text-danger">{{$message}}</small>
  @enderror
  <div id="fileHelpId" class="form-text">You will have to provide an image of your product to show how your product looks like</div>
</div>
<div class="mb-3">
  <label for="description" class="form-label">Description</label>
  <textarea class="form-control h-100" name="description" id="description" title="define your product in 2 or 3 lines" rows="5"></textarea>
  @error('description')
  <small id="helpId" class="form-text text-danger">{{$message}}</small>
  @enderror
</div>

<input type="submit" value="Add Product" name="submit" class="btn btn-success">
</form>
</div>
</div>
</div>
<script>
function bd(){
        
        var bd = document.getElementById("bd");
        bd.style.boxShadow = "0 0 50px rgb(168, 168, 168)" ;
        bd.style.borderRadius = "20px" ;
        bd.style.border = "none" ;
      }
      function bd2(){
        var bd = document.getElementById("bd");
        bd.style.boxShadow = "none" ;
        bd.style.border = "2px solid rgb(170, 169, 169)" ;
        bd.style.borderRadius = "0" ;
    }
</script>
@endsection