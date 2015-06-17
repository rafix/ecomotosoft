<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PresupuestosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('numpresupuesto')
            ->add('total')
            ->add('acuenta')
            ->add('observaciones')
            ->add('fecha')
            ->add('avisado')
            ->add('facturado')
//            ->add('idPresupuesto')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('numpresupuesto')
            ->add('total')
            ->add('acuenta')
            ->add('observaciones')
            ->add('fecha')
            ->add('avisado')
            ->add('facturado')
//            ->add('idPresupuesto')
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
            ->add('numpresupuesto')
            ->add('total')
            ->add('acuenta')
            ->add('observaciones')
            ->add('fecha')
            ->add('avisado')
            ->add('facturado')
//            ->add('idPresupuesto')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('numpresupuesto')
            ->add('total')
            ->add('acuenta')
            ->add('observaciones')
            ->add('fecha')
            ->add('avisado')
            ->add('facturado')
//            ->add('idPresupuesto')
        ;
    }
}
