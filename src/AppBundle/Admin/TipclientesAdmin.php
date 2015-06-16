<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipclientesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipcliente1')
            ->add('tipcliente2')
            ->add('tipcliente3')
            ->add('tipcliente4')
            ->add('tipcliente5')
            ->add('tipcliente6')
//            ->add('idTipcliente')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipcliente1')
            ->add('tipcliente2')
            ->add('tipcliente3')
            ->add('tipcliente4')
            ->add('tipcliente5')
            ->add('tipcliente6')
//            ->add('idTipcliente')
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
            ->add('tipcliente1')
            ->add('tipcliente2')
            ->add('tipcliente3')
            ->add('tipcliente4')
            ->add('tipcliente5')
            ->add('tipcliente6')
//            ->add('idTipcliente')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tipcliente1')
            ->add('tipcliente2')
            ->add('tipcliente3')
            ->add('tipcliente4')
            ->add('tipcliente5')
            ->add('tipcliente6')
//            ->add('idTipcliente')
        ;
    }
}
