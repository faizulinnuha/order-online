<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .4rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		}
		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: rgba(221, 72, 20, .6);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(221, 72, 20, .8);
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgba(221, 72, 20, 1);
		}
		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
		}
	</style>

    <title>Data Order</title>
  </head>
  <body>
  	<!-- HEADER: MENU + HEROE SECTION -->
	<header>

		<div class="menu">
			<ul>
				<li class="logo"><a href="#" target="_blank" style="color:#1e106d; font-size: 26px;">Order Online</a>
				</li>
				<li class="menu-toggle">
					<button onclick="toggleMenu();">&#9776;</button>
				</li>
				<li class="menu-item hidden"><a href="http://localhost/order-online/public/">Halaman Depan</a></li>
				<li class="menu-item hidden"><a href="http://localhost/order-online/public/index.php/orders" target="_blank">Halaman Order</a></li>
			</ul>
		</div>

	</header>


  	<div class="container-fluid pt-2">
	    <h2 class="text-center pb-3 pt-3">Detail Order</h2>
	    <table class="table table-bordered table-stripped" style="width:644px">
	    	<tr>
	    		<td style="width:200px">ID Pemesanan</td>
	    		<td><a href=""><?=$id_order;?></td>
	    	</tr>
	    	<tr>
	    		<td style="width:200px">Nama Pelanggan</td>
	    		<td><?=$customer->first_name . ' ' . $customer->last_name;?></td>
	    	</tr>
	    	<tr>
	    		<td style="width:200px">Telepon</td>
	    		<td><?=$customer->business_phone;?></td>
	    	</tr>
	    	<tr>
	    		<td style="width:200px">Alamat Lengkap</td>
	    		<td><?=$customer->address . ', ' . $customer->city . ', ' . $customer->state_province . ', ' . $customer->country_region . ' - ' . $customer->zip_postal_code;?></td>
	    	</tr>
	    </table>

	    <table id="all_data" class="table table-bordered table-stripped mb-5" style="width:100%">
	    	<tr>
	    		<th class="text-center">No</th>
	    		<th class="text-center">Detail Produk</th>
	    		<th class="text-center">Kategori</th>
	    		<th class="text-center">Harga</th>
	    		<th class="text-center">Quantity</th>
	    		<th class="text-center">Sub Total</th>
	    	</tr>

	    <?php

	    	$no = 1;
	    	$total = 0;
	    	foreach ($orders as $row) {
	    		$qty = $row['quantity'];
	    		$price = $row['unit_price'];
	    		$sub_total = $qty * $price;
	    		$total += $sub_total;
		?>

			<tr>
	    		<td class="text-center"><?=$no++;?></td>
	    		<td><?=$row['product_code'] . ' &nbsp;|&nbsp; ' . $row['product_name'];?></td>
	    		<td><?=$row['category'];?></td>
	    		<td class="text-right">$ <?=$price;?></td>
	    		<td class="text-center"><?=$qty;?></td>
	    		<td class="text-right">$ <?=$sub_total;?></td>
	    	</tr>

		<?php
	    	}
	    ?>
	    	<tr>
	    		<th class="text-right" colspan="5">Total</th>
	    		<th class="text-right">$ <?=$total;?></th>
	    	</tr>
	    </table>
	</div>

	<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

	<footer>

		<div class="copyrights  pt-4 pb-1">

			<p>Faiz Ulin Nuha &copy; <?= date('Y') ?></p>

		</div>

	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </body>
</html>