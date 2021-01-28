@extends('nav')

@section('content')
<br><br><br>
<div class="container">
	<!-- Button trigger modal -->


<!-- Modal -->

        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              
              <div class="card-body">
       <form method="POST" action="{{ url('update_data') }}">
          <div class="form-group">
              @csrf
              <input type="hidden" name="id" value="{{$data->id}}">
              <label for="brand">Brand:</label>
              <input type="text" class="form-control" name="brand" value="{{$data->brand}}" / >
          </div>
          
          <div class="form-group">
              <label for="category">Category: </label>
              <input type="text" class="form-control" name="category" value="{{$data->category}}" />
          </div>

          <div class="form-group">
              <label for="attributes">Attributes: </label>
              <input type="text" class="form-control" name="attr" value="{{$data->attr}}" />
          </div>
         
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
    </div>

  </div>
</div>
</div>
</div>
</section>
</div>
</div>

	


</div>
@endsection