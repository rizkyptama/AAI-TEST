@extends('template.index')
@section('content')	

<div class="row">
	<div class="col-xl-12 col-12 col-md-12">
		<div class="card card-stats">
			<div class="card-body">
				<div class="row">
					<div class="col">
						<select class="form-control" id="list" style="width:100%;" onchange="list()">
							<option value="0" hidden="">Select Category</option>
							<option value="toptv">Top rated TV Shows</option>
							<option value="ontheair">On the air TV Shows</option>
							<option value="airing">Airing today TV Shows</option>
							<option value="populartv">Popular TV Shows</option>
						</select>
					</div>
					<div class="col-auto">
						<div class="icon icon-shape bg-primary text-white rounded-circle shadow">
							<i class="ni ni-bullet-list-67"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header border-0">
				<div class="row align-items-center">
					<div class="col">
						<h3 class="mb-0" id="title"></h3>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<!-- Projects table -->
				<table class="table table-bordered align-items-center table-striped table-hover table-flush text-center datatables-print" id="tv">
					<thead class="thead-light">
						<tr>
							<th>No</th>
							<th>Title</th>
							<th>First Air Date</th>
							<th>Popularity</th>
						</tr>
					</thead>
					<tbody class="list">

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection