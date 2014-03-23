
<head>


	<link rel="stylesheet" type="text/css" href="master.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 800px)" href="largeScreensMaster.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 800px)" href="smallScreensMaster.css">
	

</head>

<body>

	<div id="nav">
	
		<div id="title">
		
			Dual Economy
		
		</div>
		
		
		<div id=largeMenu>
		
			<div id="menu">
			
				<div class="item">Hem</div>
				<div class="item not-first">Bort</div>
				<div class="item not-first">Hej</div>
				<div class="item not-first">Då</div>
			
			</div>
			
			<div id="UserWelcome">
			
				<?php 
				
					include_once 'UserWelcome.php';
				
				?>
			
			</div>
		
		</div>
		
		<div id="dropDownMenuContainer">
		
			<div id="dropDownMenuButton">
			
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				
				

			</div>
			
			<div id=dropDownMenu>
				
					<div id="UserWelcome">
				
						<?php 
						
							include_once 'UserWelcome.php';
						
						?>
				
					</div>
				
					<div class="item">Hem</div>
					<div class="item not-first">Bort</div>
					<div class="item not-first">Hej</div>
					<div class="item not-first">Då</div>
				
				</div>
		
		</div>
	
	</div>


	<div id="LoginContainer">
	
		<?php
		
		include_once 'Login.php';
		
		?>
	
	</div>

	Hello World!
</body>