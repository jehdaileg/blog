<h1 style="color: blue;">Section Administrateurs</h1>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>NOM</th>
			<th>PRENOM</th>
		</tr>
	</thead>

	<tbody>
		@foreach($admins as $admin)
		<tr>
			<td>{{$admin['id']}}</td>
			<td>{{$admin['nom']}}</td>
			<td>{{$admin['prenom']}}</td>
		</tr>
		@endforeach
	</tbody>
</table>