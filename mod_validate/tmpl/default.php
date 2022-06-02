<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_validate
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<form name="Validation" id="Validation" method="post">
<p>
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email"/>
</p>
<p>
    <input type="submit" name="Validation_btn" id="Validation_btn" value="Send"/>
</p>
</form>