<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'helper.php';
function secret_mail($email)
{

$prop=2;
    $domain = substr(strrchr($email, "@"), 1);
    $mailname=str_replace($domain,'',$email);
    $name_l=strlen($mailname);
    $domain_l=strlen($domain);
    $start='';
    $end='';
        for($i=0;$i<=$name_l/$prop-1;$i++)
        {
        $start.='*';
        }

        for($i=0;$i<=$domain_l/$prop-1;$i++)
        {
        $end.='*';
        }

    return substr_replace($mailname, $start, 2, $name_l/$prop).substr_replace($domain, $end, 2, $domain_l/$prop);
}
if (isset($_POST['Validation_btn'])) {
    $jinput = Factory::getApplication()->input;
    $userinput = $jinput->get('email');

    echo "The entered E-Mail is: " . secret_mail($userinput);
    echo "\nFORM SUBMITED!!";
} else {
    require ModuleHelper::getLayoutPath('mod_validate', $params->get('layout', 'default'));
}
