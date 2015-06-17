<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipingresosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipingreso')
//            ->add('tipingreso2')
//            ->add('tipingreso3')
//            ->add('tipingreso4')
//            ->add('tipingreso5')
//            ->add('tipingreso6')
//            ->add('idTipingreso')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipingreso')
//            ->add('tipingreso2')
//            ->add('tipingreso3')
//            ->add('tipingreso4')
//            ->add('tipingreso5')
//            ->add('tipingreso6')
//            ->add('idTipingreso')
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
            ->add('tipingreso')
//            ->add('tipingreso2')
//            ->add('tipingreso3')
//            ->add('tipingreso4')
//            ->add('tipingreso5')
//            ->add('tipingreso6')
//            ->add('idTipingreso')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tipingreso')
//            ->add('tipingreso2')
//            ->add('tipingreso3')
//            ->add('tipingreso4')
//            ->add('tipingreso5')
//            ->add('tipingreso6')
//            ->add('idTipingreso')
        ;
    }
}
