<?php
// No direct access to this file
defined('_JEXEC') or die;

// Access check.
if ( !JFactory::getUser()->authorise( 'core.manage', 'com_helloworld' ) ) {
	return JError::raiseWarning( 404, JText::_( 'JERROR_ALERTNOAUTHOR' ) );
}
?>
Hello World!