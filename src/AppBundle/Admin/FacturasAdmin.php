<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class FacturasAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('numfactura')
            ->add('total')
            ->add('pagado')
            ->add('observaciones')
            ->add('fecha')
//            ->add('idFactura')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('numfactura')
            ->add('total')
            ->add('pagado')
            ->add('observaciones')
            ->add('fecha')
//            ->add('idFactura')
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
            ->add('numfactura')
            ->add('total')
            ->add('pagado')
            ->add('observaciones')
            ->add('fecha')
//            ->add('idFactura')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('numfactura')
            ->add('total')
            ->add('pagado')
            ->add('observaciones')
            ->add('fecha')
//            ->add('idFactura')
        ;
    }
}
