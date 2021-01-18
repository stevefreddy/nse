<!DOCTYPE html>
<html>
<head>
  <title>Add Company</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style type="text/css">
    body {
 background-image: url("public/background.jpg");
}
  </style>
<body>

<center>
<form method="post" action="{{route('save_company')}}" enctype="multipart/form-data">
 @csrf
 <div class="container">


 <input type="hidden" name="id" value="{{$company->id}}">

 <div class="form-group">
  <label class="col-md-4 text-right">Company Name</label>
  <div class="col-md-8">
   <input type="text" name="name" class="form-control input-lg" value="{{$company->name}}" required />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Symbol</label>
  <div class="col-md-8">
   <input type="text" name="symbol" class="form-control input-lg"  value="{{$company->symbol}}" required/>
  </div>
 </div>
 <br />
 <br />
 <br />
  <div class="form-group">
  <label>Market Cap</label>
   <input type="text" name="market_cap" class="input-lg"  value="{{$company_ratio->market_cap}}" required/>

  <label>Current Market Price</label>
   <input type="text" name="current_market_price" class="input-lg"  value="{{$company_ratio->current_market_price}}" required/> <br><br><br>
  <label>Stock P/E</label>
   <input type="text" name="stock_pe" class="input-lg"  value="{{$company_ratio->stock_pe}}" required/>
  <label>Dividen Yield</label>
   <input type="text" name="dividend_yield" class="input-lg"  value="{{$company_ratio->dividend_yield}}" required/><br><br><br>
  <label>ROCE</label>
   <input type="text" name="roce" class="input-lg"  value="{{$company_ratio->roce}}" required/>
  <label>ROE</label>
   <input type="text" name="roe" class="input-lg"  value="{{$company_ratio->roe}}" required/><br><br><br>
  <label>Debt to Equity</label>
   <input type="text" name="debt_to_equity" class="input-lg"  value="{{$company_ratio->debt_to_equity}}" required/>
  <label>EPS</label>
   <input type="text" name="eps" class="input-lg"  value="{{$company_ratio->eps}}" required/><br><br><br>
  <label>Reserves</label>
   <input type="text" name="reserves" class="input-lg"  value="{{$company_ratio->reserves}}" required/>
  <label>Debt</label>
   <input type="text" name="debt" class="input-lg"  value="{{$company_ratio->debt}}" required />

 </div>
 <div class="form-group text-center">
  <a href="{{ route('list_company') }}" class="btn btn-danger">Back</a>
  <input type="submit" name="add" class="btn btn-primary" value="Submit" />
 </div>
</div>
</form>
</center>
</body>
</html>


