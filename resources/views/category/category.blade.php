@extends('nav')


@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<br><br><br>
<div class="container">

  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div>
    </div>

    
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  Add Category
</button>

<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form method="POST" action="{{ url('store') }}">
          <div class="form-group">
              @csrf
              <label for="brand">Brand:</label>
              <input type="text" class="form-control" name="brand" required="required"/>
          </div>
          
          <div class="form-group">
              <label for="category">Category: </label>
              <input type="text" class="form-control" name="category" required="required"/>
          </div>

          <div class="form-group">
              <label for="attr">Attributes: </label>
              <input type="text" class="form-control" name="attr" required="required"/>
          </div>
         
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
      </div>
      
    </div>
  </div>
</div>


<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Category</th>
                <th>Attribute</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($cat as $c)
            <tr>
                <td>{{$c->brand}}</td>
                <td>{{$c->category}}</td>
                <td>{{$c->attr}}</td>
                <td><a href="{{url('category/edit/'.$c['id'])}}" class="btn btn-primary"><i class='far fa fa-edit'></a></i>
                <a href="{{url('delete/'.$c['id'])}}" class="btn btn-danger"><i class='fas fa fa-trash'></i></a></td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection

