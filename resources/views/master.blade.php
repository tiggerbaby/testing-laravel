<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="uft-8">
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<body>
<div class="container">
   <nav>
   	<ul class="nav nav-pills">
   		<li role="presentation"><a href="/">Home</a></li>
   		<li role="presentation" ><a href="/about">About</a></li>
   		<li role="presentation" ><a href="/contact">Contact</a></li>
   		<li role="presentation" class="active"><a href="/products">Products</a></li>
   	</ul>
   </nav>

@yield('content')

<footer>
   <p>Copyright</p>
</footer>
</body>
</div>

</html>