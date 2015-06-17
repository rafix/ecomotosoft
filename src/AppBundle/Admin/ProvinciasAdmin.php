<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProvinciasAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('provincia')
//            ->add('provincia2')
//            ->add('provincia3')
//            ->add('provincia4')
//            ->add('provincia5')
//            ->add('provincia6')
//            ->add('idProvincia')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('provincia')
//            ->add('provincia2')
//            ->add('provincia3')
//            ->add('provincia4')
//            ->add('provincia5')
//            ->add('provincia6')
//            ->add('idProvincia')
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
            ->add('provincia')
//            ->add('provincia2')
//            ->add('provincia3')
//            ->add('provincia4')
//            ->add('provincia5')
//            ->add('provincia6')
//            ->add('idProvincia')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('provincia')
//            ->add('provincia2')
//            ->add('provincia3')
//            ->add('provincia4')
//            ->add('provincia5')
//            ->add('provincia6')
//            ->add('idProvincia')
        ;
    }
}
