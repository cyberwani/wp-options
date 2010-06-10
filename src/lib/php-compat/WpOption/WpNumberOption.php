<?php
/**
 * Spiga
 *
 * wp-options
 *
 * @category   Wordpress
 * @package    Storelicious_Themes
 * @copyright  Copyright (c) 2008-2010 Spiga (http://www.spiga.mx)
 * @author     zetta (http://www.ctrl-zetta.com)
 * @version    1.1
 */

class WpNumberOption extends WpOption
{
    /**
     * Constructor de la clase
     *
     * @param string $name
     * @param int|mixed $defaultValue
     * @return WpNumberOption
     */
    function WpNumberOption($name, $defaultValue)
    {
        parent::__construct($name, $defaultValue);
    }
    
    /**
     * Genera el html de la opci�n
     * @return string
     * @access public
     */
    function ___toString()
    {
        $this->savedValue = $this->getStoredValue();
        $value = ($this->savedValue !== false) ? $this->savedValue : (($this->defaultValue !== false) ? $this->defaultValue : '');
        $formName = $this->getFormName();
        $idName = $this->getFormId();
        return "<input type=\"text\" id=\"{$idName}\" size=\"5\" name=\"{$formName}\" value=\"{$value}\" />";
    }
}
