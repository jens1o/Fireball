<?php
namespace cms\acp\form;
use wcf\acp\form\AbstractCategoryAddForm;


class NewsCategoryAddForm extends AbstractCategoryAddForm {

    public $activeMenuItem = 'cms.acp.menu.link.cms.news.category.add';

    public $objectTypeName = 'de.codequake.cms.category.news';

    public $pageTitle = 'wcf.category.add';
}