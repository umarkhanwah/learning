<!doctype html>
<html lang="en">

<head>
  <title>Read</title>
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
    <div class="table-responsive container p-5 my-5">
        <table class="table table-dark">
            <style>
                .container{
                    border:10px solid red;
                    border-radius:10px;
                }
            </style>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $r)
                <tr class="">
                  <form action="/delete" method="get">
                    <td scope="row">
                    <input type="hidden" name="id" value=" {{$r->id}}">  {{$r->id}}
                    </td>
                    <td scope="row">
                    <input type="hidden" name="name" value=" {{$r->name}}">  {{$r->name}}
                    </td>
                    <td scope="row">
                    <input type="hidden" name="age" value=" {{$r->age}}">  {{$r->age}}
                    </td>
                    <td scope="row">
                    <input type="hidden" name="contact" value=" {{$r->contact}}">  {{$r->contact}}
                    </td>
                  
                    <td>
                      <input type="submit" value="Update" class="btn btn-primary" name="update">
                      <input type="submit" value="Delete" class="btn btn-danger" name="delete">
                    </td>
                   
                  </form>
                  </tr>
                @endforeach
            </tbody>
        </table>
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