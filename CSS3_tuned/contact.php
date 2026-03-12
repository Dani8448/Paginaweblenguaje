<!DOCTYPE HTML>
<html>
	<head>
		<title>CSS3_tuned</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,600|Source+Code+Pro" rel="stylesheet" />
		<!--[if lte IE 8]><script src="html5shiv.js" type="text/javascript"></script><![endif]-->
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>		
		<script src="js/skel.min.js">
		{
			prefix: 'css/style',
			preloadStyleSheets: true,
			resetCSS: true,
			boxModel: 'border',
			grid: { gutters: 30 },
			breakpoints: {
				wide: { range: '1200-', containers: 1140, grid: { gutters: 50 } },
				narrow: { range: '481-1199', containers: 960 },
				mobile: { range: '-480', containers: 'fluid', lockViewport: true, grid: { collapse: true } }
			}
		}
		</script>
		<script>
			$(function() {
				$('#main-nav > ul').dropotron({ 
					offsetY: -10
				});
			});
		</script>	
	</head>
	<body>
		<div id="header_container">		
		    <div class="container">
				<div id="header" class="row">
					<div class="12u">
						<h1><a href="index.html">My Website</a></h1>
						<nav id="main-nav" class="8u">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="apage.html">Page 2</a></li>
								<li><a href="anotherpage.html">Page 3</a></li>
								<li><a class="active" href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>	
        </div>		

		<div id="site_content">
			<div class="container">			
				<section class="12u">
					<h1>Contact</h1>
					<p>Send us a message.</p>

					<form method="POST" action="http://endor.josedomingo.org/josedom/resultado.php">
						<p>
							<label>Name:</label>
							<input type="text" name="nombre" required />
						</p>
						<p>
							<label>Email:</label>
							<input type="email" name="email" required />
						</p>
						<p>
							<label>Message:</label>
							<textarea name="mensaje" rows="5" required></textarea>
						</p>
						<p>
							<input type="submit" value="Send" />
						</p>
					</form>

					<h2>Contact Info</h2>
					<table border="1" cellpadding="10">
						<tr><th>Item</th><th>Value</th></tr>
						<tr><td>Email</td><td>info@example.com</td></tr>
						<tr><td>Phone</td><td>+34 123 456</td></tr>
					</table>
				</section>
			</div>
        </div>		
		
		<div id="footer_container">
			<div class="container">			
				<footer>
					<p>Copyright &copy; 2026</p>
				</footer>		
			</div>
        </div>		
			
	</body>
</html>
