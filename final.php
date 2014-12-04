<?
	$db = pg_connect("host=localhost dbname=yslasm user=yslasm password=mikematt44");
	$agencies = $db->query('SELECT * FROM agencies');
?>
<html> 
	<body> 
		<h1>Agencies</h1> 
			<table border="1" width="100%"> 
			<tr>
			<th>Id</th> 
			<th>Product</th> 
			<th>Description</th> 
			<th>Price</th> 
			</tr>
			
			<tr> 
			<td>@row.Id</td> 
			<td>@row.Name</td> 
			<td>@row.Description</td> 
			<td style="text-align:right">@row.Price</td> 
			</tr> 
			}
		</table> 
	</body> 
</html>