<?php

namespace Application\Sylius\SettingsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationSyliusSettingsBundle extends Bundle
{
	public function getParent()
	{
		return 'SyliusSettingsBundle';
	}
}
