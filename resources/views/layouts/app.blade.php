<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('page-title') | {{ settings('app_name') }}</title>
	


<link rel="stylesheet" href="/assets/css/jquery-editable.css">
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

@yield('styles')
</head>

<div class="page-content">
        <div class="container-fluid">
			@yield('content')
		</div>
</div>


<script src="/assets/js/jquery-3.3.1.min.js"></script>


<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/app.js"></script>

<script src="/assets/js/jquery-editable-poshytip.js"></script>


@yield('scripts')
	
	
</body>


</html>
