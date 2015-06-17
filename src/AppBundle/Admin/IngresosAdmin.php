<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class IngresosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fyhingreso')
            ->add('fyhinicio')
            ->add('fyhfinalizacion')
            ->add('fyhentrega')
            ->add('observaciones')
//            ->add('idIngreso')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fyhingreso')
            ->add('fyhinicio')
            ->add('fyhfinalizacion')
            ->add('fyhentrega')
            ->add('observaciones')
//            ->add('idIngreso')
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
            ->add('fyhingreso')
            ->add('fyhinicio')
            ->add('fyhfinalizacion')
            ->add('fyhentrega')
            ->add('observaciones')
//            ->add('idIngreso')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fyhingreso')
            ->add('fyhinicio')
            ->add('fyhfinalizacion')
            ->add('fyhentrega')
            ->add('observaciones')
//            ->add('idIngreso')
        ;
    }
}
