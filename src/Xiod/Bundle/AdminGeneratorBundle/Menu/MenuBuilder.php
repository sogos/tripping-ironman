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
		);
		$menu->addChild('User',
				array(
					'attributes' => array(
						'class' => 'pull-right'
						)
				     )
			       )->setAttribute('dropdown', true);
		$menu['User']->addChild('user.logout', 
				array(
					'route' => 'fos_user_security_logout',
				     )
				);
		return $menu;
	}

}
