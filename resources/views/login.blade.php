<html>
<head>
	<title>Log In</title>
</head>
<body>
<form method="post">
    <p>username:
        <input type="text" name="username">
    </p>
    <p>
        password:
        <input type="password" name="password">
    </p>
<!--     <p>e-mail:
        <input type="text" name="email">
    </p> -->
    <input type="submit" value="log in">


</form>
@foreach ($errors ->all() as $error)
    <div> {{$error}}</div>
@endforeach
</body>
</html>