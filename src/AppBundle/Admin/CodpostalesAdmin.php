<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CodpostalesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('codpostal', null, array(
                'label' => 'Código Postal'
            ))
            ->add('idPoblacion', null, array(
                'label' => 'Población'
            ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('codpostal', null, array(
                'label' => 'Código Postal'
            ))
            ->add('idPoblacion', null, array(
                'label' => 'Población'
            ))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('codpostal', null, array(
                'label' => 'Código Postal'
            ))
            ->add('idPoblacion', null, array(
                'label' => 'Población'
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('codpostal', null, array(
                'label' => 'Código Postal'
            ))
            ->add('idPoblacion', null, array(
                'label' => 'Población'
            ))
        ;
    }
}
