@extends('navigation')

@section('content')

	<table class="table">
	<th>Company name</th>
	<th>Category</th>
  <th>Colour</th>
  <th>Size</th>
  <th>Weight</th>
  <th>Quantity</th>
  <th>Brand</th>
  <th>Avability</th>
  <th>Price</th>
  <th>Date</th>
  

	<th>Action</th>
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
      		<td>{{$p->date_and_time}}</td>
			<td>
        <a href="{{url('product/update/'.$p['id'])}}" class="btn btn-primary"><i class='far fa fa-edit'></a></i>
			  <a href="{{url('delete_field/'.$p['id'])}}" class="btn btn-danger"><i class='fas fa fa-trash'></i></a>
      </td>
		</tr>
    @endforeach
	</tbody>

</table>
</div>

@endsection