<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_association_online', language 'en'
 *
 * @author Jerome Mouneyrac
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Association Online';
$string['auth_association_onlinedescription'] = 'This authentication plugin will allow members of an Association Online website to login to Moodle with their AO account.';
$string['auth_user_prefix'] = 'The created user\'s username will start with this prefix. On a basic Moodle site you don\'t need to change it.';
$string['auth_user_prefix_key'] = 'Username prefix';
$string['auth_oauth2description'] = 'Allow a user to connect to the site with an Association Online account. The first time the user connects with an AO provider, a new account is created. <a href="'.$CFG->wwwroot.'/admin/search.php?query=authpreventaccountcreation">Prevent account creation when authenticating</a> <b>must</b> be unset.';
$string['auth_ao_association_name_key'] = 'Association Online Association Name';
$string['auth_ao_association_name_description'] = 'The name of the association that the AO site belongs to. This will be used for the login button, where it will say "Login with [Association Name]".';

$string['auth_ao_url_key'] = 'URL';
$string['auth_ao_url_description'] = 'Address of the AO site you wish to connect to (e.g. https://www.example.com).';

$string['auth_ao_contacts_instance_default'] = 'clients';
$string['auth_ao_contacts_instance_key'] = 'Contacts instance name';
$string['auth_ao_contacts_instance_description'] = "The name of the contacts module on the AO site which will be used to authenticate users (almost always \"{$string['auth_ao_contacts_instance_default']}\", but may be different).";

$string['auth_ao_client_id_key'] = 'Client ID';
$string['auth_ao_client_id_description'] = 'To get a Client ID/Secret pair, contact your Association Online administrator.';

$string['auth_ao_client_secret_key'] = 'Client Secret';
$string['auth_ao_client_secret_description'] = "See above ({$string['auth_ao_client_id_key']})";

$string['auth_ao_sso_path_default'] = '/singlesignon';
$string['auth_ao_sso_path_key'] = 'Single Sign On Path';
$string['auth_ao_sso_path_description'] = "Path on the AO server to the SSO module (almost always '{$string['auth_ao_sso_path_default']}', but may be different).";

$string['auth_association_online_settings'] = 'Settings';
$string['couldnotauthenticate'] = 'The authentication failed - Please try to sign-in again.';
$string['couldnotauthenticateuserlogin'] = 'Authentication method error.<br/>
Please try to login again with your username and password.<br/>
<br/>
<a href="{$a->loginpage}">Try again</a>.<br/>
<a href="{$a->forgotpass}">Forgot your password</a>?';
$string['oauth2displaybuttons'] = 'Display buttons on login page';
$string['oauth2displaybuttonshelp'] = 'Display "Sign in with [Association]" button on the top of the login page. If you want to position the buttons yourself in your login page, you can keep this option disabled and add the following code:
{$a}';
$string['auth_sign-in_with'] = 'Sign-in with {$a->providerName}';
$string['signinwithanaccount'] = 'Log in with:';
$string['noaccountyet'] = 'You do not have permission to use the site yet. Please contact your administrator and ask them to activate your account.';
$string['unknownfirstname'] = 'Unknown Firstname';
$string['unknownlastname'] = 'Unknown Lastname';
