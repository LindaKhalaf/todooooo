<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>
<h1>riasdifa fugfdubguadfjg buiadhgijsd fngijsdfhgijda njg djfdg hndaf gujadf gahndf hidf gfngijdfgb</h1>
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div id="user">
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div id="pass">
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div id="sub">
		<button type="submit">Submit:</button>
	</div>
</form>
