<!doctype html>
<html lang="en">

<head>
  <title>View Students</title>
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
    <!-- <div class="container"> -->
        
        <div class="table-responsive mx-auto w-75 my-5 py-5">
            <table class="table table-bordered table-dark">
                <thead class="">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i)
            <tr class="">
              <form action="/updatedelete" method="get">
                <td scope="row">
                 <input type="hidden" name="id" value="{{$i->id}}"> 
                 {{$i->id}}</td>
                 <td scope="col">
                  <input type="hidden" name="name" value="{{$i->name}}"> 
                  {{$i->name}}</td>
                <td ><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
                <td ><input type="submit" name="delete" value="Delete" class="btn btn-danger"></td>
                </form>
            </tr>
         @endforeach
        </tbody>
    </table>
</div>
<!-- </div> -->

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