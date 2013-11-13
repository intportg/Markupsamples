<?php
namespace Intportg\Markupsamples\Blocks;

use Change\Documents\Property;
use Change\Presentation\Blocks\Event;
use Change\Presentation\Blocks\Standard\Block;

/**
 * @name \Intportg\Markupsamples\Blocks\XhtmlTemplate
 */
class XhtmlTemplate extends Block
{
	/**
	 * @api
	 * Set Block Parameters on $event
	 * Required Event method: getBlockLayout, getPresentationServices, getDocumentServices
	 * Optional Event method: getHttpRequest
	 * @param Event $event
	 * @return Parameters
	 */
	protected function parameterize($event)
	{
		$parameters = parent::parameterize($event);
		$parameters->addParameterMeta('templateName', 'xhtml-buttons.twig');

		$parameters->setLayoutParameters($event->getBlockLayout());
		return $parameters;
	}

	/**
	 * Set $attributes and return a twig template file name OR set HtmlCallback on result
	 * Required Event method: getBlockLayout, getBlockParameters(), getBlockResult(),
	 *        getPresentationServices(), getDocumentServices()
	 * @param Event $event
	 * @param \ArrayObject $attributes
	 * @return string|null
	 */
	protected function execute($event, $attributes)
	{
		return $event->getBlockParameters()->getTemplateName();
	}
}