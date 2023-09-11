@extends('project.main')
@section('body')
<div class="container">
    <div class="row my-5">
        <div class="col-12 mx-auto" >
            <table class="table table-resonsive w-100 table-dark table-active table-striped ">
                <tr class="text-uppercase">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>IMAGE</th>
                    <th>description</th>
                    <th>Actions</th>
                </tr>
                @foreach($products as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>
                        <img src="images/{{$i->image}}" alt="" class="img-thumbnail w-50 bg-secondary">
                        </td>
                    <td>{{$i->description}}</td>
                    <td class="w-25">
                        <a href="{{route('prj.edit',$i->id)}}" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
@section('id')
'#form'
@endsection