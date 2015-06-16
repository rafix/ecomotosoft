<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class IdiomasAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('idioma1')
            ->add('idioma2')
            ->add('idioma3')
            ->add('idioma4')
            ->add('idioma5')
            ->add('idioma6')
//            ->add('idIdioma')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('idioma1')
            ->add('idioma2')
            ->add('idioma3')
            ->add('idioma4')
            ->add('idioma5')
            ->add('idioma6')
//            ->add('idIdioma')
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
            ->add('idioma1')
            ->add('idioma2')
            ->add('idioma3')
            ->add('idioma4')
            ->add('idioma5')
            ->add('idioma6')
//            ->add('idIdioma')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('idioma1')
            ->add('idioma2')
            ->add('idioma3')
            ->add('idioma4')
            ->add('idioma5')
            ->add('idioma6')
//            ->add('idIdioma')
        ;
    }
}
