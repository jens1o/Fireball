<?php
namespace cms\data\content;

use wcf\data\VersionableDatabaseObjectEditor;

/**
 * Functions to edit a content item.
 *
 * @author	Jens Krumsieck
 * @copyright	2014 codeQuake
 * @license	GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl-3.0.txt>
 * @package	de.codequake.cms
 */
class ContentEditor extends VersionableDatabaseObjectEditor {
	protected static $baseClass = 'cms\data\content\Content';
}
