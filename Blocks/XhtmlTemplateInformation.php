<?php
namespace Intportg\Markupsamples\Blocks;

use Change\Documents\Property;

/**
 * @name \Intportg\Markupsamples\Blocks\XhtmlTemplateInformation
 */
class XhtmlTemplateInformation  extends \Change\Presentation\Blocks\Information
{
	/**
	 * @param \Change\Events\Event $event
	 */
	public function onInformation(\Change\Events\Event $event)
	{
		parent::onInformation($event);
		$this->setLabel('Template XHTML');
		$this->addInformationMeta('templateName', Property::TYPE_STRING, true, 'xhtml-buttons.twig')
			->setLabel('Template');
	}
}