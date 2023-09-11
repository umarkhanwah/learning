<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <div class="container py-5">
<div class="row" style='height:50vh;'>

  <form action="/update" class="col-6 mx-auto" method="post">
    @csrf
    <input type="hidden" class="form-control" name="id" id="" value="{{$id}}"  placeholder="abc@mail.com">
        <div class="">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="" value="{{$name}}"  placeholder="abc@mail.com">
      
        </div>
     
        <div class="">
          <label for="" class="form-label">Age</label>
          <input type="text" class="form-control " name="age" id="" value="{{$age}}"  placeholder="abc@mail.com">
     
        </div>
        <div class="">
          <label for="" class="form-label">Contact Number</label>
          <input type="text" class="form-control" name="contact" id="" value="{{$contact}}"  placeholder="abc@mail.com">
   
        </div>
      
        <input type="submit" name='submit' value="Submit" class="btn btn-success" >
      </form>
    </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>