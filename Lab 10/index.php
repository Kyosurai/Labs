<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Awesome News</title>
		<link href="StyleSheet.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		
		<style>
			.main {
				padding-left: 75px;
				padding-right: 75px;
			}
		
			.slideshow-container {
				margin-top: 35px;
				margin-bottom: 25px;
				position: relative;
				text-align: center;
			}
			
			.leftarrow, .rightarrow {
				cursor: pointer;
				position: absolute;
				top: 43%;
				width: auto;
				margin-top: -22px;
				padding: 16px;
				color: #333;
				font-weight: bold;
				font-size: 18px;
				user-select: none;
			}
			
			.rightarrow {
				right: 0;
			}
			
			.leftarrow:hover, .rightarrow:hover {
			  background-color: rgba(0,0,0,0.8);
			  color: white;
			}
			
			.slidedots {
				width: 100%;
				text-align: center;
			}
			
			.dot {
			  height: 15px;
			  width: 15px;
			  background-color: #bbb;
			  border-radius: 50%;
			  display: inline-block;
			  cursor: pointer;
			}
			
			.dot:hover {
				background-color: #5a5b5c;
			}
			
			.activedot {
				height: 15px;
				width: 15px;
				background-color: #5a5b5c;
				border-radius: 50%;
				display: inline-block;
				cursor: pointer;
			}
			
			
			.info-corner {
				margin-top: 40px;
				margin-bottom: 45px;
			}
			
			.tab-container {
				display: flex;
				flex-direction: row;
				height: 250px;
				border-radius: 5px;
				border-style: solid;
				border-color: #cccccc;
				border-width: 1px;
			}
			
			.tab {
				display: flex;
				flex-direction: column;
				border-right: solid;
				border-color: #cccccc;
				border-width: 1px;
				background-color: #4c96d7;
				color: #ffffff;
			}
			
			.tabcontent {
				padding: 5px 25px;
			}
			
			.tab ul {
				list-style-type: none;
				padding: 0;
			}

			.tab li a {
				display: block;
				padding: 14px 16px;
			}

			.tab li a:hover {
				background-color: #1761a0;
				color: #ffffff;
				cursor: pointer;
			}

			.tab .active {
				background-color: #d6e6f5;
				color: #000000;
			}
			
			.categories {
				margin-top: 35px;
				margin-bottom: 35px;
				text-align: center;
			}
			
			.cat-container {
				display: flex;
				flex-direction: row;
			}
			
			.one-cat {
				width: 25%;
			}
			
			.one-cat a {
				text-decoration: none;
				color: #000000;
			}
			
			.one-cat a:hover {
				text-decoration: underline;
			}
			
			.one-cat img {
				border-radius: 50%;
				width: 200px;
			}
		</style>
	</head>
	
	<body>
		<?php	echo "<div class='page-container'>";
				echo "<div class='content-wrap'>";
				//Header Start
				echo "<div class='header'>";
				//User Login/Register
				echo "<div class='header-row1'>";
				echo "<a href='login.php'>Sign In</a>";
				echo "&nbsp;|&nbsp;";
				echo "<a href='register.php'>Register</a>";
				echo "</div>";

				echo "<div class='header-row2'>";
				echo "<div class='header-column1'>";
				//Logo & Searchbar
				echo "<div class='header-subrow1'>";
				echo "<a href='index.php'><img src='pictures/logo.png' width='275'></a>";
				echo "<input type='text' placeholder='Search'><button type='button'><i class='fa fa-search'></i></button>";
				echo "</div>";

				//Navigation Bar
				echo "<div class='header-subrow2'>";
				echo "<ul>";
				echo "<li><a href='index.php'>Main</a></li>";
				echo "<li><a href='news.php'>All News</a></li>";
				echo "</ul>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				//Header End

				//Main Start
				echo "<div class='main'>";
				echo "<div class='slideshow-container'>";
				echo "<a class='leftarrow' onclick='changeSlideByArrow(-1)'>&#10094;</a>";
				echo "<img name='slide' width='100%'>";
				echo "<a class='rightarrow' onclick='changeSlideByArrow(1)'>&#10095;</a>";
				echo "<span id='dot0' class='activedot' onclick='changeSlideByDot(0)'></span>&nbsp;";
				echo "<span id='dot1' class='dot' onclick='changeSlideByDot(1)'></span>&nbsp;";
				echo "<span id='dot2' class='dot' onclick='changeSlideByDot(2)'></span>&nbsp;";
				echo "</div>";

				echo "<div class='info-corner'>";
				echo "<h2>Information Corner</h2>";
				echo "<div class='tab-container'>";
				echo "<div class='tab'>";
				echo "<ul>";
				echo "<li><a class='tablinks' onclick='openTab(event, \"operating-hours\")' id='defaultOpen'>Change of Operating Hours</a></li>";
				echo "<li><a class='tablinks' onclick='openTab(event, \"promotion\")'>Black Friday Promotion</a></li>";
				echo "<li><a class='tablinks' onclick='openTab(event, \"membership\")'>Awesome News Membership</a></li>";
				echo "</ul>";
				echo "</div>";

				echo "<div class='tabcontent-space'>";
				echo "<div id='operating-hours' class='tabcontent'>";
				echo "<h3>Change of Operating Hours</h3>";
				echo "<p>Good news for news readers - We've heard your feedback and decided to change our operating hours to 24hours.</p>";
				echo "<p>Here's our new operating hours:<br>";
				echo "Everyday 24hours</p>";
				echo "<p>If you have some other changes that you'd like to see, please don't hesitate to send them <a href='contactus.php'>here</a>.</p>";
				echo "</div>";
				echo "<div id='promotion' class='tabcontent'>";
				echo "<h3>Black Friday Promotion</h3>";
				echo "<p>Every major shopping complex are having Black Friday Sales!</p>";
				echo "<p>Don't miss out on these great discounts that'll save you up to 70%!</p>";
				echo "</div>";
				echo "<div id='membership' class='tabcontent'>";
				echo "<h3>Awesome News Membership</h3>";
				echo "<p>Register as a member today to read your latest news without advertisements!</p>";
				echo "<p>To apply/learn more about this membership, click <a href='#'>here</a>.</p>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";

				//Main End
				echo "</div>";

				//Footer Start
				echo "<div class='footer'>";
				echo "<div class='footer-column1'>";
				echo "<p><img src='pictures/logo.png' width='100' height='100'></p>";
				echo "<h3>Operating Hours</h3>";
				echo "<p>Everyday</p>";
				echo "<p>24-Hours</p>";
				echo "</div>";

				echo "<div class='footer-column2'>";
				echo "<h3><a href='contactus.php'>Contact Us</a></h3>";
				echo "<table>";
				echo "<tr>";
				echo "<td><i class='far fa-envelope'></i></td>";
				echo "<td>&nbsp;contactus@awesomenews.com</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><i class='fas fa-phone-volume'></i></td>";
				echo "<td>&nbsp;012-3456789</td>";
				echo "</tr>";
				echo "</table>";
				echo "<br/>";
				echo "<div class='social-media'>";
				echo "<p>";
				echo "<a href='#'><i class='fab fa-facebook-square'></i></a>&nbsp;";
				echo "<a href='#'><i class='fab fa-instagram'></i></a>&nbsp;";
				echo "<a href='#'><i class='fab fa-twitter-square'></i></a>";
				echo "</p>";
				echo "</div>";
				echo "</div>";

				echo "<div class='footer-column3'>";
				echo "<h3>Others</h3>";
				echo "<p><a href='aboutus.php'>About Us</a></p>";
				echo "</div>";
				echo "</div>";
				//Footer End
				echo "</div>";
		?>
		
		<script>
			var index = 0;
			var images = [];
			var time = 5000;
			var timer;
			
			images[0] = 'pictures/slide1.png';
			images[1] = 'pictures/slide2.png';
			images[2] = 'pictures/slide3.png';
			
			showSlide(index);
			
			function showSlide(n) {
				document.slide.src=images[n];
				document.getElementById('dot'+n).className='activedot';
				timer = setTimeout('changeSlideByArrow(1)', time);
			}
			
			function changeSlideByArrow(n) {
				clearTimeout(timer);
				
				document.getElementById('dot'+index).className='dot';
				
				index = index + n;
				
				if(index > images.length - 1){
					index = 0;
				}
				if(index < 0){
					index = 2;
				}
				
				showSlide(index);
			}
			
			function changeSlideByDot(n) {
				clearTimeout(timer);
				document.getElementById('dot'+index).className='dot';
				index = n;
				showSlide(index);
			}
			
			function openTab(evt, noticeName) {
				var i, tabcontent, tablinks;

				tabcontent = document.getElementsByClassName('tabcontent');
				for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = 'none';
				}

				tablinks = document.getElementsByClassName('tablinks');
				for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(' active', '');
				}
				
				document.getElementById(noticeName).style.display = 'block';
				evt.currentTarget.className += ' active';
			}
			
			document.getElementById('defaultOpen').click();
		</script>
	</body>
</html>