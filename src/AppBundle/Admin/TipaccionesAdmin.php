<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipaccionesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipaccion1')
            ->add('tipaccion2')
            ->add('tipaccion3')
            ->add('tipaccion4')
            ->add('tipaccion5')
            ->add('tipaccion6')
//            ->add('idTipaccion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipaccion1')
            ->add('tipaccion2')
            ->add('tipaccion3')
            ->add('tipaccion4')
            ->add('tipaccion5')
            ->add('tipaccion6')
//            ->add('idTipaccion')
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
            ->add('tipaccion1')
            ->add('tipaccion2')
            ->add('tipaccion3')
            ->add('tipaccion4')
            ->add('tipaccion5')
            ->add('tipaccion6')
//            ->add('idTipaccion')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tipaccion1')
            ->add('tipaccion2')
            ->add('tipaccion3')
            ->add('tipaccion4')
            ->add('tipaccion5')
            ->add('tipaccion6')
//            ->add('idTipaccion')
        ;
    }
}
