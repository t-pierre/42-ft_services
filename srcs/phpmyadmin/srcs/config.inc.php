<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <http://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */

/*
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 */
$cfg['blowfish_secret'] = 'Odj8imO/VsU7h/ZxrNBPPlJaULs4X2bI'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/*
 * Servers configuration
 */
$i = 0;

/*
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
// $cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = 'admin';
$cfg['Servers'][$i]['password'] = 'admin';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'mysql-service';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysql if your server does not have mysqli */
$cfg['Servers'][$i]['AllowNoPassword'] = true;
// $cfg['Servers'][$i]['ssl'] = true;
// $cfg['Servers'][$i]['ssl_key'] = true;
// $cfg['Servers'][$i]['ssl_cert'] = true;


/*
 * phpMyAdmin configuration storage settings.
 */

// No warning on  pmadb tables
$cfg['PmaAbsoluteUri'] = './';
$cfg['PmaNoRelation_DisableWarning'] = true;


?>
