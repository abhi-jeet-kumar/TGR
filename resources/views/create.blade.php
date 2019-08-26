<html>
<head>
<title></title>
</head>
<body>
<h1>LOGIN</h1>
<form method="post" action="/logins">
@csrf
Username: <input type="text" name="username"><br/>
Email: <input type="text" name="email"><br/>
Password: <input type="password" name="password"><br/>
<input type="Submit">
</form>

@if(count($errors)>0){

<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error){
        <li>{{$error}}</li>
    }
    @endforeach
  </ul>
</div>
}
@endif
</body>
</html>

