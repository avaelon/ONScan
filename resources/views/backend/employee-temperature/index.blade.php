    @extends('backend.layouts.dashboard.master')
    @section('title', 'Categories')

    @section('breadcrumb-title')
    <h3>Employee Temperature</h3>
    @endsection

    @section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Employee Temperature</li>
    <li class="breadcrumb-item active">Index</li>
    @endsection
    @section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/datatables.css')}}">
    @endsection

    @section('content')
    <div class="container-fluid">
	<div class="row">
		<!-- Zero Configuration  Starts-->
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>List of employee Temperature</h5>

				</div>
                <div class="employee-temp-list">
                    <form action="{{ route('admin.employeeTemperatures.store') }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div style="display:flex;">
                            <input class="mi-cloud-upload mr-3 mi-2x" style="margin-top:6px;" type="file" name="file"/>
                            <input type="submit" value="Import" class="btn btn-primary"/>
                        </div>
                    </form>
                </div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="basic-1">
							<thead>
								<tr>
									<th>CID</th>
									<th>Name</th>
									<th>Time</th>
									<th>Device</th>
									<th>Temperature</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								@forelse ($employee_temperatures as $employee_temp)
								<tr>
									<td>{{ $employee_temp->cid }}</td>
									<td>{{ $employee_temp->firstName }}</td>
									<td>{{ $employee_temp->datetime }}</td>
									<td>{{ $employee_temp->device }}</td>
									<td>{{ $employee_temp->temperature . '°C'}}</td>
                                    <td>{{ $employee_temp->created_at }}</td>
								</tr>
								@empty
								@endforelse

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('backend/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/datatable/datatables/datatable.custom.js')}}"></script>
@endpush
