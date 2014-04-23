<?php

/**
 * Parses and verifies the class doc comment.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    David Mertl <dave@onzra.com>
 * @copyright 2013 ONZRA LLC
 * @license   http://creativecommons.org/licenses/by-nc-nd/3.0/
 * @link      http://onzra.com/
 */

if (class_exists('PEAR_Sniffs_Commenting_ClassCommentSniff', true) === false) {
	$error = 'Class PEAR_Sniffs_Commenting_ClassCommentSniff not found';
	throw new PHP_CodeSniffer_Exception($error);
}

/**
 * Parses and verifies the class doc comment. Extends PEAR to only require author tag.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    David Mertl <dave@onzra.com>
 * @copyright 2013 ONZRA LLC
 * @license   http://creativecommons.org/licenses/by-nc-nd/3.0/
 * @version   0.0.1
 * @link      http://onzra.com/
 */
class ONZRAL_Sniffs_Commenting_ClassCommentSniff extends PEAR_Sniffs_Commenting_ClassCommentSniff
{

	protected $tags = array(
		'author' => array(
			'required' => true,
			'allow_multiple' => true
		)
	);

}//end class

?>
