<!DOCTYPE html>

<html>
	<head>
		<title>Situs Belanja Panci Online</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

		
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu" style="position:absolute;"><span>Menu</span></a>
					<a href="#"><span><h1 style="margin-left:30px;font-weight:normal;">Masnumi</h1></span></a>
				</nav>
				
				<nav class="right">
                   
                   <form method="get" action="/cariproduk">
                   	 <a href="#"> <input type="text" name="search" placeholder="Cari produk masnumi" autocomplete="off"></a>
                    <a href="#"><button type="submit">Cari</button></a>
				

                   </form> 
                  </nav>
			</header>

		
		<!-- Scripts -->
			<script src="{{ asset('js/jquery.min.js')}}"></script>
			<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('js/skel.min.js')}}"></script>
			<script src="{{ asset('js/util.js')}}"></script>
			<script src="{{ asset('js/main.js')}}"></script>
	</body>
</html>