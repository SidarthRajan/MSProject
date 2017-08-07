<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Settings</title>

</head>

<body>
    <div id="sidebar">
		<ul id="menu">
			<li class="menu-item"><a nohref onclick="getView('userProfile');">User Profile</a></li>
			<li class="menu-item"><a nohref onclick="getView('notifications');">Notifications</a></li>
			<li class="menu-item"><a nohref onclick="getView('classSettings');">Class Settings</a></li>
		</ul>
    </div>
	<div id="userProfile" class="view" style="display: none;">
	</div>
	<div id="notifications" class="view" style="display: none;">
	</div>
	<div id="classSettings" class="view" style="display: none;">
	</div>
	<script>
		//functions
		function clearPage() {
			var views = document.getElementsByClass('view');
			for (var i = 0; i < views.length; i++)
				views[i].style.display = 'none';
		}
		function getView(var view) {
			clearPage();
			document.getElementById(view).style.display = 'block';
		}
	</script>
	<script>
		//script to run on start of page
		getView('userProfile');
	</script>
		
