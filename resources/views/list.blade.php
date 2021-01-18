<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Company Info</title>
     <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="jumbotron">
                <center><h1><u>Company Info</u></h1></center>
                <a class="btn btn-success pull-right" href="{{ route('company_form')}}"> Add New</a>
                
            </div>
        </div>
    </div>
   
   
    <table class="table table-hover table-responsive">
        <tr bgcolor="#e5ff00">
            <th></th>
            <th>Company Name</th>
            <th>Symbol</th>
            <th>Action</th>
        </tr>
         @foreach ($companies as $company)
        <tr>
            <th>{{++$i}}</th>
        	<td>{{ $company->name }}</td>
        	<td>{{ $company->symbol }}</td>
            <td><a href="form/{{$company->id}}"><img src="{{ asset('public/edit.svg')}}"alt="image"></a>
            <a href="view/{{$company->id}}"><img src="{{ asset('public/view.svg')}}"alt="image"></a>
            <a href="delete/{{$company->id}}"><img src="{{ asset('public/delete.svg')}}"alt="image"></a>
            </td>
        </tr>
       @endforeach
    </table>
</body> 
</html>
