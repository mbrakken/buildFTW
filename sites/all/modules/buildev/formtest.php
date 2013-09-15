<?php
$form['foo'] = array(
	'#type' => 'textfield',
	'#title' => t('bar'),
	'#default_value' => t('foo'),
	'#size' => 60,
	'#maxlength' => 64,
	'#description' => t('baz'),
);
?>

<?php
$form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('Save'),
);



/**
* Dummy code to create a new user register form with email reply
*/	
function foo_user_register_form($form, &$form_state){
	$form['name'] = array(
		'#title' => 'username',
		'#description' => 'choose a username',
		'#type' => 'textfield',
		'#required' => TRUE,
	);
	$form['mail'] = array(
		'#title' => 'enter a valid email address',
		'#type' => 'textfield',
		'#required' => TRUE,
	);
	$form['submit'] = array(
		'#type' => 'submit',
		'#value' => t('Save'),
	);

function foo_user_register_form_submit($form, &$form_state){
	$edit = array(
		'name' => $form_state['values']['name'],
		'pass' => user_password(),
		'mail' => $form_state['values']['mail'],
		'init' => $form_state['values']['mail'],
		'status' => 1,
		'access' => REQUEST_TIME,
	);
	user_save(drupal_anonymous_user(), $edit);
}

$to = $form_state['values']['mail'];
$subject = 'New account created';
$headers = "From: something@somewhere.org\nContent-type: text/html";
$body = 'A new user account has been created for you at <a href="http://buildftw.org/">BuildFTW.org</a>.<br /> Your login details are as follows: <br />Username: <b>'.$form_state['values']['name'].'</b><br /> Password: <b>'.$form_state['values']['password'].'</b> <br /><br /> Please login to <a href="http://buildftw.org/">BuildFTW.org</a> and change your password.<br />';

if($form_state['values']['send_message'] == 1){
	mail($to,$subject,$body,$headers);
}
}





function buildev_menu() {
	$items = array();
	
	$items['examples/form-example'] = array( //this creates a URL that will call this form at "examples/form-example"
		'title' => 'Example Form', //page title
		'description' => 'A form to mess around with.',
		'page callback' => 'drupal_get_form', //this is the function that will be called when the page is accessed. for a form, use drupal_get_form
		'page arguments' => array('form_example_form'), //put the name of the form here
		'access callback' => TRUE
	);
	
	return $items;
}

function buildev_form($form, &$form_state) {
	$form['price'] = array(
		'#type' => 'textfield', //you can find a list of all available types in the form api
		'#title' => 'What is your price?',
		'#size' => 10,
		'#maxlength' => 10,
		'#required' => TRUE, // make this field required
	);
					
	$form['submit_button'] = array(
		'#type' => 'submit',
		'#value' => t('Click Here!'),
	);
	return $form;
}

function buildev_form_validate($form, &$form_state) {
	if (!($form_state['values']['price'] > 0)){
		form_set_error('price', t('Price must be a positive number'));
	}
}

function buildev_form_submit($form, &$form_state) {
}


/*	
from the database:
node/add/project: 
	access_callback: node_access
	page_callback: node_add
	fit: 7
	number_parts: 3
	context: 0
	tab_parent:
	tab_root: node/add/project
	title: Project
	title_callback: check_plain
	title_arguments
	theme_callback
	theme_arguments: a:0:{}
	type: 6
	description: Project groups
	position: 
	weight: 0
	include_file: modules/node/node.pages.inc
	
	
projects: 
	access_callback: views_access
	page_callback: views_page
	fit: 1
	number_parts: 1
	context: 0
	tab_parent:
	tab_root: projects
	title: 
	title_callback: t
	title_arguments
	theme_callback
	theme_arguments: a:0:{}
	type: 0
	description: 
	position: 
	weight: 0
	include_file: 
	