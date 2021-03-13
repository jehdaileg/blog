<h2 style="color: red;">
	Ici la liste des Clients actifs
</h2>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>NOM</th>
			<th>PRENOM</th>
		</tr>
	</thead>

	<tbody>
		@foreach($clients as $client)
		<tr>
			<td>{{$client['id']}}</td>
			<td>{{$client['nom']}}</td>
			<td>{{$client['prenom']}}</td>
			
		</tr>
		@endforeach
	</tbody>
	
</table>

