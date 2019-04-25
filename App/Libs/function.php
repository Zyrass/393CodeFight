<?php

/**
 * [debug function permettant de remplacer le var_dump]
 * @param  [all] $data_a_debug [variable qui sera utilisé en paramètre]
 * @return [all] [un code mieux indenté]
 */
function debug($debugData) {

	echo '<pre>';
		echo $debugData;
	echo '</pre>';
	die();
}