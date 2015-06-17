<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TippagosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tippago')
//            ->add('tippago2')
//            ->add('tippago3')
//            ->add('tippago4')
//            ->add('tippago5')
//            ->add('tippago6')
//            ->add('idTippago')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tippago')
//            ->add('tippago2')
//            ->add('tippago3')
//            ->add('tippago4')
//            ->add('tippago5')
//            ->add('tippago6')
//            ->add('idTippago')
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
            ->add('tippago')
//            ->add('tippago2')
//            ->add('tippago3')
//            ->add('tippago4')
//            ->add('tippago5')
//            ->add('tippago6')
//            ->add('idTippago')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tippago')
//            ->add('tippago2')
//            ->add('tippago3')
//            ->add('tippago4')
//            ->add('tippago5')
//            ->add('tippago6')
//            ->add('idTippago')
        ;
    }
}
