@extends('nav')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<br><br><br>
<div class="container">

  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Company</h1>
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
  Add Company
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add company</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form method="POST" action="{{url('store2')}}">
          <div class="form-group">
              @csrf
              <label for="name">Company Name:</label>
              <input type="text" class="form-control" name="name" required="required"/>
          </div>
          
          <div class="form-group">
              <label for="email">Email: </label>
              <input type="text" class="form-control" name="email" required="required"/>
          </div>

          <div class="form-group">
              <label for="contact">Contact: </label>
              <input type="text" class="form-control" name="contact" required="required"/>
          </div>

          <div class="form-group">
              <label for="address">Address: </label>
              <!-- <input class="form-control" name="address" required="required"/> -->
              <textarea rows="3" cols="50" name="address" class="form-control" required="required"/>
Enter text here...</textarea>

          </div>
         
          <button type="submit" class="btn btn-primary">Add Data</button>

      </form>
      </div>
      
    </div>
  </div>
</div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
	<th>Company name</th>
	<th>Email</th>
  <th>Contact</th>
  <th>Address</th>
	<th>Action</th>
	<th>Work</th>
	<tbody>
    @foreach($com as $co)
    <tr>
			<td>{{$co->name}}</td>
      <td>{{$co->email}}</td>
      <td>{{$co->contact}}</td>
      <td>{{$co->address}}</td>
			<td><a href="{{url('edit_company/'.$co['id'])}}" class="btn btn-primary"><i class='far fa fa-edit'></a></i>
			<a href="{{url('delete_company/'.$co['id'])}}" class="btn btn-danger"><i class='fas fa fa-trash'></i></a></td>
			<td>
				<label class="switch">
  				<input type="checkbox" checked>
 				 <span class="slider round"></span>
				</label>
      </td>
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