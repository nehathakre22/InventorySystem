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
            <h1 class="m-0 text-dark">Edit Company</h1>
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

<div class="container">

	<form method="POST" action="{{url('update_company')}}">
          <div class="form-group">
              @csrf
              <input type="hidden" name="id" value="{{$data->id}}">
              <label for="name">Company Name:</label>
              <input type="text" class="form-control" name="name" value="{{$data->name}}" />
          </div>
          
          <div class="form-group">
              <label for="email">Email: </label>
              <input type="text" class="form-control" name="email" value="{{$data->email}}" />
          </div>

          <div class="form-group">
              <label for="contact">Contact: </label>
              <input type="text" class="form-control" name="contact" value="{{$data->contact}}" />
          </div>

          <div class="form-group">
              <label for="address">Address: </label>
              <input type="text" class="form-control" name="address" value="{{$data->address}}" />
          </div>
         
          <button type="submit" class="btn btn-primary">Update Data</button>

      </form>

</div>

@endsection