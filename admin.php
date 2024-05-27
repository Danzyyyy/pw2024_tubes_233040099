<?php

require 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link href="adminStyle.css" rel="stylesheet" type="text/css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

<div class="kotak">
	</div>

	
		<nav class="navs">
			<span style="font-size:30px; color:red; padding-left:20px; cursor:pointer" onclick="openNav()">&#9776;</span>
			<div class="logo"><a href="dashboard.php">OFFLINE POCKET<span style="font-size:30px; color:red;" class="material-symbols-outlined" >
			playing_cards</span></a></div>
			<div class="moto">"Upgrade Your Game, Upgrade Your Wallet.</div>
			
			
			<!-- check if user have logged in -->
			<div class="nav-links">
					<ul>
					<li><form><input type="text" id="searchInput" name="search" placeholder="Search.." onkeydown="handleSearch(event)" ></form></li>
						
						<li>

						


						


							<!--
							<div class="sub-menu-1">
								<ul>
									<li><a href='#logut'>Log out</a></li>
								</ul>
							</div>
						-->
							</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
					</ul>
			

						<!-- if user have not logged in -->
			
			
				<ul>
					<li><form><input type="text" id="searchInput" name="search" placeholder="Search.." onkeydown="handleSearch(event)" ></form></li>
					
					
					
				</ul>
			</div>
		</nav>
		
		
		<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		
			
				<div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
				
				<a  style="background-color:white; color:black;" class="w3-bar-item w3-button"></a>
				
				</div>
				<a href="dashboard.php">Dashboard</a>
		<a href="admin.php">Game Data</a>
		<a href="adminEditUser.php">User Data</a>
		<a href="transactionList.php">Transaction List</a>
	</div>

<div class="middle-content">
	<div class="left-part">
		<div class="left-part-stick">
			<div class="edit-section">
			<div class="container">
					<h2>Insert Game Data</h2>
					<form action="admin.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="game_name">Game Name:</label>
							<input type="text" name="game_name" id="game_name" required>
						</div>
						<div class="form-group">
  <label for="game_type">Game Type:</label>
  <div class="saja2">
    <input type="button" class="btn-type" value="MOBILE" onclick="setGameType('MOBILE')" required>
    <input type="button" class="btn-type" value="PC" onclick="setGameType('PC')" required>
    <input type="button" class="btn-type" value="CONSOLE" onclick="setGameType('CONSOLE')" required>
  </div>
  <input type="hidden" name="game_type" id="game_type" required>
</div>
						<div class="form-group">
						<label for="game_image">Game Image:</label>
							<input type="file" name="game_image[]" id="game_image" placeholder="Game Name" multiple required>
						</div>
						<div class="form-group">
		<label for="game_banner">Game Banner:</label>
		<input type="file" name="game_banner[]" id="game_banner" placeholder="Game Banner" multiple required>
	</div>
						
						<div class="form-group">
							<label for="game_type">Ingame Currency Name:</label>
							<input type="text" name="currency_name" id="currency_name"  required>
						</div>
						<div class="form-group">
							<label for="currency_price1"> 1/ Ingame Currency | Real Currency :</label>
							<div class="saja">
								<input type="text" name="currency_price1" id="currency_price1" required>
								<ion-icon name="reorder-two-outline"></ion-icon>
								<input type="text" name="real_price1" id="real_price1" required>
							</div>
						</div>
						<div class="form-group">
							<label for="currency_price2"> 2/ Ingame Currency | Real Currency :</label>
							<div class="saja">
								<input type="text" name="currency_price2" id="currency_price2" >
								<ion-icon name="reorder-two-outline"></ion-icon>
								<input type="text" name="real_price2" id="real_price2" >
							</div>
						</div>
						<div class="form-group">
							<label for="currency_price3"> 3/ Ingame Currency | Real Currency :</label>
							<div class="saja">
								<input type="text" name="currency_price3" id="currency_price3" >
								<ion-icon name="reorder-two-outline"></ion-icon>
								<input type="text" name="real_price3" id="real_price3" >
							</div>
						</div>
						<div class="form-group">
							<label for="currency_price4"> 4/ Ingame Currency | Real Currency :</label>
							<div class="saja">
								<input type="text" name="currency_price4" id="currency_price4" >
								<ion-icon name="reorder-two-outline"></ion-icon>
								<input type="text" name="real_price4" id="real_price4" >
							</div>
						</div>
						<div class="form-group">
							<label for="currency_price5"> 5/ Ingame Currency | Real Currency :</label>
							<div class="saja">
								<input type="text" name="currency_price5" id="currency_price5" >
								<ion-icon name="reorder-two-outline"></ion-icon>
								<input type="text" name="real_price5" id="real_price5" >
							</div>
						</div>
						<button type="submit" class="btn-insert">Insert</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>

	<div class="right-part">
		<div class="product-all">
			<div class="product">
				<div class="title-product">
					<h2 class="product-list_title">GAME DATA</h2>
				</div>
				<?php
				// Check if the form is submitted

					

					
					// Get the form data

					// Perform any necessary validation or sanitization of the data
					

					// Perform database insertion
					// Perform database insertion

					

					// Close the database connection
				

				// Retrieve and display the game data
				// Close the database connection

				// Check if the form is submitted for deletion

					// Delete the corresponding record from the database

					// Close the database connection
				?>
			</div>
			
		</div>
	</div>
</div>

<script>

function setGameType(gameType) {
  var input = document.getElementById('game_type');
  input.value = gameType;
  
  var buttons = document.getElementsByClassName('btn-type');
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove('selected');
  }
  
  event.target.classList.add('selected');
}



var productTiles = document.getElementsByClassName('product-list_item');
		var originalDisplayStyle = []; // Array to store the original display style of each product tile

		function updateSectionDisplay(sectionId) {
			for (var section in sections) {
				sections[section].style.display = section === sectionId ? 'block' : 'none';
			}
		}

		btnAll.addEventListener('click', function () {
			updateSectionDisplay('all-section');
			showAllProducts();
		});

		btnMobile.addEventListener('click', function () {
			updateSectionDisplay('mobile-section');
			showAllProducts();
		});

		btnPc.addEventListener('click', function () {
			updateSectionDisplay('pc-section');
			showAllProducts();
		});

		btnConsole.addEventListener('click', function () {
			updateSectionDisplay('console-section');
			showAllProducts();
		});

		function showAllProducts() {
			for (var i = 0; i < productTiles.length; i++) {
				productTiles[i].style.display = originalDisplayStyle[i] || 'flex';
			}
		}

		// Store the original display style of each product tile
		for (var i = 0; i < productTiles.length; i++) {
			originalDisplayStyle.push(productTiles[i].style.display);
		}
		
		// Reload page function
  function reloadPage() {
    location.reload();
  }

		// Searching
		function handleSearch(event) {
			if (event.key === "Enter") {
				event.preventDefault(); // Prevent form submission and page reload

				// Get the input value
				var searchValue = document.getElementById('searchInput').value;

				// Loop through each product tile and check if it matches the search value
				for (var i = 0; i < productTiles.length; i++) {
					var title = productTiles[i].querySelector('.product-tile_item-title').innerHTML;

					// If the search value is found in the title, show the product tile, otherwise hide it
					if (title.toLowerCase().includes(searchValue.toLowerCase())) {
						productTiles[i].style.display = 'flex';
					} else {
						productTiles[i].style.display = 'none';
					}
				}

				return false; // Prevent form submission and page reload
			}
		}

		// Add an event listener to the search input
		document.getElementById('searchInput').addEventListener('input', handleSearch);
		
		
  





	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("all").style.opacity = "0.3";
		document.body.classList.add("sidenav-open");
	}
	
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("all").style.opacity = "1";
		document.body.classList.remove("sidenav-open");
	}
	
	 function confirmLogout() {
      if (window.confirm('Are you sure you want to logout?')) {
        window.location.href = 'logout.php'; // Redirect to the PHP script that handles the logout
      } else {
        // User canceled the logout, do nothing or add some action if required
      }
    }
	
	// Login & Register
		const wrapper = document.querySelector('.wrapper');
		const loginLink = document.querySelector('.login-link');
		const registerLink = document.querySelector('.register-link');
		const btnPopup = document.querySelector('.btnLogin-popup');
		const iconClose = document.querySelector('.icon-close');
		const btnLogin = document.getElementById('login');
		const btnLogout = document.getElementById('logout');

		registerLink.addEventListener('click', () => { wrapper.classList.add('active'); });
		loginLink.addEventListener('click', () => { wrapper.classList.remove('active'); });
		btnPopup.addEventListener('click', () => {
			wrapper.classList.add('active-popup');
			document.getElementById("myForm").style.display = "flex";
			document.getElementById("all").style.opacity = "0.1";
		});
		iconClose.addEventListener('click', () => {
			wrapper.classList.remove('active-popup');
			document.getElementById("myForm").style.display = "none";
			document.getElementById("all").style.opacity = "1";
		});
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
