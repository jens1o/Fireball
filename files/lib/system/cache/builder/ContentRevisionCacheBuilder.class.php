<?php
namespace cms\system\cache\builder;

use cms\data\content\Content;
use wcf\system\cache\builder\AbstractCacheBuilder;
use wcf\system\WCF;

/**
 * @author	Jens Krumsieck
 * @copyright	2014 codeQuake
 * @license	GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl-3.0.txt>
 * @package	de.codequake.cms
 */
class ContentRevisionCacheBuilder extends AbstractCacheBuilder {

	public function rebuild(array $parameters) {
		$data = array(
			'revisions' => array(),
			'revisionIDs' => array()
		);

		$sql = "SELECT * FROM  cms".WCF_N."_content_revision";
		$statement = WCF::getDB()->prepareStatement($sql);
		$statement->execute();

		while ($row = $statement->fetchArray()) {
			$object = new Content(null, $row);
			$data['revisions'][$object->pageID][$object->revisionID] = $object;
			$data['revisionIDs'][$object->pageID][$object->revisionID] = $object->revisionID;
		}

		return $data;
	}
}
