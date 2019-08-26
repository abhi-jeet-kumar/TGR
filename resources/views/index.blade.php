
<html>
<head>
<title>index</title>
</head>
<body>
<h1>RECORDS</h1>
<table style="border:1px solid;">
<thead><tr><td><b>Username</b></td>
<td><b>Email</b></td>
<td><b>Password</b></td></tr></thead>
@foreach($demo as $rec)
<tr>
<td>{{ $rec->username }}</td>
<td>{{ $rec->email }}</td>
<td>{{ $rec->password }}</td>
</tr>
@endforeach     
</table>
</body>
</html>
