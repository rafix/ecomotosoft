<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipcombustiblesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipcombustible1')
            ->add('tipcombustible2')
            ->add('tipcombustible3')
            ->add('tipcombustible4')
            ->add('tipcombustible5')
            ->add('tipcombustible6')
//            ->add('idTipcombustible')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipcombustible1')
            ->add('tipcombustible2')
            ->add('tipcombustible3')
            ->add('tipcombustible4')
            ->add('tipcombustible5')
            ->add('tipcombustible6')
//            ->add('idTipcombustible')
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
            ->add('tipcombustible1')
            ->add('tipcombustible2')
            ->add('tipcombustible3')
            ->add('tipcombustible4')
            ->add('tipcombustible5')
            ->add('tipcombustible6')
//            ->add('idTipcombustible')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tipcombustible1')
            ->add('tipcombustible2')
            ->add('tipcombustible3')
            ->add('tipcombustible4')
            ->add('tipcombustible5')
            ->add('tipcombustible6')
//            ->add('idTipcombustible')
        ;
    }
}
