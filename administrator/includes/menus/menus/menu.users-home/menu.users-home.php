<?php
/** Users Home page NavBar PHP  **/
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 8/24/2017
 * Time: 2:30 PM
 */

$id = isset($_SESSION['id']);
?>

<head>
    <link rel='stylesheet' media="all" href='../../../administrator/includes/menus/menus/menu.users-home/menu.users-home.css' />

    <script src="../../../administrator/includes/menus/menus/menu.users-home/menu.users-home.js" type="text/javascript"></script>

</head>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-user-home-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../../../../administrator/index.php?admin-id=<?php echo $id?>"><i class="icon-home icon-white"> </i> SALSA </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="navbar-user-home-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Controles <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../../users/login_register/user_profile.php">Profile</a></li>
                        <li><a href="#">Paramètres</a></li>
                        <li><a href="#">Messages</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="login/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php?admin-id=<?php echo $id?>"><span id="" class="glyphicon glyphicon-th-list"></span> User Manager Dashboard <span class="sr-only">(current)</span></a></li>
                <li><a href="../../../../administrator/index.php?admin-id=<?php echo $id?>"><span id="" class="glyphicon glyphicon-tasks"></span> Administrator Dashboard</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="" class="glyphicon glyphicon-user"></span> User Manager <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li class="dropdown-header"><span id="" class="glyphicon glyphicon-user"></span> Users</li>
                        <li><a href="user_manager/manager_core/index.php?admin-id=<?php echo $id?>"><span id="" class="glyphicon glyphicon-home"></span> User Manager Home</a></li>
                        <li><a href="user_manager/manager_core/add_form.php?admin-id=<?php echo $id?>"><span id="" class="glyphicon glyphicon-plus"></span> Add New Users</a></li>
                        <li role="separator" class="divider"></li>

                        <li class="dropdown-header"><span id="" class="glyphicon glyphicon-stats"> Statistics</li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="" class="glyphicon glyphicon-stats"></span> Statistics</a>
                            <ul class="dropdown-menu">
                                <li><a href="user_manager/statistics/index.php?admin-id=<?php echo $id?>">General Statistics</a></li>
                                <li><a href="user_manager/statistics/stat.users.php?admin-id=<?php echo $id?>">Users Statistics</a></li>
                                <li><a href="user_manager/statistics/stat.inscription.php?admin-id=<?php echo $id?>">Inscription  Statistics</a></li>
                                <li><a href="user_manager/statistics/stat.gallery.php?admin-id=<?php echo $id?>">Gallery  Statistics</a></li>
                            </ul>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header"><span id="" class="glyphicon glyphicon-search"></span> Search</li>
                        <li><a href="users_manager/users_search/index.php?admin-id=<?php echo $id?>"><span id="" class="glyphicon glyphicon-search"></span> Search Users</a></li>
                        <li role="separator" class="divider"></li>

                        <li class="dropdown-header"><span id="" class="glyphicon glyphicon-info-sign"></span> Wiki Documents</li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="" class="glyphicon glyphicon-info-sign"></span> User managment Wiki </a>
                            <ul class="dropdown-menu">
                                <li><a href="../components_wiki/index.php?admin-id=<?php echo $id?>"><span id="" class="glyphicon glyphicon-home"></span> Wiki Home</a></li>
                                <li role="separator" class="divider"></li>

                                <li class="dropdown-submenu">
                                    <a href="../components_wiki/user_manager_wiki/index.php?admin-id=<?php echo $id?>" class="dropdown-toggle" data-toggle="dropdown"><span id="" class="glyphicon glyphicon-user"></span> Users Management</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span id="" class="glyphicon glyphicon-plus-sign"></span> Add Users</a></li>
                                        <li><a href="#"><span id="" class="glyphicon glyphicon-pencil"></span> Edit Users</a></li>
                                        <li><a href="#"><span id="" class="glyphicon glyphicon-trash"></span> delete Users</a></li>
                                        <li><a href="#"><span id="" class="glyphicon glyphicon-eye-close"></span> Bane Users</a></li>
                                        <li><a href="#"><span id="" class="glyphicon glyphicon-eye-open"></span> Unbane Users</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 2 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">One more separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <form id="" class="user-home-search navbar-form navbar-left">
                        <div class="input-group search-container">
                            <span class="glyphicon glyphicon-search  feedleft"></span><input id="user-search-input" type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn search-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                              </span>
                        </div><!-- /input-group -->
                    </form>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!-- /.container-fluid -->
</nav>