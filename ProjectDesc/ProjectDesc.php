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
	<?php
		$projectID = $_GET['projectid'];
		$servername = "localhost:3309";
		$username = "root";
		$password = "root";
		$dbname = "abcprojects";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT ProjectHead,ProjectTitle,ProjectDescription,projectStatus,ProjectGitRepo FROM projects WHERE ID=$projectID";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$ProjectHead = $row["ProjectHead"];
				$ProjectTitle = $row["ProjectTitle"];
				$ProjectDescription = $row["ProjectDescription"];
				$projectStatus = $row["projectStatus"];
				$ProjectGitRepo = $row["ProjectGitRepo"];
			}
		} else {
			echo "0 results";
		}
		$conn->close();
	?>
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
        <div class="ProjectHead"><?php echo $ProjectHead ?></div>
        <div class="ProjectTitle"><?php echo $ProjectTitle ?></div>
        <div class="ProjectStatus"><?php echo $projectStatus ?></div>	
        <div class="ProjectDesc"><?php echo $ProjectDescription ?></div>
        <div class="ProjectMembers">M.Sree Teja<br/>S.Sai Krishna<br/>Nivedh Vishnu</div>
        <a href=<?php echo $ProjectGitRepo ?>><div class="GitContainer">
        	<div style="text-align: center;color: white;font-size: 20px;margin-top: 5px;">Git Repo</div>
        	<div align="center"><img src="../imgs/git.png" height="20px" width="20px"></div>
        </div></a>
    </div>
	<footer style="text-align: center; font-style: italic">&copy; ABC Club</footer>
	
</body>
</html>