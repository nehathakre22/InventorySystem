@extends('nav')


@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<br><br><br>
<div class="container col-sm-8">

  <!-- <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div>
    </div> -->

    
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  Add Product
</button>

<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form method="POST" action="{{ url('store1') }}">
          <div class="form-group">
              @csrf
              <label for="name">Company Name:</label>
              <input type="text" class="form-control" name="name" required="required" />
          </div>
          
          <div class="form-group">
              <label for="category">Category: </label>
              <input type="text" class="form-control" name="category" required="required"/>
          </div>

          <div class="form-group">
              <label for="colour">Colour: </label>
              <input type="text" class="form-control" name="colour" required="required"/>
          </div>

          <div class="form-group">
              <label for="size">Size: </label>
              <input type="text" class="form-control" name="size" required="required"/>
          </div>

          <div class="form-group">
              <label for="weight">Weight: </label>
              <input type="text" class="form-control" name="weight" required="required"/>
          </div>

          <div class="form-group">
              <label for="quantity">Quantity: </label>
              <input type="number" id="myNumber" class="form-control" name="quantity" required="required"/>
          </div>

          <div class="form-group">
              <label for="brand">Brand: </label>
              <input type="text" class="form-control" name="brand" required="required"/>
          </div>

          <div class="form-group">
              <label for="avability">Avability: </label>
              <input type="text" class="form-control" name="avability" required="required"/>
          </div>

          <div class="form-group">
              <label for="price">Price: </label>
              <input type="text" class="form-control" name="price" required="required"/>
          </div>

          <div class="form-group">
              <label for="remark">Remark: </label>
              <textarea rows="3" cols="50" name="remark" class="form-control" />
Enter text here...</textarea>

          </div>

          <div class="form-group">
              <label for="date">Date: </label>
              <input type="date" class="form-control" name="date_and_time" required="required"/>
          </div>

           <div class="form-group">
              <label for="date">Delivery Date: </label>
              <input type="date" class="form-control" name="delivery_date" required="required"/>
          </div>
         
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
      </div>
      
    </div>
  </div>
</div>


<table id="example" class="table table-striped table-bordered" style="overflow-x:auto;">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Category</th>
                <th>Colour</th>
                <th>Size</th>
                <th>Weight</th>
                <th>Quantity</th>
                <th>Brand</th>
                <th>Avability</th>
                <th>Price</th>
                <th>Remark</th>
                <th>Date</th>
                <th>Delivery Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($prod as $p)
            <tr>
                <td>{{$p->name}}</td>
                <td>{{$p->category}}</td>
                <td>{{$p->colour}}</td>
                <td>{{$p->size}}</td>
                <td>{{$p->weight}}</td>
                <td>{{$p->quantity}}</td>
                <td>{{$p->brand}}</td>
                <td>{{$p->avability}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->remark}}</td>
                <td>{{$p->date_and_time}}</td>
                <td>{{$p->delivery_date}}</td>
                <td><a href="{{url('product/update/'.$p['id'])}}" class="btn btn-primary"><i class='far fa fa-edit'></a></i>
                <a href="{{url('delete_field/'.$p['id'])}}" class="btn btn-danger"><i class='fas fa fa-trash'></i></a></td>
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

<script>
function myFunction() {
  document.getElementById("myNumber").stepUp(5);
}
</script>
@endsection

