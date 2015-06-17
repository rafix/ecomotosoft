<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ServiciosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('referencia')
            ->add('servicio')
//            ->add('servicio2')
//            ->add('servicio3')
//            ->add('servicio4')
//            ->add('servicio5')
//            ->add('servicio6')
//            ->add('idServicio')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('referencia')
            ->add('servicio')
//            ->add('servicio2')
//            ->add('servicio3')
//            ->add('servicio4')
//            ->add('servicio5')
//            ->add('servicio6')
//            ->add('idServicio')
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
            ->add('referencia')
            ->add('servicio')
//            ->add('servicio2')
//            ->add('servicio3')
//            ->add('servicio4')
//            ->add('servicio5')
//            ->add('servicio6')
//            ->add('idServicio')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('referencia')
            ->add('servicio')
//            ->add('servicio2')
//            ->add('servicio3')
//            ->add('servicio4')
//            ->add('servicio5')
//            ->add('servicio6')
//            ->add('idServicio')
        ;
    }
}
