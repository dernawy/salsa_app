<?php

?>



<div class = "col-md-12">
	<div id="" class="div_login_form_container">
		<form class="form-horizontal" action="../login/login-redirct.php" id="id_login_form" method="post">
				<div class="form-group">
					<label class="col-sm-5 control-label" for="id_username_fld">Nom d'utilisateur:</label>
					<div class="col-sm-12">
						<input id="id_username_fld" type="text" name="user_username" class="form-control">
						<span class=""></span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-5 control-label" for="id_password_fld">Mot de passe</label>
					<div class="col-sm-12">
						<input id="id_password_fld" type="text" name="user_password" class="form-control">
						<span class=""></span>
					</div>
				</div>

				<div class="form-group">

					<div class="col-sm-12">
						<input id="id_remeber_me" type="checkbox" name="name_remeber_me" class="input_login_rememberme" value="Souviens moi"><label id="" class="label_login_remeberme">Souviens moi</label>
						<span class=""></span>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-12">
						<hr class="login_hr" />
						<input type="submit" name="login" class="btn btn-default" >
					</div>
				</div>
		</form>
	</div>
</div>

