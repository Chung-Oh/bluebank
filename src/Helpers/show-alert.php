<?php
/*
** Initiating the session to work with return messages
*/
session_start();
/*
** This function return messages after operation of validations
*/
function showAlert($type)
{
	if (isset($_SESSION[$type])) {?>
		<h5 class="alert alert-<?php echo $type ?> text-center"><?php echo $_SESSION[$type] ?></h5>
		<?php unset($_SESSION[$type]);
	}
}