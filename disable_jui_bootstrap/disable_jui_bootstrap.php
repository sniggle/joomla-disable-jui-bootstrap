<?php

// No direct access
defined('_JEXEC') or die;

JLoader::import('joomla.plugin.plugin');

class plgSystemDisable_Jui_Bootstrap extends JPlugin
{
    public function onBeforeCompileHead()
    {
        // Application Object
        $app = JFactory::getApplication();

        // Frontend
        if( $app instanceof JApplicationSite )
        {
            $doc            = JFactory::getDocument();
            // Remove default bootstrap
            unset($doc->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);
        }
    }
}
