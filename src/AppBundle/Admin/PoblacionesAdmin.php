<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PoblacionesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('poblacion', null, array(
                'label' => 'Población'
            ))
            ->add('idProvincia', null, array(
                'label' => 'Provincia'
            ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('poblacion', null, array(
                'label' => 'Población'
            ))
            ->add('idProvincia', null, array(
                'label' => 'Provincia'
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
            ->add('poblacion', null, array(
                'label' => 'Población'
            ))
            ->add('idProvincia', null, array(
                'label' => 'Provincia'
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('poblacion', null, array(
                'label' => 'Población'
            ))
            ->add('idProvincia', null, array(
                'label' => 'Provincia'
            ))
        ;
    }
}
