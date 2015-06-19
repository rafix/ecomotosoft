<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProductosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('referencia')
            ->add('descripcion', null, array(
                'label' => 'Descripción'
            ))
            ->add('ean13', null, array(
                'label' => 'Código de barras'
            ))
            ->add('pvp', null, array(
                'label' => 'PVP'
            ))
            ->add('imagen1')
            ->add('imagen2')
            ->add('observaciones')
            ->add('familia')
            ->add('marca')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('referencia')
            ->add('descripcion', null, array(
                'label' => 'Descripción'
            ))
//            ->add('ean13', null, array(
//                'label' => 'Código de barras'
//            ))
            ->add('pvp', null, array(
                'label' => 'PVP'
            ))
            ->add('familia')
            ->add('marca')
//            ->add('imagen1')
//            ->add('imagen2')
//            ->add('observaciones')
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
            ->add('referencia')
            ->add('descripcion', null, array(
                'label' => 'Descripción'
            ))
            ->add('ean13', null, array(
                'label' => 'Código de barras'
            ))
            ->add('pvp', null, array(
                'label' => 'PVP'
            ))
            ->add('imagen1')
            ->add('imagen2')
            ->add('observaciones')
            ->add('familia')
            ->add('marca')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('referencia')
            ->add('descripcion', null, array(
                'label' => 'Descripción'
            ))
            ->add('ean13', null, array(
                'label' => 'Código de barras'
            ))
            ->add('pvp', null, array(
                'label' => 'PVP'
            ))
            ->add('imagen1')
            ->add('imagen2')
            ->add('observaciones')
            ->add('familia')
            ->add('marca')
        ;
    }
}
