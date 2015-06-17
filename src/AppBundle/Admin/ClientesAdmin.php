<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ClientesAdmin extends Admin
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
            ->add('direccion')
            ->add('telefono1')
            ->add('telefono2')
            ->add('fax')
            ->add('email')
            ->add('activo')
//            ->add('idCliente')
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
            ->add('direccion')
            ->add('telefono1')
            ->add('telefono2')
            ->add('fax')
            ->add('email')
            ->add('activo')
//            ->add('idCliente')
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
            ->add('direccion')
            ->add('telefono1')
            ->add('telefono2')
            ->add('fax')
            ->add('email')
            ->add('activo')
//            ->add('idCliente')
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
            ->add('direccion')
            ->add('telefono1')
            ->add('telefono2')
            ->add('fax')
            ->add('email')
            ->add('activo')
//            ->add('idCliente')
        ;
    }
}
