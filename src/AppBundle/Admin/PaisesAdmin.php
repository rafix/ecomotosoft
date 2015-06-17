<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PaisesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('pais')
//            ->add('pais2')
//            ->add('pais3')
//            ->add('pais4')
//            ->add('pais5')
//            ->add('pais6')
            ->add('bandera')
//            ->add('idPais')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('pais')
//            ->add('pais2')
//            ->add('pais3')
//            ->add('pais4')
//            ->add('pais5')
//            ->add('pais6')
            ->add('bandera')
//            ->add('idPais')
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
            ->add('pais')
//            ->add('pais2')
//            ->add('pais3')
//            ->add('pais4')
//            ->add('pais5')
//            ->add('pais6')
            ->add('bandera')
//            ->add('idPais')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('pais')
//            ->add('pais2')
//            ->add('pais3')
//            ->add('pais4')
//            ->add('pais5')
//            ->add('pais6')
            ->add('bandera')
//            ->add('idPais')
        ;
    }
}
