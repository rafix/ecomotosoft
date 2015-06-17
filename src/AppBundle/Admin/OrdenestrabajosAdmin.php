<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OrdenestrabajosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('numordentrabajo')
            ->add('observaciones')
            ->add('fecha')
            ->add('presupuestado')
            ->add('facturado')
//            ->add('idOrdentrabajo')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('numordentrabajo')
            ->add('observaciones')
            ->add('fecha')
            ->add('presupuestado')
            ->add('facturado')
//            ->add('idOrdentrabajo')
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
            ->add('numordentrabajo')
            ->add('observaciones')
            ->add('fecha')
            ->add('presupuestado')
            ->add('facturado')
//            ->add('idOrdentrabajo')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('numordentrabajo')
            ->add('observaciones')
            ->add('fecha')
            ->add('presupuestado')
            ->add('facturado')
//            ->add('idOrdentrabajo')
        ;
    }
}
