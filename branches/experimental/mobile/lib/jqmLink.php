<?php
/*
 *  jqmPhp - HTML code generator for jQuery Mobile Framework
 *  Copyright (C) 2011  Bruno Maia
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
/**
 * This file is part of the jqmPhp package.
 * @package jqmPhp
 * @filesource
 */
/**
 * This class represents the 'link' tag.
 * @class jqmLink
 * @author Bruno Maia <brunoleaomaia@gmail.com>
 * @copyright Copyright (c) 2011, Bruno Maia
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @package jqmPhp
 * @version 0.02
 * @since 0.01
 * @link http://code.google.com/p/jqmphp/ jqmPhp Project Website
 * @link http://www.jquerymobile.com jQuery Mobile Website
 */
class jqmLink extends jqmTag {
    private $_href;
    /**
     *
     * @param string $href
     */
    function __construct($href='') {
        parent::__construct('link');
        $this->attribute('type', 'text/css');
        $this->attribute('rel', 'stylesheet');
        $this->_href = $this->attribute('href', $href, true);
    }
    /**
     * Gets and sets the href attribute.
     * @param string $value
     * @return string|jqmLink
     */
    function href(){
        $args = func_get_args();
        if (count($args) == 0) return $this->_href->value();
        $this->_href->value($args[0]);
        return $this;
    }
}
?>