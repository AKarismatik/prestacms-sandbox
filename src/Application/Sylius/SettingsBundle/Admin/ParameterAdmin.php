<?php


namespace Application\Sylius\SettingsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class ParameterAdmin extends Admin
{
	/**
	 * {@inheritdoc}
	*/
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('name')
		->add('value')
		;
		$listMapper->add('_action', 'actions',array('label'=> 'Action','actions' => array('edit' => array(), 'delete' => array())));
	}

	/**
	 * {@inheritdoc}
	 */
	protected function configureDatagridFilters(DatagridMapper $filterMapper)
	{
		$filterMapper
		->add('name')
		->add('value')
		;
	}


	/**
	 * {@inheritdoc}
	 */
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->with('Profile')
		->add('name')
		->add('value')
		->end()
		;
		
	}
}
