<?php

namespace Xiod\Bundle\AdminGeneratorBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
	private $factory;

	/**
	 * @param FactoryInterface $factory
	 */
	public function __construct(FactoryInterface $factory)
	{
		$this->factory = $factory;
	}

	public function createGeneratorMainMenu(Request $request)
	{
		$menu = $this->factory->createItem('root');
		$menu->setChildrenAttribute('class', 'nav navbar-nav');
		$menu->addChild('generator.home', 
			array(
				'route' => 'xiod_admin_generator_homepage',
			)
		)->setExtra('translation_domain', 'XiodAdminGeneratorBundle');
		$menu->addChild('generator.routing', 
			array(
				'route' => 'xiod_admin_generator_manage_routing',
			)
		)->setExtra('translation_domain', 'XiodAdminGeneratorBundle');
		$menu->addChild('generator.entities', 
			array(
				'route' => 'xiod_admin_generator_manage_entities',
			)
		)->setExtra('translation_domain', 'XiodAdminGeneratorBundle');
		$menu->addChild('User',
				array(
					'attributes' => array(
						'class' => 'pull-right'
						)
				     )
			       )
		->setAttribute('dropdown', true)
		->setExtra('translation_domain', 'XiodAdminGeneratorBundle');
		$menu['User']->addChild('user.logout', 
				array(
					'route' => 'fos_user_security_logout',
				     )
				)->setExtra('translation_domain', 'XiodAdminGeneratorBundle');
		return $menu;
	}

}
