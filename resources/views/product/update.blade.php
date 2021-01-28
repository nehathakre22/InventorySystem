@extends('nav')

@section('content')

<br><br><br>
<div class="container">
	<!-- Button trigger modal -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Product</h1>
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


       <form method="POST" action="{{url('update_field')}}">
          <div class="form-group">
              @csrf
              <input type="hidden" name="id" value="{{$data->id}}">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{$data->name}}" />
          </div>
          
          <div class="form-group">
              <label for="category">Category: </label>
              <input type="text" class="form-control" name="category" value="{{$data->category}}" />
          </div>

          <div class="form-group">
              <label for="colour">Colour: </label>
              <input type="text" class="form-control" name="colour" value="{{$data->colour}}" />
          </div>

          <div class="form-group">
              <label for="size">Size: </label>
              <input type="text" class="form-control" name="size" value="{{$data->size}}" />
          </div>

          <div class="form-group">
              <label for="weight">Weight: </label>
              <input type="text" class="form-control" name="weight" value="{{$data->weight}}" />
          </div>

          <div class="form-group">
              <label for="quantity">Quantity: </label>
              <input type="text" class="form-control" name="quantity" value="{{$data->quantity}}" />
          </div>

          <div class="form-group">
              <label for="return">Return: </label>
              <input type="text" class="form-control" name="return" value="{{$data->return}}" />
          </div>

          <div class="form-group">
              <label for="brand">Brand: </label>
              <input type="text" class="form-control" name="brand" value="{{$data->brand}}" />
          </div>

          <div class="form-group">
              <label for="avability">Avability: </label>
              <input type="text" class="form-control" name="avability" value="{{$data->avability}}" />
          </div>

          <div class="form-group">
              <label for="price">Price: </label>
              <input type="text" class="form-control" name="price" value="{{$data->price}}" />
          </div>

          <div class="form-group">
              <label for="remark">Remark: </label>
              <input type="text" class="form-control" name="remark" value="{{$data->remark}}" />
          </div>

        
          <div class="form-group">
              <label for="date_and_time">Date: </label>
              <input type="date" class="form-control" name="date_and_time" value="{{$data->date_and_time}}" />
          </div>

          <div class="form-group">
              <label for="delivery_date">Delivery Date: </label>
              <input type="date" class="form-control" name="delivery_date" value="{{$data->delivery_date}}" />
          </div>
         
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
      </div>
	
</div>
@endsection