<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipvehiculosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('clasificacion', null, array(
                'label' => 'Clasificación'
            ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('clasificacion', null, array(
                'label' => 'Clasificación'
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
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('clasificacion', null, array(
                'label' => 'Clasificación'
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('clasificacion', null, array(
                'label' => 'Clasificación'
            ))
        ;
    }
}
