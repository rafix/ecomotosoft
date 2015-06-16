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
            ->add('descripcion1')
            ->add('descripcion2')
            ->add('descripcion3')
            ->add('descripcion4')
            ->add('descripcion5')
            ->add('descripcion6')
            ->add('ean13')
            ->add('pvp')
            ->add('imagen1')
            ->add('imagen2')
            ->add('observaciones')
            ->add('idProducto')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('referencia')
            ->add('descripcion1')
            ->add('descripcion2')
            ->add('descripcion3')
            ->add('descripcion4')
            ->add('descripcion5')
            ->add('descripcion6')
            ->add('ean13')
            ->add('pvp')
            ->add('imagen1')
            ->add('imagen2')
            ->add('observaciones')
            ->add('idProducto')
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
            ->add('referencia')
            ->add('descripcion1')
            ->add('descripcion2')
            ->add('descripcion3')
            ->add('descripcion4')
            ->add('descripcion5')
            ->add('descripcion6')
            ->add('ean13')
            ->add('pvp')
            ->add('imagen1')
            ->add('imagen2')
            ->add('observaciones')
            ->add('idProducto')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('referencia')
            ->add('descripcion1')
            ->add('descripcion2')
            ->add('descripcion3')
            ->add('descripcion4')
            ->add('descripcion5')
            ->add('descripcion6')
            ->add('ean13')
            ->add('pvp')
            ->add('imagen1')
            ->add('imagen2')
            ->add('observaciones')
            ->add('idProducto')
        ;
    }
}
