<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class VehiculosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('matricula', null, array(
                'label' => 'Matrícula',
            ))
            ->add('numbastidor', null, array(
                'label' => 'Número del Bastidor',
            ))
            ->add('fecmatriculacion', null, array(
                'label' => 'Fecha de Matriculación',
            ))
            ->add('fecfabricacion', null, array(
                'label' => 'Fecha de Fabricación',
            ))
            ->add('fecitv', null, array(
                'label' => 'Fecha ITV',
            ))
            ->add('fecmantenimiento', null, array(
                'label' => 'Fecha de Mantenimiento',
            ))
            ->add('fictecnica', null, array(
                'label' => 'Ficha Técnica',
            ))
            ->add('percirculacion', null, array(
                'label' => 'Permiso de Circulación',
            ))
            ->add('modelo')
            ->add('cliente')
            ->add('pais', null, array(
                'label' => 'País'
            ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('matricula', null, array(
                'label' => 'Matrícula',
            ))
//            ->add('numbastidor', null, array(
//                'label' => 'Número del Bastidor',
//            ))
//            ->add('fecmatriculacion', null, array(
//                'label' => 'Fecha de Matriculación',
//            ))
//            ->add('fecfabricacion', null, array(
//                'label' => 'Fecha de Fabricación',
//            ))
//            ->add('fecitv', null, array(
//                'label' => 'Fecha ITV',
//            ))
//            ->add('fecmantenimiento', null, array(
//                'label' => 'Fecha de Mantenimiento',
//            ))
//            ->add('fictecnica', null, array(
//                'label' => 'Ficha Técnica',
//            ))
//            ->add('percirculacion', null, array(
//                'label' => 'Permiso de Circulación',
//            ))
            ->add('modelo')
            ->add('cliente')
            ->add('pais', null, array(
                'label' => 'País'
            ))
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
            ->add('matricula', null, array(
                'label' => 'Matrícula',
            ))
            ->add('numbastidor', null, array(
                'label' => 'Número del Bastidor',
            ))
            ->add('fecmatriculacion', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Matriculación',
            ))
            ->add('fecfabricacion', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Fabricación',
            ))
            ->add('fecitv', 'sonata_type_date_picker', array(
                'label' => 'Fecha ITV',
            ))
            ->add('fecmantenimiento', 'sonata_type_datetime_picker', array(
                'label' => 'Fecha de Mantenimiento',
            ))
            ->add('fictecnica', null, array(
                'label' => 'Ficha Técnica',
            ))
            ->add('percirculacion', null, array(
                'label' => 'Permiso de Circulación',
            ))
            ->add('modelo')
            ->add('cliente')
            ->add('pais', null, array(
                'label' => 'País',
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('matricula', null, array(
                'label' => 'Matrícula',
            ))
            ->add('numbastidor', null, array(
                'label' => 'Número del Bastidor',
            ))
            ->add('fecmatriculacion', null, array(
                'label' => 'Fecha de Matriculación',
            ))
            ->add('fecfabricacion', null, array(
                'label' => 'Fecha de Fabricación',
            ))
            ->add('fecitv', null, array(
                'label' => 'Fecha ITV',
            ))
            ->add('fecmantenimiento', null, array(
                'label' => 'Fecha de Mantenimiento',
            ))
            ->add('fictecnica', null, array(
                'label' => 'Ficha Técnica',
            ))
            ->add('percirculacion', null, array(
                'label' => 'Permiso de Circulación',
            ))
            ->add('modelo')
            ->add('cliente')
            ->add('pais', null, array(
                'label' => 'País'
            ))
        ;
    }
}
