<?php
namespace cms\system\user\online\location;

use cms\data\page\PageCache;
use wcf\data\user\online\UserOnline;
use wcf\system\user\online\location\IUserOnlineLocation;
use wcf\system\WCF;

/**
 * Implementation of IUserOnlineLocation for pages.
 * 
 * @author	Jens Krumsieck
 * @copyright	2013 - 2015 codeQuake
 * @license	GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl-3.0.txt>
 * @package	de.codequake.cms
 */
class PageLocation implements IUserOnlineLocation {
	/**
	 * @see	\wcf\system\user\online\location\IUserOnlineLocation::cache()
	 */
	public function cache(UserOnline $user) {}

	/**
	 * @see	\wcf\system\user\online\location\IUserOnlineLocation::get()
	 */
	public function get(UserOnline $user, $languageVariable = '') {
		$page = PageCache::getInstance()->getPage($user->objectID);

		if (!$page || !$page->canRead()) {
			return '';
		}

		return WCF::getLanguage()->getDynamicVariable($languageVariable, array(
			'page' => $page
		));
	}
}
