<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
 background-image: url("public/background.jpg");
}
	</style>
</head>
<body>
	<center>
	<h1>{{ $company->name }}</h1>
	<h2>Symbol: {{ $company->symbol }}</h2>
</center>

  <div class="jumbotron">
    <div class="page-form pb-80 info">
        <div class="flex-wrap">
            <div class="info-wrap">
                <p class="info-title"> <b>Market Cap:</b> &nbsp; {{ $company_ratio->market_cap}} </p>
                <p class="info-title"><b>Current Market Price: &nbsp; </b>{{ $company_ratio->current_market_price}}</p>
                <p class="info-title"><b>Stock P/E: &nbsp;</b> {{ $company_ratio->stock_pe}}</p>
                <p class="info-title"><b>Dividend Yield: &nbsp;</b> {{ $company_ratio->dividend_yield}}</p>
                <p class="info-title"><b>ROCE: &nbsp;</b> {{ $company_ratio->roce}}</p>
                <p class="info-title"><b>ROE: &nbsp;</b> {{ $company_ratio->roe}}</p>
                <p class="info-title"><b>Debt to Equity: &nbsp; </b>{{ $company_ratio->debt_to_equity}}</p>
                <p class="info-title"><b>EPS: &nbsp;</b> {{ $company_ratio->eps}}</p>
                <p class="info-title"><b>Reserves: &nbsp;</b> {{ $company_ratio->reserves}}</p>
                <p class="info-title"><b>Debt: &nbsp;</b> {{ $company_ratio->debt}}</p>
            </div><!-- Info Wrap -->
        </div><!-- Flex Wrap -->
    </div><!-- Page Form -->
  </div><!-- Column -->
</body>
</html>