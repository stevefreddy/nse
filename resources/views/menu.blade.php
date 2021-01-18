<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style type="text/css">
	body {
 background-image: url("public/nse.jpg");
}
</style>
<body>
	<div class="jumbotron">
	<a class="btn btn-danger pull-right" href="{{ route('logout') }}">Logout</a>

		</div>
		<center>
			<a class="btn btn-warning" href="{{route('list_company')}}">Company Master</a>
			<a class="btn btn-success" href="{{route('search_company')}}">National Stock Exchange</a>	
		</center>
	
</body>
</html>