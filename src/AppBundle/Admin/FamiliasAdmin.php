<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class FamiliasAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('familia1')
            ->add('familia2')
            ->add('familia3')
            ->add('familia4')
            ->add('familia5')
            ->add('familia6')
            ->add('idFamilia')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('familia1')
            ->add('familia2')
            ->add('familia3')
            ->add('familia4')
            ->add('familia5')
            ->add('familia6')
            ->add('idFamilia')
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
            ->add('familia1')
            ->add('familia2')
            ->add('familia3')
            ->add('familia4')
            ->add('familia5')
            ->add('familia6')
            ->add('idFamilia')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('familia1')
            ->add('familia2')
            ->add('familia3')
            ->add('familia4')
            ->add('familia5')
            ->add('familia6')
            ->add('idFamilia')
        ;
    }
}
