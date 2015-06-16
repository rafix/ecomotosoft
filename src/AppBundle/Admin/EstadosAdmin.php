<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EstadosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('estado1')
            ->add('estado2')
            ->add('estado3')
            ->add('estado4')
            ->add('estado5')
            ->add('estado6')
//            ->add('idEstado')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('estado1')
            ->add('estado2')
            ->add('estado3')
            ->add('estado4')
            ->add('estado5')
            ->add('estado6')
//            ->add('idEstado')
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
            ->add('estado1')
            ->add('estado2')
            ->add('estado3')
            ->add('estado4')
            ->add('estado5')
            ->add('estado6')
//            ->add('idEstado')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('estado1')
            ->add('estado2')
            ->add('estado3')
            ->add('estado4')
            ->add('estado5')
            ->add('estado6')
//            ->add('idEstado')
        ;
    }
}
