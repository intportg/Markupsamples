<?php
namespace Intportg\Markupsamples\Blocks;

use Change\Documents\Property;
use Change\Presentation\Blocks\BlockManager;

/**
 * @name \Intportg\Markupsamples\Blocks\XhtmlTemplateInformation
 */
class XhtmlTemplateInformation  extends \Change\Presentation\Blocks\Information
{
	/**
	 * @param string $name
	 * @param BlockManager $blockManager
	 */
	function __construct($name, $blockManager)
	{
		parent::__construct($name);
		$i18nManager = $blockManager->getPresentationServices()->getApplicationServices()->getI18nManager();
		$this->setLabel($i18nManager->trans('Template XHTML'));
		$this->addInformationMeta('templateName', Property::TYPE_STRING, true, 'xhtml-buttons.twig');
	}
}