<?php

/*
 * @author    Richard Bakos
 * @package   theme_dspcentral
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Basic Heading
    $name = 'theme_dspcentral/basicheading';
    $heading = get_string('basicheading', 'theme_dspcentral');
    $information = get_string('basicheadingdesc', 'theme_dspcentral');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Logo file setting
	$name = 'theme_dspcentral/logo';
	$title = get_string('logo','theme_dspcentral');
	$description = get_string('logodesc', 'theme_dspcentral');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);	

	// Hide Menu
	$name = 'theme_dspcentral/hidemenu';
	$title = get_string('hidemenu','theme_dspcentral');
	$description = get_string('hidemenudesc', 'theme_dspcentral');
	$default = 1;
	$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Email url setting
	$name = 'theme_dspcentral/emailurl';
	$title = get_string('emailurl','theme_dspcentral');
	$description = get_string('emailurldesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Custom CSS file
	$name = 'theme_dspcentral/customcss';
	$title = get_string('customcss','theme_dspcentral');
	$description = get_string('customcssdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	// Frontpage Heading
    $name = 'theme_dspcentral/frontpageheading';
    $heading = get_string('frontpageheading', 'theme_dspcentral');
    $information = get_string('frontpageheadingdesc', 'theme_dspcentral');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

	// Title Date setting
	$name = 'theme_dspcentral/titledate';
	$title = get_string('titledate','theme_dspcentral');
	$description = get_string('titledatedesc', 'theme_dspcentral');
	$default = 1;
	$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// General Alert setting
	$name = 'theme_dspcentral/generalalert';
	$title = get_string('generalalert','theme_dspcentral');
	$description = get_string('generalalertdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Snow Alert setting
	$name = 'theme_dspcentral/snowalert';
	$title = get_string('snowalert','theme_dspcentral');
	$description = get_string('snowalertdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

    // Colour Heading
    $name = 'theme_dspcentral/colourheading';
    $heading = get_string('colourheading', 'theme_dspcentral');
    $information = get_string('colourheadingdesc', 'theme_dspcentral');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Background colour setting
	$name = 'theme_dspcentral/backcolor';
	$title = get_string('backcolor','theme_dspcentral');
	$description = get_string('backcolordesc', 'theme_dspcentral');
	$default = '#fafafa';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);

	// Graphic Wrap (Background Image)
	$name = 'theme_dspcentral/backimage';
	$title=get_string('backimage','theme_dspcentral');
	$description = get_string('backimagedesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	// Graphic Wrap (Background Position)
	$name = 'theme_dspcentral/backposition';
	$title = get_string('backposition','theme_dspcentral');
	$description = get_string('backpositiondesc', 'theme_dspcentral');
	$default = 'no-repeat';
	$choices = array('no-repeat'=>get_string('backpositioncentred','theme_dspcentral'), 'no-repeat fixed'=>get_string('backpositionfixed','theme_dspcentral'), 'repeat'=>get_string('backpositiontiled','theme_dspcentral'), 'repeat-x'=>get_string('backpositionrepeat','theme_dspcentral'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Menu hover background colour setting
	$name = 'theme_dspcentral/menuhovercolor';
	$title = get_string('menuhovercolor','theme_dspcentral');
	$description = get_string('menuhovercolordesc', 'theme_dspcentral');
	$default = '#f42941';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);	
	
	// Footer Options Heading
    $name = 'theme_dspcentral/footeroptheading';
    $heading = get_string('footeroptheading', 'theme_dspcentral');
    $information = get_string('footeroptdesc', 'theme_dspcentral');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Copyright setting
	$name = 'theme_dspcentral/copyright';
	$title = get_string('copyright','theme_dspcentral');
	$description = get_string('copyrightdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// CEOP
	$name = 'theme_dspcentral/ceop';
	$title = get_string('ceop','theme_dspcentral');
	$description = get_string('ceopdesc', 'theme_dspcentral');
	$default = '';
	$choices = array(''=>get_string('ceopnone','theme_dspcentral'), 'http://www.thinkuknow.org.au/site/report.asp'=>get_string('ceopaus','theme_dspcentral'), 'http://www.ceop.police.uk/report-abuse/'=>get_string('ceopuk','theme_dspcentral'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Disclaimer setting
	$name = 'theme_dspcentral/disclaimer';
	$title = get_string('disclaimer','theme_dspcentral');
	$description = get_string('disclaimerdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
	$settings->add($setting);	

	// Social Icons Heading
    $name = 'theme_dspcentral/socialiconsheading';
    $heading = get_string('socialiconsheading', 'theme_dspcentral');
    $information = get_string('socialiconsheadingdesc', 'theme_dspcentral');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Website url setting
	$name = 'theme_dspcentral/website';
	$title = get_string('website','theme_dspcentral');
	$description = get_string('websitedesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Facebook url setting
	$name = 'theme_dspcentral/facebook';
	$title = get_string('facebook','theme_dspcentral');
	$description = get_string('facebookdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Twitter url setting
	$name = 'theme_dspcentral/twitter';
	$title = get_string('twitter','theme_dspcentral');
	$description = get_string('twitterdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Google+ url setting
	$name = 'theme_dspcentral/googleplus';
	$title = get_string('googleplus','theme_dspcentral');
	$description = get_string('googleplusdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Flickr url setting
	$name = 'theme_dspcentral/flickr';
	$title = get_string('flickr','theme_dspcentral');
	$description = get_string('flickrdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Pinterest url setting
	$name = 'theme_dspcentral/pinterest';
	$title = get_string('pinterest','theme_dspcentral');
	$description = get_string('pinterestdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Instagram url setting
	$name = 'theme_dspcentral/instagram';
	$title = get_string('instagram','theme_dspcentral');
	$description = get_string('instagramdesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// LinkedIn url setting
	$name = 'theme_dspcentral/linkedin';
	$title = get_string('linkedin','theme_dspcentral');
	$description = get_string('linkedindesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	// Wikipedia url setting
	$name = 'theme_dspcentral/wikipedia';
	$title = get_string('wikipedia','theme_dspcentral');
	$description = get_string('wikipediadesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// YouTube url setting
	$name = 'theme_dspcentral/youtube';
	$title = get_string('youtube','theme_dspcentral');
	$description = get_string('youtubedesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Apple url setting
	$name = 'theme_dspcentral/apple';
	$title = get_string('apple','theme_dspcentral');
	$description = get_string('appledesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Android url setting
	$name = 'theme_dspcentral/android';
	$title = get_string('android','theme_dspcentral');
	$description = get_string('androiddesc', 'theme_dspcentral');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

}