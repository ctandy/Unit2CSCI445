@extends('layout')

@section('head')
	@parent
	{{-- page specific head information here --}}
	<title>Pets</title>
	
@stop

@section('content')
	@if(! $pets->isEmpty())
		<table >
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Type</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pets as $pet)
				<tr>
					<td>{{ $pet->name }}</td>
					<td>{{ $pet->age }}</td>
					<td>{{ $pet->type }}</td>
				</tr>
				@endforeach
			</tbody>			
		</table>
	@else
		<div class="no-content">No pets found.</div>
	@endif
@stop