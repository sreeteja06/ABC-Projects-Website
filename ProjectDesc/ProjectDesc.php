<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="ProjectDescMobile.css">
	<link rel="stylesheet" media="screen and (min-width:800px)" type="text/css" href="ProjectDescLaptop.css">
	<style>
	#scroolToTop1{
    display: none;
    position: fixed;
    bottom: 120px;
    right: 3px;
    z-index: 99;
    font-size: 14px;
    border: none;
    outline: none;
    background-color: rgb(171, 52, 207);
    color: white;
    cursor: pointer;
    padding: 12px;
    border-radius: 4px;
  }
	</style>
    <script>
		// When the user clicks on div, open the popup
		function myFunction() {
			var popup = document.getElementById("myPopup");
			popup.classList.toggle("show");
		}
    </script>
</head>
<body>
    <div class="container">
	<button id="scroolToTop1" onclick="topFunction()"  title="Go to top">Top</button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};
			
			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("scroolToTop1").style.display = "block";
				} else {
					document.getElementById("scroolToTop1").style.display = "none";
				}
			}
			
			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<nav class="nav">
			<ul class="navlist">
				<li class="Home">
					<a href="../home/home.html"><img src="../imgs/home.png" height="30px" width="30px"></a>
				</li>
					<li class="Catalog">
						<a href="../catalog/catalog.html"><img src="../imgs/catalog.jpg" height="30px" width="30px"></a>
					</li>
				<li class="Login">
					<img src="../imgs/login.png" height="30px" width="30px">
				</li>
				<li class="notifications">
						<div class="popup" onclick="myFunction()"><img src="../imgs/notifications.png" height="30px" width="30px">
							<span class="popuptext" id="myPopup">No notifications</span>
						</div>
				</li>
			</ul>
        </nav>
        <div class="ProjectHead">ProjectHead</div>
        <div class="ProjectTitle">ProjectTitle</div>
        <div class="ProjectStatus">ProjectStatus</div>	
        <div class="ProjectDesc">The first "working draft" of HTML5 came out in January of 2008 and it already has surprisingly broad browser support. However HTML5 is not yet fully implemented and won't be for some years yet. There are any number of planning committees that have plans to make it a "Recommendation", but such plans are still in the planning phase – and don't plan on that changing anytime soon. **
Two groups, the W3C and the WHATWG, are in charge of developing HTML5. Why two groups? "The WHATWG was formed in response to the slow development of web standards monitored by the W3C." wikipedia – In other words they got in a fight and parted ways.
They say they have since kissed and made up.<p> Both groups agree that it's going to take years to fully implement HTML5, though it will be in wide use long before then – assuming that, like eColi, they don't divide and multiply again.
Many on the boards of W3C and WHATWG work for</p> competing browser companies. Inevitably conflicts of interest (for example MS's brutal attempt in the late 1990s to control it all - wikipedia), have provoked problems, but I will admit – albeit begrudgingly, that on the whole they have done a reasonably good job.</div>	
        <div class="ProjectMembers">M.Sree Teja<br/>S.Sai Krishna<br/>Nivedh Vishnu</div>
        <div class="GitContainer">
        	<div style="text-align: center;color: white;font-size: 20px;margin-top: 5px;">Git Repo</div>
        	<div align="center"><img src="../imgs/git.png" height="20px" width="20px"></div>
        </div>
    </div>
	<footer style="text-align: center; font-style: italic">&copy; ABC Club</footer>
    <?php
    echo $_GET['projectid'];
    ?>
</body>
</html>