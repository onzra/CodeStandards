<?php

/**
 * Verifies that control statements conform to their coding standards.
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

if (class_exists('PHP_CodeSniffer_Standards_AbstractPatternSniff', true) === false) {
	throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_AbstractPatternSniff not found');
}

/**
 * Verifies that control statements conform to their coding standards.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    David Mertl <dave@onzra.com>
 * @copyright 2013 ONZRA LLC
 * @license   http://creativecommons.org/licenses/by-nc-nd/3.0/
 * @version   0.0.1
 * @link      http://onzra.com/
 */
class ONZRAL_Sniffs_ControlStructures_ControlSignatureSniff extends PHP_CodeSniffer_Standards_AbstractPatternSniff
{

	/**
	 * A list of tokenizers this sniff supports.
	 *
	 * @var array
	 */
	public $supportedTokenizers = array(
		'PHP',
		'JS',
	);


	/**
	 * Returns the patterns that this test wishes to verify.
	 *
	 * @return array(string)
	 */
	protected function getPatterns()
	{
		return array(
			'try {EOL...} catch(...) {EOL',
			'do {EOL...} while(...);EOL',
			'while(...) {EOL',
			'for(...) {EOL',
			'if(...) {EOL',
			'foreach(...) {EOL',
			'} else if(...) {EOL',
			'} elseif(...) {EOL',
			'} else {EOL',
		);

	}//end getPatterns()


}//end class

?>
