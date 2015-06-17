<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EmpresasAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nifCif')
            ->add('nomfiscal')
            ->add('nomcomercial')
            ->add('numplaca')
            ->add('facebook')
            ->add('direccion')
            ->add('logo')
            ->add('premanoobra')
            ->add('web')
            ->add('activo')
            ->add('autorizado')
            ->add('proveedor')
            ->add('concesionario')
//            ->add('idEmpresa')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nifCif')
            ->add('nomfiscal')
            ->add('nomcomercial')
            ->add('numplaca')
            ->add('facebook')
            ->add('direccion')
            ->add('logo')
            ->add('premanoobra')
            ->add('web')
            ->add('activo')
            ->add('autorizado')
            ->add('proveedor')
            ->add('concesionario')
//            ->add('idEmpresa')
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
            ->add('nifCif')
            ->add('nomfiscal')
            ->add('nomcomercial')
            ->add('numplaca')
            ->add('facebook')
            ->add('direccion')
            ->add('logo')
            ->add('premanoobra')
            ->add('web')
            ->add('activo')
            ->add('autorizado')
            ->add('proveedor')
            ->add('concesionario')
//            ->add('idEmpresa')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nifCif')
            ->add('nomfiscal')
            ->add('nomcomercial')
            ->add('numplaca')
            ->add('facebook')
            ->add('direccion')
            ->add('logo')
            ->add('premanoobra')
            ->add('web')
            ->add('activo')
            ->add('autorizado')
            ->add('proveedor')
            ->add('concesionario')
//            ->add('idEmpresa')
        ;
    }
}
