<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
 */
class HelloWorldViewHelloWorld extends JViewLegacy
{
	// Overwriting JView display method
	function display($tpl = null)
	{
			$user = JFactory::getUser();
			$id = $user->get('id');
			echo"<pre>";
	$allowedViewLevels = JAccess::getAuthorisedViewLevels($id);
// 		foreach($allowedViewLevels AS $key => $value){
//   echo "Key: $key, Value: $title<br/>\n";
// }
			print_r($allowedViewLevels);
// echo "<br>";
			// $allowViewLevels = JAccess::getGroupsByUser($user, $recursive=true);
			// echo "<pre>";
			// print_r($allowViewLevels);

		// $user = JFactory::getUser();
		// $id = $user->get('id');
		// $access = JAccess::getAssetRules($id);
		// echo "<pre>";
		// print_r($access);

		// $useraccess = JAccess::check($id, '[core.edit]',$access);
		// echo $useraccess;
		// die();
		// Assign data to the view
		// $this->msg = $this->get('Msg');

		// // Check for errors.
		// if (count($errors = $this->get('Errors')))
		// {
		// 	JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

		// 	return false;
		// }
		// Display the view
		parent::display($tpl);
	}
}