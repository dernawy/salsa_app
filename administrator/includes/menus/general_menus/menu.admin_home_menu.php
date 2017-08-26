<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 7/14/2017
 * Time: 6:29 AM
 */
$id = isset($_SESSION['id']);
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Brand Administrator</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="../../administrator/index.php?admin-id=<?php echo $id?>">Backend DashBoard <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Setting</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Components <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="components/users/index.php?admin-id=<?php echo $id?>">Users</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="components/users/user_manager/index.php?admin-id=<?php echo $id?>">User Manager</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Gallery</a></li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="recherche la site">
				</div>
				<button type="submit" class="btn btn-default">Recherche</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Controles <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li><a href="#">Paramètres</a></li>
						<li><a href="#">Messages</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="components/users/login_register/logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
