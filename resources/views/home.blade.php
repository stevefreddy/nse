<!DOCTYPE html>
<html>
<head>
	<title>National Stock Exchange</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/select2.min.js"></script>
</head>
<style type="text/css">
        body {
 background-image: url("public/background.jpg");
}
    </style>
<body>
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="jumbotron">
                <center><h1><u>National Stock Exchange</u></h1></center>
                
            </div>
        </div>
    </div>
    <center>
    	<form action="{{route('getCompanyData')}}">
<select id="company" styles="width: 200px" class="input-lg dynamic">
	<option></option>

	@foreach($companies as $company)
	<option id="{{$company->id}}"> {{$company->name}}</option>
	@endforeach
</select>
<input type="hidden" name="company_id" id="company_id">
<input class="btn btn-primary" type="submit" name="submit" id="submit" value="view">
</form>
</center>

</body>
</html>
<script type="text/javascript">
	$("#company").on('change',function(){
    var id=$(this).find('option:selected').attr('id');
    $('#company_id').val(id);

  });

	
</script>