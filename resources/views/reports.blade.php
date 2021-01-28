@extends('nav')

@section('content')

<body>
	<button onclick="display()" style="cursor:pointer">Click to print</button>
	<script>
		function display()
		{
			window.print();
		}
	</script>
</body>

<br><br><br>
<div class="container">

  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Reports</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div>
    </div>

<div class="container">
	
<div class="filter-row ">
                <form action="{{url('report_such')}}" method="post" class="form-inline p-2" id="report" name="report">
                    
                    @csrf
                    <div class="col-md-3 ml-auto">
                        <label class="focus-label font-weight-bold">From Date:</label>
                        <div class="form-group">
                            
                            <div>
                                <input class="form-control" type="date" required="true" name="from_date" id="from_date"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="focus-label font-weight-bold">To Date:</label>
                        <div class="form-group">
                            <input class="form-control" type="date" required="true" name="to_date" id="to_date"/>
                        </div>
                    </div>
                    <!--div class="col-md-3"-->
                        
                    <div class="form-group">
                        <button type="submit" class=" btn-primary btn-sm" id="searchBtn" name="search">
                            Search
                        </button>
                    </div>
                    </div>
                </form>
            </div>


<table class="table col-12">
	<th>Company name</th>
	<th>Category</th>
    <th>Brand</th>
	<th>Quantity</th>
	<th>Date</th>
	<th>Price</th>
	@foreach($report1 as $i)
	<tbody>

		<tr>
			<td>{{ $i->name }}</td>
			<td>{{ $i->category }}</td>
			<td>{{ $i->brand }}</td>
			<td>{{ $i->quantity }}</td>
			<td>{{ $i->date_and_time }}</td>
			<td>{{ $i->price }}</td>
		</tr>
	</tbody>
	@endforeach

</table>

</div>

@endsection