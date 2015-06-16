<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class VehiculosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('matricula')
            ->add('numbastidor')
            ->add('fecmatriculacion')
            ->add('fecfabricacion')
            ->add('fecitv')
            ->add('fecmantenimiento')
            ->add('fictecnica')
            ->add('percirculacion')
//            ->add('idVehiculo')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('matricula')
            ->add('numbastidor')
            ->add('fecmatriculacion')
            ->add('fecfabricacion')
            ->add('fecitv')
            ->add('fecmantenimiento')
            ->add('fictecnica')
            ->add('percirculacion')
//            ->add('idVehiculo')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
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
            ->add('matricula')
            ->add('numbastidor')
            ->add('fecmatriculacion')
            ->add('fecfabricacion')
            ->add('fecitv')
            ->add('fecmantenimiento')
            ->add('fictecnica')
            ->add('percirculacion')
//            ->add('idVehiculo')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('matricula')
            ->add('numbastidor')
            ->add('fecmatriculacion')
            ->add('fecfabricacion')
            ->add('fecitv')
            ->add('fecmantenimiento')
            ->add('fictecnica')
            ->add('percirculacion')
//            ->add('idVehiculo')
        ;
    }
}
