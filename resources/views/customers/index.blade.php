@extends('layouts.app')

@section('content')
<div class="container center">
	<a href="{{ route('customers.create') }}" target="_blank" class="btn btn-success">Add a customer</a>
	<div class="row">
		<div class="col-md-12">
			<table id="customers-table" class="display" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>公司</th>
						<th>分级</th>
						<th>地址</th>
						<th>网址</th>
						<th>联系人</th>
						<th>邮箱</th>
						<th>备忘录</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($customers as $customer)
					<tr>
						<td>
							<a target="_blank" href="{{ route('customers.show', $customer->id) }}">
							{{ $customer->id }}</a></td>
						<td>{{ $customer->company }}</td>
						<td>{{ $customer->rank }}</td>
						<td>{{ $customer->address }}</td>
						<td>{{ $customer->website }}</td>
						<td>{{ $customer->person }}</td>
						<td>{{ $customer->email }}</td>
						<td>{{ $customer->memo }}</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>公司</th>
						<th>地址</th>
						<th>网址</th>
						<th>联系人</th>
						<th>邮箱</th>
						<th>备忘录</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#customers-table').DataTable();
    });
  </script>
@endsection
