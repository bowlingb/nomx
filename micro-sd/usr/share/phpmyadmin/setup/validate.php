<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Validation callback.
 *
 * @package phpMyAdmin-setup
 */

/**
 * Core libraries.
 */
require './lib/common.inc.php';

$validators = array();
require './libraries/config/validate.lib.php';

PMA_headerJSON();

$ids = PMA_isValid($_POST['id'], 'scalar') ? $_POST['id'] : null;
$vids = explode(',', $ids);
$vals = PMA_isValid($_POST['values'], 'scalar') ? $_POST['values'] : null;
$values = json_decode($vals);
if (!($values instanceof stdClass)) {
    die('Wrong data');
}
$values = (array)$values;
$result = PMA_config_validate($vids, $values, true);
if ($result === false) {
    $result = 'Wrong data or no validation for ' . $vids;
}
echo $result !== true ? json_encode($result) : '';
?>
