<table border="1">
	<thead>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>FB Profile</td>
			<td>Contact Number</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($crushes as $crush)

		<tr>
			<td>{{ $crush->first_name }}</td>
			<td>{{ $crush->last_name }}</td>
			<td><a href="{{ $crush->fb_profile_link }}">{{ $crush->fb_profile_link }}</td>
			<td>{{ $crush->contact_number }}</td>
			<td><a href="{{ route('crushes.id.edit', array('id'=>$crush->id)) }}">Edit</a></td>
			<td><a href="{{ route('crushes.id.destroy', array('id'=>$crush->id)) }}">Delete</a></td>
		</tr>
		@endforeach

		<tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><a href="{{ route('crushes.create') }}">Add New Crush</a></td>
			</tr>
		</tr>

	</tbody>
</table>