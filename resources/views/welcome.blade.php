@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="col-lg-4 m-auto">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<table class="table">
							<thead>

								<th>Id</th>
								<th>Nama Kota</th>
								<th>Type</th>
								<th>Nama Provinsi</th>
								<th>Kode Pos</th>
							</thead>
							<tbody>
								@foreach ($kota as $tea)
									<tr>
										<td>{{ $tea['city_id'] }}</td>
										<td>{{ $tea['city_name'] }}</td>
										<td>{{ $tea['type'] }}</td>
										<td>{{ $tea['province'] }}</td>
										<td>{{ $tea['postal_code'] }}</td>
									</tr>
								@endforeach

							</tbody>

						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
