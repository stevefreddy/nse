<!DOCTYPE html>
<html>
<head>
  <title>View Company</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<div class="content-wrap cndn-wrap">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-inner">
            <div class="page-header-content-left">
                <div class="page-header-content button-block">
                    
                </div>
                <div class="page-header-content title-block">
                	<a href="{{ route('list_company') }}" type="button" class="btn-back btn-img"><img class="img-responsive" src="/nse/public/arrow.png" alt="Back" /></a> <center><h1 class="title"><b>Company Info</b></h1></center>
                </div><!-- Page Header Content -->
            </div><!-- Page Header Content Left -->
        </div><!-- Page Header Inner -->
    </div><!-- Page Header -->
        <input type="hidden" name="id" id="id" value="{{$company->id}}">
        <!-- Page Main Content -->
        <div class="page-main-content form-content type2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="page-form pb-80">
                            <div class="flex-wrap">
                                <div class="row">
                                    <div class="col-md-6 border-right">
                                        <table class="table-form-list">
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Company Name:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$company->name}}</span>
                                            </tr>
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Symbol:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$company->symbol}}</span>
                                            </tr>
                                        </table><!-- Table Form List -->
                                    </div><!-- Column -->
                                </div><!-- Row -->
                            </div><!-- Flex Wrap -->
                        </div><!-- Page Form -->
                    </div><!-- Column -->
                </div><!-- Row -->
            </div><!-- Container -->
        </div><!-- Page Main Content -->
    </form>
</div><!-- Content Wrap -->
	
</body>
</html>

<!-- Content Wrap -->
<style type="text/css">
.table-form-view-content {
    min-width: 0px !important;
}
}
</style>

