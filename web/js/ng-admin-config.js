(function() {
    "use strict";

    var app = angular.module('myApp', ['ng-admin']);

    // use custom query parameters function to format the API request correctly
    app.config(function(RestangularProvider) {
        RestangularProvider.addFullRequestInterceptor(function(element, operation, what, url, headers, params) {
            if (operation == "getList") {
                // custom pagination params
                params._offset = (params._page - 1) * params._perPage;
                params._limit = params._perPage;
                delete params._page;
                delete params._perPage;

                // custom sort params
                if (params._sortField) {
                    params._orderBy = params._sortField;
                    params._orderDir = params._sortDir;
                    delete params._sortField;
                    delete params._sortDir;
                }

                // custom filters
                if (params._filters) {
                    for (var filter in params._filters) {
                        params[filter] = params._filters[filter];
                    }
                    delete params._filters;
                }
            }

            return { params: params };
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("CitasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var citas = nga.entity('citas');

            RestangularProvider.addElementTransformer('citas', function(element) {
                if (element.idVehiculo) {
                    element.idVehiculo = element.idVehiculo.id;
                }

                if (element.idTipingreso) {
                    element.idTipingreso = element.idTipingreso.id;
                }

                if (element.idCliente) {
                    element.idCliente = element.idCliente.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            citas.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            citas.dashboardView()
                .title('Recent citas')
                .limit(5)
                .fields([
                    nga.field('fechayhora', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_cita', 'number'),
                ]);

            citas.listView()
                .fields([
                    nga.field('fechayhora', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_cita', 'number'),
                    nga.field('idVehiculo', 'reference')
                        .targetEntity(nga.entity('idVehiculos'))
                        .targetField(nga.field('matricula')),
                    nga.field('idTipingreso', 'reference')
                        .targetEntity(nga.entity('idTipingresos'))
                        .targetField(nga.field('tipingreso1')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            citas.creationView()
                .fields([
                    nga.field('fechayhora', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_cita', 'number'),
                    nga.field('idVehiculo', 'reference')
                        .targetEntity(nga.entity('idVehiculos'))
                        .targetField(nga.field('matricula')),
                    nga.field('idTipingreso', 'reference')
                        .targetEntity(nga.entity('idTipingresos'))
                        .targetField(nga.field('tipingreso1')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            citas.editionView()
                .fields([
                    nga.field('fechayhora', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_cita', 'number'),
                    nga.field('idVehiculo', 'reference')
                        .targetEntity(nga.entity('idVehiculos'))
                        .targetField(nga.field('matricula')),
                    nga.field('idTipingreso', 'reference')
                        .targetEntity(nga.entity('idTipingresos'))
                        .targetField(nga.field('tipingreso1')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            citas.showView()
                .fields([
                    nga.field('fechayhora', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_cita', 'number'),
                    nga.field('idVehiculo', 'reference')
                        .targetEntity(nga.entity('idVehiculos'))
                        .targetField(nga.field('matricula')),
                    nga.field('idTipingreso', 'reference')
                        .targetEntity(nga.entity('idTipingresos'))
                        .targetField(nga.field('tipingreso1')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return citas;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("ClientesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var clientes = nga.entity('clientes');

            RestangularProvider.addElementTransformer('clientes', function(element) {
                if (element.idCodpostal) {
                    element.idCodpostal = element.idCodpostal.id;
                }

                if (element.idioma) {
                    element.idioma = element.idioma.id;
                }

                if (element.idTipcliente) {
                    element.idTipcliente = element.idTipcliente.id;
                }

                return element;
            });

            clientes.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            clientes.dashboardView()
                .title('Recent clientes')
                .limit(5)
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                ]);

            clientes.listView()
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                    nga.field('direccion'),
                    nga.field('telefono1'),
                    nga.field('telefono2'),
                    nga.field('fax'),
                    nga.field('email'),
                    nga.field('activo', 'boolean'),
                    nga.field('id_cliente', 'number'),
                    nga.field('idCodpostal', 'reference')
                        .targetEntity(nga.entity('idCodpostals'))
                        .targetField(nga.field('codpostal')),
                    nga.field('idioma', 'reference')
                        .targetEntity(nga.entity('idiomas'))
                        .targetField(nga.field('idioma1')),
                    nga.field('idTipcliente', 'reference')
                        .targetEntity(nga.entity('idTipclientes'))
                        .targetField(nga.field('tipcliente1')),
                ])
                .listActions(['show', 'edit', 'delete']);

            clientes.creationView()
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                    nga.field('direccion'),
                    nga.field('telefono1'),
                    nga.field('telefono2'),
                    nga.field('fax'),
                    nga.field('email'),
                    nga.field('activo', 'boolean'),
                    nga.field('id_cliente', 'number'),
                    nga.field('idCodpostal', 'reference')
                        .targetEntity(nga.entity('idCodpostals'))
                        .targetField(nga.field('codpostal')),
                    nga.field('idioma', 'reference')
                        .targetEntity(nga.entity('idiomas'))
                        .targetField(nga.field('idioma1')),
                    nga.field('idTipcliente', 'reference')
                        .targetEntity(nga.entity('idTipclientes'))
                        .targetField(nga.field('tipcliente1')),
                ]);

            clientes.editionView()
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                    nga.field('direccion'),
                    nga.field('telefono1'),
                    nga.field('telefono2'),
                    nga.field('fax'),
                    nga.field('email'),
                    nga.field('activo', 'boolean'),
                    nga.field('id_cliente', 'number'),
                    nga.field('idCodpostal', 'reference')
                        .targetEntity(nga.entity('idCodpostals'))
                        .targetField(nga.field('codpostal')),
                    nga.field('idioma', 'reference')
                        .targetEntity(nga.entity('idiomas'))
                        .targetField(nga.field('idioma1')),
                    nga.field('idTipcliente', 'reference')
                        .targetEntity(nga.entity('idTipclientes'))
                        .targetField(nga.field('tipcliente1')),
                ]);

            clientes.showView()
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                    nga.field('direccion'),
                    nga.field('telefono1'),
                    nga.field('telefono2'),
                    nga.field('fax'),
                    nga.field('email'),
                    nga.field('activo', 'boolean'),
                    nga.field('id_cliente', 'number'),
                    nga.field('idCodpostal', 'reference')
                        .targetEntity(nga.entity('idCodpostals'))
                        .targetField(nga.field('codpostal')),
                    nga.field('idioma', 'reference')
                        .targetEntity(nga.entity('idiomas'))
                        .targetField(nga.field('idioma1')),
                    nga.field('idTipcliente', 'reference')
                        .targetEntity(nga.entity('idTipclientes'))
                        .targetField(nga.field('tipcliente1')),
                ]);

            return clientes;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("CodpostalesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var codpostales = nga.entity('codpostales');

            RestangularProvider.addElementTransformer('codpostales', function(element) {
                if (element.idPoblacion) {
                    element.idPoblacion = element.idPoblacion.id;
                }

                return element;
            });

            codpostales.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            codpostales.dashboardView()
                .title('Recent codpostales')
                .limit(5)
                .fields([
                    nga.field('codpostal'),
                    nga.field('id_codpostal', 'number'),
                    nga.field('idPoblacion', 'reference')
                        .targetEntity(nga.entity('idPoblacions'))
                        .targetField(nga.field('poblacion1')),
                ]);

            codpostales.listView()
                .fields([
                    nga.field('codpostal'),
                    nga.field('id_codpostal', 'number'),
                    nga.field('idPoblacion', 'reference')
                        .targetEntity(nga.entity('idPoblacions'))
                        .targetField(nga.field('poblacion1')),
                ])
                .listActions(['show', 'edit', 'delete']);

            codpostales.creationView()
                .fields([
                    nga.field('codpostal'),
                    nga.field('id_codpostal', 'number'),
                    nga.field('idPoblacion', 'reference')
                        .targetEntity(nga.entity('idPoblacions'))
                        .targetField(nga.field('poblacion1')),
                ]);

            codpostales.editionView()
                .fields([
                    nga.field('codpostal'),
                    nga.field('id_codpostal', 'number'),
                    nga.field('idPoblacion', 'reference')
                        .targetEntity(nga.entity('idPoblacions'))
                        .targetField(nga.field('poblacion1')),
                ]);

            codpostales.showView()
                .fields([
                    nga.field('codpostal'),
                    nga.field('id_codpostal', 'number'),
                    nga.field('idPoblacion', 'reference')
                        .targetEntity(nga.entity('idPoblacions'))
                        .targetField(nga.field('poblacion1')),
                ]);

            return codpostales;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("DencomercialesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var dencomerciales = nga.entity('dencomerciales');

            RestangularProvider.addElementTransformer('dencomerciales', function(element) {
                if (element.idFabricante) {
                    element.idFabricante = element.idFabricante.id;
                }

                return element;
            });

            dencomerciales.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            dencomerciales.dashboardView()
                .title('Recent dencomerciales')
                .limit(5)
                .fields([
                    nga.field('dencomercial'),
                    nga.field('id_dencomercial', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                ]);

            dencomerciales.listView()
                .fields([
                    nga.field('dencomercial'),
                    nga.field('id_dencomercial', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                ])
                .listActions(['show', 'edit', 'delete']);

            dencomerciales.creationView()
                .fields([
                    nga.field('dencomercial'),
                    nga.field('id_dencomercial', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                ]);

            dencomerciales.editionView()
                .fields([
                    nga.field('dencomercial'),
                    nga.field('id_dencomercial', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                ]);

            dencomerciales.showView()
                .fields([
                    nga.field('dencomercial'),
                    nga.field('id_dencomercial', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                ]);

            return dencomerciales;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("Detfacturas1Admin", function() {
            var nga = NgAdminConfigurationProvider;
            var detfacturas1 = nga.entity('detfacturas1');

            RestangularProvider.addElementTransformer('detfacturas1', function(element) {
                if (element.idProducto) {
                    element.idProducto = element.idProducto.id;
                }

                if (element.idFactura) {
                    element.idFactura = element.idFactura.id;
                }

                return element;
            });

            detfacturas1.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            detfacturas1.dashboardView()
                .title('Recent detfacturas1')
                .limit(5)
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detfactura1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                ]);

            detfacturas1.listView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detfactura1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ])
                .listActions(['show', 'edit', 'delete']);

            detfacturas1.creationView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detfactura1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ]);

            detfacturas1.editionView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detfactura1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ]);

            detfacturas1.showView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detfactura1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ]);

            return detfacturas1;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("Detfacturas2Admin", function() {
            var nga = NgAdminConfigurationProvider;
            var detfacturas2 = nga.entity('detfacturas2');

            RestangularProvider.addElementTransformer('detfacturas2', function(element) {
                if (element.idServicio) {
                    element.idServicio = element.idServicio.id;
                }

                if (element.idFactura) {
                    element.idFactura = element.idFactura.id;
                }

                return element;
            });

            detfacturas2.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            detfacturas2.dashboardView()
                .title('Recent detfacturas2')
                .limit(5)
                .fields([
                    nga.field('id_detfactura2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ]);

            detfacturas2.listView()
                .fields([
                    nga.field('id_detfactura2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ])
                .listActions(['show', 'edit', 'delete']);

            detfacturas2.creationView()
                .fields([
                    nga.field('id_detfactura2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ]);

            detfacturas2.editionView()
                .fields([
                    nga.field('id_detfactura2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ]);

            detfacturas2.showView()
                .fields([
                    nga.field('id_detfactura2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idFactura', 'reference')
                        .targetEntity(nga.entity('idFacturas'))
                        .targetField(nga.field('numfactura')),
                ]);

            return detfacturas2;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("Detordenestrabajos1Admin", function() {
            var nga = NgAdminConfigurationProvider;
            var detordenestrabajos1 = nga.entity('detordenestrabajos1');

            RestangularProvider.addElementTransformer('detordenestrabajos1', function(element) {
                if (element.idProducto) {
                    element.idProducto = element.idProducto.id;
                }

                if (element.idOrdentrabajo) {
                    element.idOrdentrabajo = element.idOrdentrabajo.id;
                }

                return element;
            });

            detordenestrabajos1.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            detordenestrabajos1.dashboardView()
                .title('Recent detordenestrabajos1')
                .limit(5)
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detordentrabajo1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                ]);

            detordenestrabajos1.listView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detordentrabajo1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ])
                .listActions(['show', 'edit', 'delete']);

            detordenestrabajos1.creationView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detordentrabajo1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ]);

            detordenestrabajos1.editionView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detordentrabajo1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ]);

            detordenestrabajos1.showView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detordentrabajo1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ]);

            return detordenestrabajos1;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("Detordenestrabajos2Admin", function() {
            var nga = NgAdminConfigurationProvider;
            var detordenestrabajos2 = nga.entity('detordenestrabajos2');

            RestangularProvider.addElementTransformer('detordenestrabajos2', function(element) {
                if (element.idServicio) {
                    element.idServicio = element.idServicio.id;
                }

                if (element.idOrdentrabajo) {
                    element.idOrdentrabajo = element.idOrdentrabajo.id;
                }

                return element;
            });

            detordenestrabajos2.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            detordenestrabajos2.dashboardView()
                .title('Recent detordenestrabajos2')
                .limit(5)
                .fields([
                    nga.field('id_detordentrabajo2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ]);

            detordenestrabajos2.listView()
                .fields([
                    nga.field('id_detordentrabajo2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ])
                .listActions(['show', 'edit', 'delete']);

            detordenestrabajos2.creationView()
                .fields([
                    nga.field('id_detordentrabajo2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ]);

            detordenestrabajos2.editionView()
                .fields([
                    nga.field('id_detordentrabajo2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ]);

            detordenestrabajos2.showView()
                .fields([
                    nga.field('id_detordentrabajo2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                ]);

            return detordenestrabajos2;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("Detpresupuestos1Admin", function() {
            var nga = NgAdminConfigurationProvider;
            var detpresupuestos1 = nga.entity('detpresupuestos1');

            RestangularProvider.addElementTransformer('detpresupuestos1', function(element) {
                if (element.idProducto) {
                    element.idProducto = element.idProducto.id;
                }

                if (element.idPresupuesto) {
                    element.idPresupuesto = element.idPresupuesto.id;
                }

                return element;
            });

            detpresupuestos1.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            detpresupuestos1.dashboardView()
                .title('Recent detpresupuestos1')
                .limit(5)
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detpresupuesto1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                ]);

            detpresupuestos1.listView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detpresupuesto1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ])
                .listActions(['show', 'edit', 'delete']);

            detpresupuestos1.creationView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detpresupuesto1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ]);

            detpresupuestos1.editionView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detpresupuesto1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ]);

            detpresupuestos1.showView()
                .fields([
                    nga.field('cantidad', 'float'),
                    nga.field('id_detpresupuesto1', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ]);

            return detpresupuestos1;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("Detpresupuestos2Admin", function() {
            var nga = NgAdminConfigurationProvider;
            var detpresupuestos2 = nga.entity('detpresupuestos2');

            RestangularProvider.addElementTransformer('detpresupuestos2', function(element) {
                if (element.idServicio) {
                    element.idServicio = element.idServicio.id;
                }

                if (element.idPresupuesto) {
                    element.idPresupuesto = element.idPresupuesto.id;
                }

                return element;
            });

            detpresupuestos2.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            detpresupuestos2.dashboardView()
                .title('Recent detpresupuestos2')
                .limit(5)
                .fields([
                    nga.field('id_detpresupuesto2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ]);

            detpresupuestos2.listView()
                .fields([
                    nga.field('id_detpresupuesto2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ])
                .listActions(['show', 'edit', 'delete']);

            detpresupuestos2.creationView()
                .fields([
                    nga.field('id_detpresupuesto2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ]);

            detpresupuestos2.editionView()
                .fields([
                    nga.field('id_detpresupuesto2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ]);

            detpresupuestos2.showView()
                .fields([
                    nga.field('id_detpresupuesto2', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                ]);

            return detpresupuestos2;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("EmpresasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var empresas = nga.entity('empresas');

            RestangularProvider.addElementTransformer('empresas', function(element) {
                if (element.idCodpostal) {
                    element.idCodpostal = element.idCodpostal.id;
                }

                if (element.idioma) {
                    element.idioma = element.idioma.id;
                }

                return element;
            });

            empresas.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            empresas.dashboardView()
                .title('Recent empresas')
                .limit(5)
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                ]);

            empresas.listView()
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                    nga.field('numplaca'),
                    nga.field('facebook'),
                    nga.field('direccion'),
                    nga.field('logo'),
                    nga.field('premanoobra', 'float'),
                    nga.field('web'),
                    nga.field('activo', 'boolean'),
                    nga.field('autorizado', 'boolean'),
                    nga.field('proveedor', 'boolean'),
                    nga.field('concesionario', 'boolean'),
                    nga.field('id_empresa', 'number'),
                    nga.field('idCodpostal', 'reference')
                        .targetEntity(nga.entity('idCodpostals'))
                        .targetField(nga.field('codpostal')),
                    nga.field('idioma', 'reference')
                        .targetEntity(nga.entity('idiomas'))
                        .targetField(nga.field('idioma1')),
                ])
                .listActions(['show', 'edit', 'delete']);

            empresas.creationView()
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                    nga.field('numplaca'),
                    nga.field('facebook'),
                    nga.field('direccion'),
                    nga.field('logo'),
                    nga.field('premanoobra', 'float'),
                    nga.field('web'),
                    nga.field('activo', 'boolean'),
                    nga.field('autorizado', 'boolean'),
                    nga.field('proveedor', 'boolean'),
                    nga.field('concesionario', 'boolean'),
                    nga.field('id_empresa', 'number'),
                    nga.field('idCodpostal', 'reference')
                        .targetEntity(nga.entity('idCodpostals'))
                        .targetField(nga.field('codpostal')),
                    nga.field('idioma', 'reference')
                        .targetEntity(nga.entity('idiomas'))
                        .targetField(nga.field('idioma1')),
                ]);

            empresas.editionView()
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                    nga.field('numplaca'),
                    nga.field('facebook'),
                    nga.field('direccion'),
                    nga.field('logo'),
                    nga.field('premanoobra', 'float'),
                    nga.field('web'),
                    nga.field('activo', 'boolean'),
                    nga.field('autorizado', 'boolean'),
                    nga.field('proveedor', 'boolean'),
                    nga.field('concesionario', 'boolean'),
                    nga.field('id_empresa', 'number'),
                    nga.field('idCodpostal', 'reference')
                        .targetEntity(nga.entity('idCodpostals'))
                        .targetField(nga.field('codpostal')),
                    nga.field('idioma', 'reference')
                        .targetEntity(nga.entity('idiomas'))
                        .targetField(nga.field('idioma1')),
                ]);

            empresas.showView()
                .fields([
                    nga.field('nif_cif'),
                    nga.field('nomfiscal'),
                    nga.field('nomcomercial'),
                    nga.field('numplaca'),
                    nga.field('facebook'),
                    nga.field('direccion'),
                    nga.field('logo'),
                    nga.field('premanoobra', 'float'),
                    nga.field('web'),
                    nga.field('activo', 'boolean'),
                    nga.field('autorizado', 'boolean'),
                    nga.field('proveedor', 'boolean'),
                    nga.field('concesionario', 'boolean'),
                    nga.field('id_empresa', 'number'),
                    nga.field('idCodpostal', 'reference')
                        .targetEntity(nga.entity('idCodpostals'))
                        .targetField(nga.field('codpostal')),
                    nga.field('idioma', 'reference')
                        .targetEntity(nga.entity('idiomas'))
                        .targetField(nga.field('idioma1')),
                ]);

            return empresas;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("EntbancariasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var entbancarias = nga.entity('entbancarias');

            entbancarias.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            entbancarias.dashboardView()
                .title('Recent entbancarias')
                .limit(5)
                .fields([
                    nga.field('entbancaria'),
                    nga.field('id_entbancaria', 'number'),
                ]);

            entbancarias.listView()
                .fields([
                    nga.field('entbancaria'),
                    nga.field('id_entbancaria', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            entbancarias.creationView()
                .fields([
                    nga.field('entbancaria'),
                    nga.field('id_entbancaria', 'number'),
                ]);

            entbancarias.editionView()
                .fields([
                    nga.field('entbancaria'),
                    nga.field('id_entbancaria', 'number'),
                ]);

            entbancarias.showView()
                .fields([
                    nga.field('entbancaria'),
                    nga.field('id_entbancaria', 'number'),
                ]);

            return entbancarias;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("EntradasosalidasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var entradasosalidas = nga.entity('entradasosalidas');

            RestangularProvider.addElementTransformer('entradasosalidas', function(element) {
                if (element.idProducto) {
                    element.idProducto = element.idProducto.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            entradasosalidas.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            entradasosalidas.dashboardView()
                .title('Recent entradasosalidas')
                .limit(5)
                .fields([
                    nga.field('canentrada', 'float'),
                    nga.field('cansalida', 'float'),
                    nga.field('fecentradaosalida', 'date'),
                ]);

            entradasosalidas.listView()
                .fields([
                    nga.field('canentrada', 'float'),
                    nga.field('cansalida', 'float'),
                    nga.field('fecentradaosalida', 'date'),
                    nga.field('id_entradaosalida', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            entradasosalidas.creationView()
                .fields([
                    nga.field('canentrada', 'float'),
                    nga.field('cansalida', 'float'),
                    nga.field('fecentradaosalida', 'date'),
                    nga.field('id_entradaosalida', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            entradasosalidas.editionView()
                .fields([
                    nga.field('canentrada', 'float'),
                    nga.field('cansalida', 'float'),
                    nga.field('fecentradaosalida', 'date'),
                    nga.field('id_entradaosalida', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            entradasosalidas.showView()
                .fields([
                    nga.field('canentrada', 'float'),
                    nga.field('cansalida', 'float'),
                    nga.field('fecentradaosalida', 'date'),
                    nga.field('id_entradaosalida', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return entradasosalidas;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("EstadosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var estados = nga.entity('estados');

            estados.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            estados.dashboardView()
                .title('Recent estados')
                .limit(5)
                .fields([
                    nga.field('estado1'),
                    nga.field('estado2'),
                    nga.field('estado3'),
                ]);

            estados.listView()
                .fields([
                    nga.field('estado1'),
                    nga.field('estado2'),
                    nga.field('estado3'),
                    nga.field('estado4'),
                    nga.field('estado5'),
                    nga.field('estado6'),
                    nga.field('id_estado', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            estados.creationView()
                .fields([
                    nga.field('estado1'),
                    nga.field('estado2'),
                    nga.field('estado3'),
                    nga.field('estado4'),
                    nga.field('estado5'),
                    nga.field('estado6'),
                    nga.field('id_estado', 'number'),
                ]);

            estados.editionView()
                .fields([
                    nga.field('estado1'),
                    nga.field('estado2'),
                    nga.field('estado3'),
                    nga.field('estado4'),
                    nga.field('estado5'),
                    nga.field('estado6'),
                    nga.field('id_estado', 'number'),
                ]);

            estados.showView()
                .fields([
                    nga.field('estado1'),
                    nga.field('estado2'),
                    nga.field('estado3'),
                    nga.field('estado4'),
                    nga.field('estado5'),
                    nga.field('estado6'),
                    nga.field('id_estado', 'number'),
                ]);

            return estados;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("FabricantesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var fabricantes = nga.entity('fabricantes');

            fabricantes.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            fabricantes.dashboardView()
                .title('Recent fabricantes')
                .limit(5)
                .fields([
                    nga.field('fabricante'),
                    nga.field('web'),
                    nga.field('logo'),
                ]);

            fabricantes.listView()
                .fields([
                    nga.field('fabricante'),
                    nga.field('web'),
                    nga.field('logo'),
                    nga.field('id_fabricante', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            fabricantes.creationView()
                .fields([
                    nga.field('fabricante'),
                    nga.field('web'),
                    nga.field('logo'),
                    nga.field('id_fabricante', 'number'),
                ]);

            fabricantes.editionView()
                .fields([
                    nga.field('fabricante'),
                    nga.field('web'),
                    nga.field('logo'),
                    nga.field('id_fabricante', 'number'),
                ]);

            fabricantes.showView()
                .fields([
                    nga.field('fabricante'),
                    nga.field('web'),
                    nga.field('logo'),
                    nga.field('id_fabricante', 'number'),
                ]);

            return fabricantes;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("FacturasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var facturas = nga.entity('facturas');

            RestangularProvider.addElementTransformer('facturas', function(element) {
                if (element.idTippago) {
                    element.idTippago = element.idTippago.id;
                }

                if (element.idOrdentrabajo) {
                    element.idOrdentrabajo = element.idOrdentrabajo.id;
                }

                if (element.idCliente) {
                    element.idCliente = element.idCliente.id;
                }

                if (element.idTipaccion) {
                    element.idTipaccion = element.idTipaccion.id;
                }

                if (element.idPresupuesto) {
                    element.idPresupuesto = element.idPresupuesto.id;
                }

                if (element.idIngreso) {
                    element.idIngreso = element.idIngreso.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            facturas.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            facturas.dashboardView()
                .title('Recent facturas')
                .limit(5)
                .fields([
                    nga.field('numfactura'),
                    nga.field('total', 'float'),
                    nga.field('pagado', 'float'),
                ]);

            facturas.listView()
                .fields([
                    nga.field('numfactura'),
                    nga.field('total', 'float'),
                    nga.field('pagado', 'float'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('id_factura', 'number'),
                    nga.field('idTippago', 'reference')
                        .targetEntity(nga.entity('idTippagos'))
                        .targetField(nga.field('tippago1')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idTipaccion', 'reference')
                        .targetEntity(nga.entity('idTipaccions'))
                        .targetField(nga.field('tipaccion1')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            facturas.creationView()
                .fields([
                    nga.field('numfactura'),
                    nga.field('total', 'float'),
                    nga.field('pagado', 'float'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('id_factura', 'number'),
                    nga.field('idTippago', 'reference')
                        .targetEntity(nga.entity('idTippagos'))
                        .targetField(nga.field('tippago1')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idTipaccion', 'reference')
                        .targetEntity(nga.entity('idTipaccions'))
                        .targetField(nga.field('tipaccion1')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            facturas.editionView()
                .fields([
                    nga.field('numfactura'),
                    nga.field('total', 'float'),
                    nga.field('pagado', 'float'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('id_factura', 'number'),
                    nga.field('idTippago', 'reference')
                        .targetEntity(nga.entity('idTippagos'))
                        .targetField(nga.field('tippago1')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idTipaccion', 'reference')
                        .targetEntity(nga.entity('idTipaccions'))
                        .targetField(nga.field('tipaccion1')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            facturas.showView()
                .fields([
                    nga.field('numfactura'),
                    nga.field('total', 'float'),
                    nga.field('pagado', 'float'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('id_factura', 'number'),
                    nga.field('idTippago', 'reference')
                        .targetEntity(nga.entity('idTippagos'))
                        .targetField(nga.field('tippago1')),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idTipaccion', 'reference')
                        .targetEntity(nga.entity('idTipaccions'))
                        .targetField(nga.field('tipaccion1')),
                    nga.field('idPresupuesto', 'reference')
                        .targetEntity(nga.entity('idPresupuestos'))
                        .targetField(nga.field('numpresupuesto')),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return facturas;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("FamiliasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var familias = nga.entity('familias');

            familias.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            familias.dashboardView()
                .title('Recent familias')
                .limit(5)
                .fields([
                    nga.field('familia1'),
                    nga.field('familia2'),
                    nga.field('familia3'),
                ]);

            familias.listView()
                .fields([
                    nga.field('familia1'),
                    nga.field('familia2'),
                    nga.field('familia3'),
                    nga.field('familia4'),
                    nga.field('familia5'),
                    nga.field('familia6'),
                    nga.field('id_familia', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            familias.creationView()
                .fields([
                    nga.field('familia1'),
                    nga.field('familia2'),
                    nga.field('familia3'),
                    nga.field('familia4'),
                    nga.field('familia5'),
                    nga.field('familia6'),
                    nga.field('id_familia', 'number'),
                ]);

            familias.editionView()
                .fields([
                    nga.field('familia1'),
                    nga.field('familia2'),
                    nga.field('familia3'),
                    nga.field('familia4'),
                    nga.field('familia5'),
                    nga.field('familia6'),
                    nga.field('id_familia', 'number'),
                ]);

            familias.showView()
                .fields([
                    nga.field('familia1'),
                    nga.field('familia2'),
                    nga.field('familia3'),
                    nga.field('familia4'),
                    nga.field('familia5'),
                    nga.field('familia6'),
                    nga.field('id_familia', 'number'),
                ]);

            return familias;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("IdiomasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var idiomas = nga.entity('idiomas');

            RestangularProvider.addElementTransformer('idiomas', function(element) {
                if (element.idPais) {
                    element.idPais = element.idPais.id;
                }

                return element;
            });

            idiomas.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            idiomas.dashboardView()
                .title('Recent idiomas')
                .limit(5)
                .fields([
                    nga.field('idioma1'),
                    nga.field('idioma2'),
                    nga.field('idioma3'),
                ]);

            idiomas.listView()
                .fields([
                    nga.field('idioma1'),
                    nga.field('idioma2'),
                    nga.field('idioma3'),
                    nga.field('idioma4'),
                    nga.field('idioma5'),
                    nga.field('idioma6'),
                    nga.field('id_idioma', 'number'),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ])
                .listActions(['show', 'edit', 'delete']);

            idiomas.creationView()
                .fields([
                    nga.field('idioma1'),
                    nga.field('idioma2'),
                    nga.field('idioma3'),
                    nga.field('idioma4'),
                    nga.field('idioma5'),
                    nga.field('idioma6'),
                    nga.field('id_idioma', 'number'),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            idiomas.editionView()
                .fields([
                    nga.field('idioma1'),
                    nga.field('idioma2'),
                    nga.field('idioma3'),
                    nga.field('idioma4'),
                    nga.field('idioma5'),
                    nga.field('idioma6'),
                    nga.field('id_idioma', 'number'),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            idiomas.showView()
                .fields([
                    nga.field('idioma1'),
                    nga.field('idioma2'),
                    nga.field('idioma3'),
                    nga.field('idioma4'),
                    nga.field('idioma5'),
                    nga.field('idioma6'),
                    nga.field('id_idioma', 'number'),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            return idiomas;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("ImpuestosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var impuestos = nga.entity('impuestos');

            impuestos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            impuestos.dashboardView()
                .title('Recent impuestos')
                .limit(5)
                .fields([
                    nga.field('impuesto', 'float'),
                    nga.field('id_impuesto', 'number'),
                ]);

            impuestos.listView()
                .fields([
                    nga.field('impuesto', 'float'),
                    nga.field('id_impuesto', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            impuestos.creationView()
                .fields([
                    nga.field('impuesto', 'float'),
                    nga.field('id_impuesto', 'number'),
                ]);

            impuestos.editionView()
                .fields([
                    nga.field('impuesto', 'float'),
                    nga.field('id_impuesto', 'number'),
                ]);

            impuestos.showView()
                .fields([
                    nga.field('impuesto', 'float'),
                    nga.field('id_impuesto', 'number'),
                ]);

            return impuestos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("IngresosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var ingresos = nga.entity('ingresos');

            RestangularProvider.addElementTransformer('ingresos', function(element) {
                if (element.idTipingreso) {
                    element.idTipingreso = element.idTipingreso.id;
                }

                if (element.idEstado) {
                    element.idEstado = element.idEstado.id;
                }

                if (element.idVehiculo) {
                    element.idVehiculo = element.idVehiculo.id;
                }

                if (element.idCliente) {
                    element.idCliente = element.idCliente.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            ingresos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            ingresos.dashboardView()
                .title('Recent ingresos')
                .limit(5)
                .fields([
                    nga.field('fyhingreso', 'date'),
                    nga.field('fyhinicio', 'date'),
                    nga.field('fyhfinalizacion', 'date'),
                ]);

            ingresos.listView()
                .fields([
                    nga.field('fyhingreso', 'date'),
                    nga.field('fyhinicio', 'date'),
                    nga.field('fyhfinalizacion', 'date'),
                    nga.field('fyhentrega', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_ingreso', 'number'),
                    nga.field('idTipingreso', 'reference')
                        .targetEntity(nga.entity('idTipingresos'))
                        .targetField(nga.field('tipingreso1')),
                    nga.field('idEstado', 'reference')
                        .targetEntity(nga.entity('idEstados'))
                        .targetField(nga.field('estado1')),
                    nga.field('idVehiculo', 'reference')
                        .targetEntity(nga.entity('idVehiculos'))
                        .targetField(nga.field('matricula')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            ingresos.creationView()
                .fields([
                    nga.field('fyhingreso', 'date'),
                    nga.field('fyhinicio', 'date'),
                    nga.field('fyhfinalizacion', 'date'),
                    nga.field('fyhentrega', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_ingreso', 'number'),
                    nga.field('idTipingreso', 'reference')
                        .targetEntity(nga.entity('idTipingresos'))
                        .targetField(nga.field('tipingreso1')),
                    nga.field('idEstado', 'reference')
                        .targetEntity(nga.entity('idEstados'))
                        .targetField(nga.field('estado1')),
                    nga.field('idVehiculo', 'reference')
                        .targetEntity(nga.entity('idVehiculos'))
                        .targetField(nga.field('matricula')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            ingresos.editionView()
                .fields([
                    nga.field('fyhingreso', 'date'),
                    nga.field('fyhinicio', 'date'),
                    nga.field('fyhfinalizacion', 'date'),
                    nga.field('fyhentrega', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_ingreso', 'number'),
                    nga.field('idTipingreso', 'reference')
                        .targetEntity(nga.entity('idTipingresos'))
                        .targetField(nga.field('tipingreso1')),
                    nga.field('idEstado', 'reference')
                        .targetEntity(nga.entity('idEstados'))
                        .targetField(nga.field('estado1')),
                    nga.field('idVehiculo', 'reference')
                        .targetEntity(nga.entity('idVehiculos'))
                        .targetField(nga.field('matricula')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            ingresos.showView()
                .fields([
                    nga.field('fyhingreso', 'date'),
                    nga.field('fyhinicio', 'date'),
                    nga.field('fyhfinalizacion', 'date'),
                    nga.field('fyhentrega', 'date'),
                    nga.field('observaciones'),
                    nga.field('id_ingreso', 'number'),
                    nga.field('idTipingreso', 'reference')
                        .targetEntity(nga.entity('idTipingresos'))
                        .targetField(nga.field('tipingreso1')),
                    nga.field('idEstado', 'reference')
                        .targetEntity(nga.entity('idEstados'))
                        .targetField(nga.field('estado1')),
                    nga.field('idVehiculo', 'reference')
                        .targetEntity(nga.entity('idVehiculos'))
                        .targetField(nga.field('matricula')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return ingresos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("InventariosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var inventarios = nga.entity('inventarios');

            RestangularProvider.addElementTransformer('inventarios', function(element) {
                if (element.idProducto) {
                    element.idProducto = element.idProducto.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            inventarios.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            inventarios.dashboardView()
                .title('Recent inventarios')
                .limit(5)
                .fields([
                    nga.field('canminima', 'float'),
                    nga.field('candisponible', 'float'),
                    nga.field('ubicacion'),
                ]);

            inventarios.listView()
                .fields([
                    nga.field('canminima', 'float'),
                    nga.field('candisponible', 'float'),
                    nga.field('ubicacion'),
                    nga.field('id_inventario', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            inventarios.creationView()
                .fields([
                    nga.field('canminima', 'float'),
                    nga.field('candisponible', 'float'),
                    nga.field('ubicacion'),
                    nga.field('id_inventario', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            inventarios.editionView()
                .fields([
                    nga.field('canminima', 'float'),
                    nga.field('candisponible', 'float'),
                    nga.field('ubicacion'),
                    nga.field('id_inventario', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            inventarios.showView()
                .fields([
                    nga.field('canminima', 'float'),
                    nga.field('candisponible', 'float'),
                    nga.field('ubicacion'),
                    nga.field('id_inventario', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return inventarios;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("MarcasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var marcas = nga.entity('marcas');

            marcas.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            marcas.dashboardView()
                .title('Recent marcas')
                .limit(5)
                .fields([
                    nga.field('marca'),
                    nga.field('web'),
                    nga.field('tarifa'),
                ]);

            marcas.listView()
                .fields([
                    nga.field('marca'),
                    nga.field('web'),
                    nga.field('tarifa'),
                    nga.field('logo'),
                    nga.field('id_marca', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            marcas.creationView()
                .fields([
                    nga.field('marca'),
                    nga.field('web'),
                    nga.field('tarifa'),
                    nga.field('logo'),
                    nga.field('id_marca', 'number'),
                ]);

            marcas.editionView()
                .fields([
                    nga.field('marca'),
                    nga.field('web'),
                    nga.field('tarifa'),
                    nga.field('logo'),
                    nga.field('id_marca', 'number'),
                ]);

            marcas.showView()
                .fields([
                    nga.field('marca'),
                    nga.field('web'),
                    nga.field('tarifa'),
                    nga.field('logo'),
                    nga.field('id_marca', 'number'),
                ]);

            return marcas;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("ModelosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var modelos = nga.entity('modelos');

            RestangularProvider.addElementTransformer('modelos', function(element) {
                if (element.idTipcombustible) {
                    element.idTipcombustible = element.idTipcombustible.id;
                }

                if (element.idFabricante) {
                    element.idFabricante = element.idFabricante.id;
                }

                if (element.idTipvehiculo) {
                    element.idTipvehiculo = element.idTipvehiculo.id;
                }

                if (element.idDencomercial) {
                    element.idDencomercial = element.idDencomercial.id;
                }

                return element;
            });

            modelos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            modelos.dashboardView()
                .title('Recent modelos')
                .limit(5)
                .fields([
                    nga.field('modelo'),
                    nga.field('ano'),
                    nga.field('cilindrada', 'number'),
                ]);

            modelos.listView()
                .fields([
                    nga.field('modelo'),
                    nga.field('ano'),
                    nga.field('cilindrada', 'number'),
                    nga.field('homologacion'),
                    nga.field('tipo'),
                    nga.field('variante'),
                    nga.field('codmotor'),
                    nga.field('numcilindros', 'number'),
                    nga.field('potencia', 'number'),
                    nga.field('db', 'number'),
                    nga.field('rpm', 'number'),
                    nga.field('distancia', 'number'),
                    nga.field('tara', 'number'),
                    nga.field('mma', 'number'),
                    nga.field('asientos', 'number'),
                    nga.field('neumaticos'),
                    nga.field('altura', 'number'),
                    nga.field('anchura', 'number'),
                    nga.field('longitud', 'number'),
                    nga.field('batalla', 'number'),
                    nga.field('viaanterior', 'number'),
                    nga.field('viaposterior', 'number'),
                    nga.field('limiteco', 'float'),
                    nga.field('id_modelo', 'number'),
                    nga.field('idTipcombustible', 'reference')
                        .targetEntity(nga.entity('idTipcombustibles'))
                        .targetField(nga.field('tipcombustible1')),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idTipvehiculo', 'reference')
                        .targetEntity(nga.entity('idTipvehiculos'))
                        .targetField(nga.field('tipvehiculo1')),
                    nga.field('idDencomercial', 'reference')
                        .targetEntity(nga.entity('idDencomercials'))
                        .targetField(nga.field('dencomercial')),
                ])
                .listActions(['show', 'edit', 'delete']);

            modelos.creationView()
                .fields([
                    nga.field('modelo'),
                    nga.field('ano'),
                    nga.field('cilindrada', 'number'),
                    nga.field('homologacion'),
                    nga.field('tipo'),
                    nga.field('variante'),
                    nga.field('codmotor'),
                    nga.field('numcilindros', 'number'),
                    nga.field('potencia', 'number'),
                    nga.field('db', 'number'),
                    nga.field('rpm', 'number'),
                    nga.field('distancia', 'number'),
                    nga.field('tara', 'number'),
                    nga.field('mma', 'number'),
                    nga.field('asientos', 'number'),
                    nga.field('neumaticos'),
                    nga.field('altura', 'number'),
                    nga.field('anchura', 'number'),
                    nga.field('longitud', 'number'),
                    nga.field('batalla', 'number'),
                    nga.field('viaanterior', 'number'),
                    nga.field('viaposterior', 'number'),
                    nga.field('limiteco', 'float'),
                    nga.field('id_modelo', 'number'),
                    nga.field('idTipcombustible', 'reference')
                        .targetEntity(nga.entity('idTipcombustibles'))
                        .targetField(nga.field('tipcombustible1')),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idTipvehiculo', 'reference')
                        .targetEntity(nga.entity('idTipvehiculos'))
                        .targetField(nga.field('tipvehiculo1')),
                    nga.field('idDencomercial', 'reference')
                        .targetEntity(nga.entity('idDencomercials'))
                        .targetField(nga.field('dencomercial')),
                ]);

            modelos.editionView()
                .fields([
                    nga.field('modelo'),
                    nga.field('ano'),
                    nga.field('cilindrada', 'number'),
                    nga.field('homologacion'),
                    nga.field('tipo'),
                    nga.field('variante'),
                    nga.field('codmotor'),
                    nga.field('numcilindros', 'number'),
                    nga.field('potencia', 'number'),
                    nga.field('db', 'number'),
                    nga.field('rpm', 'number'),
                    nga.field('distancia', 'number'),
                    nga.field('tara', 'number'),
                    nga.field('mma', 'number'),
                    nga.field('asientos', 'number'),
                    nga.field('neumaticos'),
                    nga.field('altura', 'number'),
                    nga.field('anchura', 'number'),
                    nga.field('longitud', 'number'),
                    nga.field('batalla', 'number'),
                    nga.field('viaanterior', 'number'),
                    nga.field('viaposterior', 'number'),
                    nga.field('limiteco', 'float'),
                    nga.field('id_modelo', 'number'),
                    nga.field('idTipcombustible', 'reference')
                        .targetEntity(nga.entity('idTipcombustibles'))
                        .targetField(nga.field('tipcombustible1')),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idTipvehiculo', 'reference')
                        .targetEntity(nga.entity('idTipvehiculos'))
                        .targetField(nga.field('tipvehiculo1')),
                    nga.field('idDencomercial', 'reference')
                        .targetEntity(nga.entity('idDencomercials'))
                        .targetField(nga.field('dencomercial')),
                ]);

            modelos.showView()
                .fields([
                    nga.field('modelo'),
                    nga.field('ano'),
                    nga.field('cilindrada', 'number'),
                    nga.field('homologacion'),
                    nga.field('tipo'),
                    nga.field('variante'),
                    nga.field('codmotor'),
                    nga.field('numcilindros', 'number'),
                    nga.field('potencia', 'number'),
                    nga.field('db', 'number'),
                    nga.field('rpm', 'number'),
                    nga.field('distancia', 'number'),
                    nga.field('tara', 'number'),
                    nga.field('mma', 'number'),
                    nga.field('asientos', 'number'),
                    nga.field('neumaticos'),
                    nga.field('altura', 'number'),
                    nga.field('anchura', 'number'),
                    nga.field('longitud', 'number'),
                    nga.field('batalla', 'number'),
                    nga.field('viaanterior', 'number'),
                    nga.field('viaposterior', 'number'),
                    nga.field('limiteco', 'float'),
                    nga.field('id_modelo', 'number'),
                    nga.field('idTipcombustible', 'reference')
                        .targetEntity(nga.entity('idTipcombustibles'))
                        .targetField(nga.field('tipcombustible1')),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idTipvehiculo', 'reference')
                        .targetEntity(nga.entity('idTipvehiculos'))
                        .targetField(nga.field('tipvehiculo1')),
                    nga.field('idDencomercial', 'reference')
                        .targetEntity(nga.entity('idDencomercials'))
                        .targetField(nga.field('dencomercial')),
                ]);

            return modelos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("MonedasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var monedas = nga.entity('monedas');

            monedas.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            monedas.dashboardView()
                .title('Recent monedas')
                .limit(5)
                .fields([
                    nga.field('moneda1'),
                    nga.field('moneda2'),
                    nga.field('moneda3'),
                ]);

            monedas.listView()
                .fields([
                    nga.field('moneda1'),
                    nga.field('moneda2'),
                    nga.field('moneda3'),
                    nga.field('moneda4'),
                    nga.field('moneda5'),
                    nga.field('moneda6'),
                    nga.field('simbolo'),
                    nga.field('tipcambio', 'float'),
                    nga.field('id_moneda', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            monedas.creationView()
                .fields([
                    nga.field('moneda1'),
                    nga.field('moneda2'),
                    nga.field('moneda3'),
                    nga.field('moneda4'),
                    nga.field('moneda5'),
                    nga.field('moneda6'),
                    nga.field('simbolo'),
                    nga.field('tipcambio', 'float'),
                    nga.field('id_moneda', 'number'),
                ]);

            monedas.editionView()
                .fields([
                    nga.field('moneda1'),
                    nga.field('moneda2'),
                    nga.field('moneda3'),
                    nga.field('moneda4'),
                    nga.field('moneda5'),
                    nga.field('moneda6'),
                    nga.field('simbolo'),
                    nga.field('tipcambio', 'float'),
                    nga.field('id_moneda', 'number'),
                ]);

            monedas.showView()
                .fields([
                    nga.field('moneda1'),
                    nga.field('moneda2'),
                    nga.field('moneda3'),
                    nga.field('moneda4'),
                    nga.field('moneda5'),
                    nga.field('moneda6'),
                    nga.field('simbolo'),
                    nga.field('tipcambio', 'float'),
                    nga.field('id_moneda', 'number'),
                ]);

            return monedas;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("OrdenestrabajosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var ordenestrabajos = nga.entity('ordenestrabajos');

            RestangularProvider.addElementTransformer('ordenestrabajos', function(element) {
                if (element.idIngreso) {
                    element.idIngreso = element.idIngreso.id;
                }

                if (element.idEmpleado) {
                    element.idEmpleado = element.idEmpleado.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            ordenestrabajos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            ordenestrabajos.dashboardView()
                .title('Recent ordenestrabajos')
                .limit(5)
                .fields([
                    nga.field('numordentrabajo'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                ]);

            ordenestrabajos.listView()
                .fields([
                    nga.field('numordentrabajo'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('presupuestado', 'boolean'),
                    nga.field('facturado', 'boolean'),
                    nga.field('id_ordentrabajo', 'number'),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpleado', 'reference')
                        .targetEntity(nga.entity('idEmpleados'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            ordenestrabajos.creationView()
                .fields([
                    nga.field('numordentrabajo'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('presupuestado', 'boolean'),
                    nga.field('facturado', 'boolean'),
                    nga.field('id_ordentrabajo', 'number'),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpleado', 'reference')
                        .targetEntity(nga.entity('idEmpleados'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            ordenestrabajos.editionView()
                .fields([
                    nga.field('numordentrabajo'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('presupuestado', 'boolean'),
                    nga.field('facturado', 'boolean'),
                    nga.field('id_ordentrabajo', 'number'),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpleado', 'reference')
                        .targetEntity(nga.entity('idEmpleados'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            ordenestrabajos.showView()
                .fields([
                    nga.field('numordentrabajo'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('presupuestado', 'boolean'),
                    nga.field('facturado', 'boolean'),
                    nga.field('id_ordentrabajo', 'number'),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpleado', 'reference')
                        .targetEntity(nga.entity('idEmpleados'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return ordenestrabajos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("PaisesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var paises = nga.entity('paises');

            RestangularProvider.addElementTransformer('paises', function(element) {
                if (element.idImpuesto) {
                    element.idImpuesto = element.idImpuesto.id;
                }

                if (element.idMoneda) {
                    element.idMoneda = element.idMoneda.id;
                }

                return element;
            });

            paises.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            paises.dashboardView()
                .title('Recent paises')
                .limit(5)
                .fields([
                    nga.field('pais1'),
                    nga.field('pais2'),
                    nga.field('pais3'),
                ]);

            paises.listView()
                .fields([
                    nga.field('pais1'),
                    nga.field('pais2'),
                    nga.field('pais3'),
                    nga.field('pais4'),
                    nga.field('pais5'),
                    nga.field('pais6'),
                    nga.field('bandera'),
                    nga.field('id_pais', 'number'),
                    nga.field('idImpuesto', 'reference')
                        .targetEntity(nga.entity('idImpuestos'))
                        .targetField(nga.field('impuesto')),
                    nga.field('idMoneda', 'reference')
                        .targetEntity(nga.entity('idMonedas'))
                        .targetField(nga.field('moneda1')),
                ])
                .listActions(['show', 'edit', 'delete']);

            paises.creationView()
                .fields([
                    nga.field('pais1'),
                    nga.field('pais2'),
                    nga.field('pais3'),
                    nga.field('pais4'),
                    nga.field('pais5'),
                    nga.field('pais6'),
                    nga.field('bandera'),
                    nga.field('id_pais', 'number'),
                    nga.field('idImpuesto', 'reference')
                        .targetEntity(nga.entity('idImpuestos'))
                        .targetField(nga.field('impuesto')),
                    nga.field('idMoneda', 'reference')
                        .targetEntity(nga.entity('idMonedas'))
                        .targetField(nga.field('moneda1')),
                ]);

            paises.editionView()
                .fields([
                    nga.field('pais1'),
                    nga.field('pais2'),
                    nga.field('pais3'),
                    nga.field('pais4'),
                    nga.field('pais5'),
                    nga.field('pais6'),
                    nga.field('bandera'),
                    nga.field('id_pais', 'number'),
                    nga.field('idImpuesto', 'reference')
                        .targetEntity(nga.entity('idImpuestos'))
                        .targetField(nga.field('impuesto')),
                    nga.field('idMoneda', 'reference')
                        .targetEntity(nga.entity('idMonedas'))
                        .targetField(nga.field('moneda1')),
                ]);

            paises.showView()
                .fields([
                    nga.field('pais1'),
                    nga.field('pais2'),
                    nga.field('pais3'),
                    nga.field('pais4'),
                    nga.field('pais5'),
                    nga.field('pais6'),
                    nga.field('bandera'),
                    nga.field('id_pais', 'number'),
                    nga.field('idImpuesto', 'reference')
                        .targetEntity(nga.entity('idImpuestos'))
                        .targetField(nga.field('impuesto')),
                    nga.field('idMoneda', 'reference')
                        .targetEntity(nga.entity('idMonedas'))
                        .targetField(nga.field('moneda1')),
                ]);

            return paises;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("PoblacionesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var poblaciones = nga.entity('poblaciones');

            RestangularProvider.addElementTransformer('poblaciones', function(element) {
                if (element.idProvincia) {
                    element.idProvincia = element.idProvincia.id;
                }

                return element;
            });

            poblaciones.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            poblaciones.dashboardView()
                .title('Recent poblaciones')
                .limit(5)
                .fields([
                    nga.field('poblacion1'),
                    nga.field('poblacion2'),
                    nga.field('poblacion3'),
                ]);

            poblaciones.listView()
                .fields([
                    nga.field('poblacion1'),
                    nga.field('poblacion2'),
                    nga.field('poblacion3'),
                    nga.field('poblacion4'),
                    nga.field('poblacion5'),
                    nga.field('poblacion6'),
                    nga.field('id_poblacion', 'number'),
                    nga.field('idProvincia', 'reference')
                        .targetEntity(nga.entity('idProvincias'))
                        .targetField(nga.field('provincia1')),
                ])
                .listActions(['show', 'edit', 'delete']);

            poblaciones.creationView()
                .fields([
                    nga.field('poblacion1'),
                    nga.field('poblacion2'),
                    nga.field('poblacion3'),
                    nga.field('poblacion4'),
                    nga.field('poblacion5'),
                    nga.field('poblacion6'),
                    nga.field('id_poblacion', 'number'),
                    nga.field('idProvincia', 'reference')
                        .targetEntity(nga.entity('idProvincias'))
                        .targetField(nga.field('provincia1')),
                ]);

            poblaciones.editionView()
                .fields([
                    nga.field('poblacion1'),
                    nga.field('poblacion2'),
                    nga.field('poblacion3'),
                    nga.field('poblacion4'),
                    nga.field('poblacion5'),
                    nga.field('poblacion6'),
                    nga.field('id_poblacion', 'number'),
                    nga.field('idProvincia', 'reference')
                        .targetEntity(nga.entity('idProvincias'))
                        .targetField(nga.field('provincia1')),
                ]);

            poblaciones.showView()
                .fields([
                    nga.field('poblacion1'),
                    nga.field('poblacion2'),
                    nga.field('poblacion3'),
                    nga.field('poblacion4'),
                    nga.field('poblacion5'),
                    nga.field('poblacion6'),
                    nga.field('id_poblacion', 'number'),
                    nga.field('idProvincia', 'reference')
                        .targetEntity(nga.entity('idProvincias'))
                        .targetField(nga.field('provincia1')),
                ]);

            return poblaciones;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("PresupuestosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var presupuestos = nga.entity('presupuestos');

            RestangularProvider.addElementTransformer('presupuestos', function(element) {
                if (element.idOrdentrabajo) {
                    element.idOrdentrabajo = element.idOrdentrabajo.id;
                }

                if (element.idCliente) {
                    element.idCliente = element.idCliente.id;
                }

                if (element.idTipaccion) {
                    element.idTipaccion = element.idTipaccion.id;
                }

                if (element.idIngreso) {
                    element.idIngreso = element.idIngreso.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            presupuestos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            presupuestos.dashboardView()
                .title('Recent presupuestos')
                .limit(5)
                .fields([
                    nga.field('numpresupuesto'),
                    nga.field('total', 'float'),
                    nga.field('acuenta', 'float'),
                ]);

            presupuestos.listView()
                .fields([
                    nga.field('numpresupuesto'),
                    nga.field('total', 'float'),
                    nga.field('acuenta', 'float'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('avisado', 'boolean'),
                    nga.field('facturado', 'boolean'),
                    nga.field('id_presupuesto', 'number'),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idTipaccion', 'reference')
                        .targetEntity(nga.entity('idTipaccions'))
                        .targetField(nga.field('tipaccion1')),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            presupuestos.creationView()
                .fields([
                    nga.field('numpresupuesto'),
                    nga.field('total', 'float'),
                    nga.field('acuenta', 'float'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('avisado', 'boolean'),
                    nga.field('facturado', 'boolean'),
                    nga.field('id_presupuesto', 'number'),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idTipaccion', 'reference')
                        .targetEntity(nga.entity('idTipaccions'))
                        .targetField(nga.field('tipaccion1')),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            presupuestos.editionView()
                .fields([
                    nga.field('numpresupuesto'),
                    nga.field('total', 'float'),
                    nga.field('acuenta', 'float'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('avisado', 'boolean'),
                    nga.field('facturado', 'boolean'),
                    nga.field('id_presupuesto', 'number'),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idTipaccion', 'reference')
                        .targetEntity(nga.entity('idTipaccions'))
                        .targetField(nga.field('tipaccion1')),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            presupuestos.showView()
                .fields([
                    nga.field('numpresupuesto'),
                    nga.field('total', 'float'),
                    nga.field('acuenta', 'float'),
                    nga.field('observaciones'),
                    nga.field('fecha', 'date'),
                    nga.field('avisado', 'boolean'),
                    nga.field('facturado', 'boolean'),
                    nga.field('id_presupuesto', 'number'),
                    nga.field('idOrdentrabajo', 'reference')
                        .targetEntity(nga.entity('idOrdentrabajos'))
                        .targetField(nga.field('numordentrabajo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idTipaccion', 'reference')
                        .targetEntity(nga.entity('idTipaccions'))
                        .targetField(nga.field('tipaccion1')),
                    nga.field('idIngreso', 'reference')
                        .targetEntity(nga.entity('idIngresos'))
                        .targetField(nga.field('fyhingreso')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return presupuestos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("ProductosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var productos = nga.entity('productos');

            RestangularProvider.addElementTransformer('productos', function(element) {
                if (element.idFamilia) {
                    element.idFamilia = element.idFamilia.id;
                }

                if (element.idMarca) {
                    element.idMarca = element.idMarca.id;
                }

                return element;
            });

            productos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            productos.dashboardView()
                .title('Recent productos')
                .limit(5)
                .fields([
                    nga.field('referencia'),
                    nga.field('descripcion1'),
                    nga.field('descripcion2'),
                ]);

            productos.listView()
                .fields([
                    nga.field('referencia'),
                    nga.field('descripcion1'),
                    nga.field('descripcion2'),
                    nga.field('descripcion3'),
                    nga.field('descripcion4'),
                    nga.field('descripcion5'),
                    nga.field('descripcion6'),
                    nga.field('ean13', 'number'),
                    nga.field('pvp', 'float'),
                    nga.field('imagen1'),
                    nga.field('imagen2'),
                    nga.field('observaciones'),
                    nga.field('id_producto', 'number'),
                    nga.field('idFamilia', 'reference')
                        .targetEntity(nga.entity('idFamilias'))
                        .targetField(nga.field('familia1')),
                    nga.field('idMarca', 'reference')
                        .targetEntity(nga.entity('idMarcas'))
                        .targetField(nga.field('marca')),
                ])
                .listActions(['show', 'edit', 'delete']);

            productos.creationView()
                .fields([
                    nga.field('referencia'),
                    nga.field('descripcion1'),
                    nga.field('descripcion2'),
                    nga.field('descripcion3'),
                    nga.field('descripcion4'),
                    nga.field('descripcion5'),
                    nga.field('descripcion6'),
                    nga.field('ean13', 'number'),
                    nga.field('pvp', 'float'),
                    nga.field('imagen1'),
                    nga.field('imagen2'),
                    nga.field('observaciones'),
                    nga.field('id_producto', 'number'),
                    nga.field('idFamilia', 'reference')
                        .targetEntity(nga.entity('idFamilias'))
                        .targetField(nga.field('familia1')),
                    nga.field('idMarca', 'reference')
                        .targetEntity(nga.entity('idMarcas'))
                        .targetField(nga.field('marca')),
                ]);

            productos.editionView()
                .fields([
                    nga.field('referencia'),
                    nga.field('descripcion1'),
                    nga.field('descripcion2'),
                    nga.field('descripcion3'),
                    nga.field('descripcion4'),
                    nga.field('descripcion5'),
                    nga.field('descripcion6'),
                    nga.field('ean13', 'number'),
                    nga.field('pvp', 'float'),
                    nga.field('imagen1'),
                    nga.field('imagen2'),
                    nga.field('observaciones'),
                    nga.field('id_producto', 'number'),
                    nga.field('idFamilia', 'reference')
                        .targetEntity(nga.entity('idFamilias'))
                        .targetField(nga.field('familia1')),
                    nga.field('idMarca', 'reference')
                        .targetEntity(nga.entity('idMarcas'))
                        .targetField(nga.field('marca')),
                ]);

            productos.showView()
                .fields([
                    nga.field('referencia'),
                    nga.field('descripcion1'),
                    nga.field('descripcion2'),
                    nga.field('descripcion3'),
                    nga.field('descripcion4'),
                    nga.field('descripcion5'),
                    nga.field('descripcion6'),
                    nga.field('ean13', 'number'),
                    nga.field('pvp', 'float'),
                    nga.field('imagen1'),
                    nga.field('imagen2'),
                    nga.field('observaciones'),
                    nga.field('id_producto', 'number'),
                    nga.field('idFamilia', 'reference')
                        .targetEntity(nga.entity('idFamilias'))
                        .targetField(nga.field('familia1')),
                    nga.field('idMarca', 'reference')
                        .targetEntity(nga.entity('idMarcas'))
                        .targetField(nga.field('marca')),
                ]);

            return productos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("ProvinciasAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var provincias = nga.entity('provincias');

            RestangularProvider.addElementTransformer('provincias', function(element) {
                if (element.idPais) {
                    element.idPais = element.idPais.id;
                }

                return element;
            });

            provincias.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            provincias.dashboardView()
                .title('Recent provincias')
                .limit(5)
                .fields([
                    nga.field('provincia1'),
                    nga.field('provincia2'),
                    nga.field('provincia3'),
                ]);

            provincias.listView()
                .fields([
                    nga.field('provincia1'),
                    nga.field('provincia2'),
                    nga.field('provincia3'),
                    nga.field('provincia4'),
                    nga.field('provincia5'),
                    nga.field('provincia6'),
                    nga.field('id_provincia', 'number'),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ])
                .listActions(['show', 'edit', 'delete']);

            provincias.creationView()
                .fields([
                    nga.field('provincia1'),
                    nga.field('provincia2'),
                    nga.field('provincia3'),
                    nga.field('provincia4'),
                    nga.field('provincia5'),
                    nga.field('provincia6'),
                    nga.field('id_provincia', 'number'),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            provincias.editionView()
                .fields([
                    nga.field('provincia1'),
                    nga.field('provincia2'),
                    nga.field('provincia3'),
                    nga.field('provincia4'),
                    nga.field('provincia5'),
                    nga.field('provincia6'),
                    nga.field('id_provincia', 'number'),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            provincias.showView()
                .fields([
                    nga.field('provincia1'),
                    nga.field('provincia2'),
                    nga.field('provincia3'),
                    nga.field('provincia4'),
                    nga.field('provincia5'),
                    nga.field('provincia6'),
                    nga.field('id_provincia', 'number'),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            return provincias;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelempresasclientesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relempresasclientes = nga.entity('relempresasclientes');

            RestangularProvider.addElementTransformer('relempresasclientes', function(element) {
                if (element.idCliente) {
                    element.idCliente = element.idCliente.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            relempresasclientes.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relempresasclientes.dashboardView()
                .title('Recent relempresasclientes')
                .limit(5)
                .fields([
                    nga.field('codcliente'),
                    nga.field('fecalta', 'date'),
                    nga.field('id_relempresacliente', 'number'),
                ]);

            relempresasclientes.listView()
                .fields([
                    nga.field('codcliente'),
                    nga.field('fecalta', 'date'),
                    nga.field('id_relempresacliente', 'number'),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relempresasclientes.creationView()
                .fields([
                    nga.field('codcliente'),
                    nga.field('fecalta', 'date'),
                    nga.field('id_relempresacliente', 'number'),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasclientes.editionView()
                .fields([
                    nga.field('codcliente'),
                    nga.field('fecalta', 'date'),
                    nga.field('id_relempresacliente', 'number'),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasclientes.showView()
                .fields([
                    nga.field('codcliente'),
                    nga.field('fecalta', 'date'),
                    nga.field('id_relempresacliente', 'number'),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return relempresasclientes;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelempresascuecorrientesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relempresascuecorrientes = nga.entity('relempresascuecorrientes');

            RestangularProvider.addElementTransformer('relempresascuecorrientes', function(element) {
                if (element.idEntbancaria) {
                    element.idEntbancaria = element.idEntbancaria.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            relempresascuecorrientes.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relempresascuecorrientes.dashboardView()
                .title('Recent relempresascuecorrientes')
                .limit(5)
                .fields([
                    nga.field('cuecorriente'),
                    nga.field('id_relempresacuecorriente', 'number'),
                    nga.field('idEntbancaria', 'reference')
                        .targetEntity(nga.entity('idEntbancarias'))
                        .targetField(nga.field('entbancaria')),
                ]);

            relempresascuecorrientes.listView()
                .fields([
                    nga.field('cuecorriente'),
                    nga.field('id_relempresacuecorriente', 'number'),
                    nga.field('idEntbancaria', 'reference')
                        .targetEntity(nga.entity('idEntbancarias'))
                        .targetField(nga.field('entbancaria')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relempresascuecorrientes.creationView()
                .fields([
                    nga.field('cuecorriente'),
                    nga.field('id_relempresacuecorriente', 'number'),
                    nga.field('idEntbancaria', 'reference')
                        .targetEntity(nga.entity('idEntbancarias'))
                        .targetField(nga.field('entbancaria')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresascuecorrientes.editionView()
                .fields([
                    nga.field('cuecorriente'),
                    nga.field('id_relempresacuecorriente', 'number'),
                    nga.field('idEntbancaria', 'reference')
                        .targetEntity(nga.entity('idEntbancarias'))
                        .targetField(nga.field('entbancaria')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresascuecorrientes.showView()
                .fields([
                    nga.field('cuecorriente'),
                    nga.field('id_relempresacuecorriente', 'number'),
                    nga.field('idEntbancaria', 'reference')
                        .targetEntity(nga.entity('idEntbancarias'))
                        .targetField(nga.field('entbancaria')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return relempresascuecorrientes;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelempresasemailsAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relempresasemails = nga.entity('relempresasemails');

            RestangularProvider.addElementTransformer('relempresasemails', function(element) {
                if (element.idTipcontacto) {
                    element.idTipcontacto = element.idTipcontacto.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            relempresasemails.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relempresasemails.dashboardView()
                .title('Recent relempresasemails')
                .limit(5)
                .fields([
                    nga.field('email'),
                    nga.field('id_relempresaemail', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                ]);

            relempresasemails.listView()
                .fields([
                    nga.field('email'),
                    nga.field('id_relempresaemail', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relempresasemails.creationView()
                .fields([
                    nga.field('email'),
                    nga.field('id_relempresaemail', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasemails.editionView()
                .fields([
                    nga.field('email'),
                    nga.field('id_relempresaemail', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasemails.showView()
                .fields([
                    nga.field('email'),
                    nga.field('id_relempresaemail', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return relempresasemails;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelempresasempleadosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relempresasempleados = nga.entity('relempresasempleados');

            RestangularProvider.addElementTransformer('relempresasempleados', function(element) {
                if (element.idEmpleado) {
                    element.idEmpleado = element.idEmpleado.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            relempresasempleados.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relempresasempleados.dashboardView()
                .title('Recent relempresasempleados')
                .limit(5)
                .fields([
                    nga.field('fecalta', 'date'),
                    nga.field('despedido', 'boolean'),
                    nga.field('fecbaja', 'date'),
                ]);

            relempresasempleados.listView()
                .fields([
                    nga.field('fecalta', 'date'),
                    nga.field('despedido', 'boolean'),
                    nga.field('fecbaja', 'date'),
                    nga.field('id_relempresaempleado', 'number'),
                    nga.field('idEmpleado', 'reference')
                        .targetEntity(nga.entity('idEmpleados'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relempresasempleados.creationView()
                .fields([
                    nga.field('fecalta', 'date'),
                    nga.field('despedido', 'boolean'),
                    nga.field('fecbaja', 'date'),
                    nga.field('id_relempresaempleado', 'number'),
                    nga.field('idEmpleado', 'reference')
                        .targetEntity(nga.entity('idEmpleados'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasempleados.editionView()
                .fields([
                    nga.field('fecalta', 'date'),
                    nga.field('despedido', 'boolean'),
                    nga.field('fecbaja', 'date'),
                    nga.field('id_relempresaempleado', 'number'),
                    nga.field('idEmpleado', 'reference')
                        .targetEntity(nga.entity('idEmpleados'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasempleados.showView()
                .fields([
                    nga.field('fecalta', 'date'),
                    nga.field('despedido', 'boolean'),
                    nga.field('fecbaja', 'date'),
                    nga.field('id_relempresaempleado', 'number'),
                    nga.field('idEmpleado', 'reference')
                        .targetEntity(nga.entity('idEmpleados'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return relempresasempleados;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelempresasfabricantesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relempresasfabricantes = nga.entity('relempresasfabricantes');

            RestangularProvider.addElementTransformer('relempresasfabricantes', function(element) {
                if (element.idFabricante) {
                    element.idFabricante = element.idFabricante.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            relempresasfabricantes.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relempresasfabricantes.dashboardView()
                .title('Recent relempresasfabricantes')
                .limit(5)
                .fields([
                    nga.field('id_relempresafabricante', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasfabricantes.listView()
                .fields([
                    nga.field('id_relempresafabricante', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relempresasfabricantes.creationView()
                .fields([
                    nga.field('id_relempresafabricante', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasfabricantes.editionView()
                .fields([
                    nga.field('id_relempresafabricante', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasfabricantes.showView()
                .fields([
                    nga.field('id_relempresafabricante', 'number'),
                    nga.field('idFabricante', 'reference')
                        .targetEntity(nga.entity('idFabricantes'))
                        .targetField(nga.field('fabricante')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return relempresasfabricantes;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelempresasroductosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relempresasroductos = nga.entity('relempresasroductos');

            RestangularProvider.addElementTransformer('relempresasroductos', function(element) {
                if (element.idProducto) {
                    element.idProducto = element.idProducto.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            relempresasroductos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relempresasroductos.dashboardView()
                .title('Recent relempresasroductos')
                .limit(5)
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                ]);

            relempresasroductos.listView()
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                    nga.field('id_relempresaproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relempresasroductos.creationView()
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                    nga.field('id_relempresaproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasroductos.editionView()
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                    nga.field('id_relempresaproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasroductos.showView()
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                    nga.field('id_relempresaproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return relempresasroductos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelempresasserviciosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relempresasservicios = nga.entity('relempresasservicios');

            RestangularProvider.addElementTransformer('relempresasservicios', function(element) {
                if (element.idServicio) {
                    element.idServicio = element.idServicio.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            relempresasservicios.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relempresasservicios.dashboardView()
                .title('Recent relempresasservicios')
                .limit(5)
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                ]);

            relempresasservicios.listView()
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                    nga.field('id_relempresaservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relempresasservicios.creationView()
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                    nga.field('id_relempresaservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasservicios.editionView()
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                    nga.field('id_relempresaservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresasservicios.showView()
                .fields([
                    nga.field('referencia'),
                    nga.field('neto', 'float'),
                    nga.field('descuento', 'float'),
                    nga.field('id_relempresaservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return relempresasservicios;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelempresastelefonosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relempresastelefonos = nga.entity('relempresastelefonos');

            RestangularProvider.addElementTransformer('relempresastelefonos', function(element) {
                if (element.idTipcontacto) {
                    element.idTipcontacto = element.idTipcontacto.id;
                }

                if (element.idEmpresa) {
                    element.idEmpresa = element.idEmpresa.id;
                }

                return element;
            });

            relempresastelefonos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relempresastelefonos.dashboardView()
                .title('Recent relempresastelefonos')
                .limit(5)
                .fields([
                    nga.field('telefono'),
                    nga.field('id_relempresatelefono', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                ]);

            relempresastelefonos.listView()
                .fields([
                    nga.field('telefono'),
                    nga.field('id_relempresatelefono', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relempresastelefonos.creationView()
                .fields([
                    nga.field('telefono'),
                    nga.field('id_relempresatelefono', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresastelefonos.editionView()
                .fields([
                    nga.field('telefono'),
                    nga.field('id_relempresatelefono', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            relempresastelefonos.showView()
                .fields([
                    nga.field('telefono'),
                    nga.field('id_relempresatelefono', 'number'),
                    nga.field('idTipcontacto', 'reference')
                        .targetEntity(nga.entity('idTipcontactos'))
                        .targetField(nga.field('tipcontacto1')),
                    nga.field('idEmpresa', 'reference')
                        .targetEntity(nga.entity('idEmpresas'))
                        .targetField(nga.field('nifCif')),
                ]);

            return relempresastelefonos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelmodelosproductosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relmodelosproductos = nga.entity('relmodelosproductos');

            RestangularProvider.addElementTransformer('relmodelosproductos', function(element) {
                if (element.idProducto) {
                    element.idProducto = element.idProducto.id;
                }

                if (element.idModelo) {
                    element.idModelo = element.idModelo.id;
                }

                return element;
            });

            relmodelosproductos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relmodelosproductos.dashboardView()
                .title('Recent relmodelosproductos')
                .limit(5)
                .fields([
                    nga.field('id_relmodeloproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ]);

            relmodelosproductos.listView()
                .fields([
                    nga.field('id_relmodeloproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relmodelosproductos.creationView()
                .fields([
                    nga.field('id_relmodeloproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ]);

            relmodelosproductos.editionView()
                .fields([
                    nga.field('id_relmodeloproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ]);

            relmodelosproductos.showView()
                .fields([
                    nga.field('id_relmodeloproducto', 'number'),
                    nga.field('idProducto', 'reference')
                        .targetEntity(nga.entity('idProductos'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ]);

            return relmodelosproductos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelmodelosserviciosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relmodelosservicios = nga.entity('relmodelosservicios');

            RestangularProvider.addElementTransformer('relmodelosservicios', function(element) {
                if (element.idServicio) {
                    element.idServicio = element.idServicio.id;
                }

                if (element.idModelo) {
                    element.idModelo = element.idModelo.id;
                }

                return element;
            });

            relmodelosservicios.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relmodelosservicios.dashboardView()
                .title('Recent relmodelosservicios')
                .limit(5)
                .fields([
                    nga.field('horas', 'float'),
                    nga.field('id_relmodeloservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                ]);

            relmodelosservicios.listView()
                .fields([
                    nga.field('horas', 'float'),
                    nga.field('id_relmodeloservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relmodelosservicios.creationView()
                .fields([
                    nga.field('horas', 'float'),
                    nga.field('id_relmodeloservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ]);

            relmodelosservicios.editionView()
                .fields([
                    nga.field('horas', 'float'),
                    nga.field('id_relmodeloservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ]);

            relmodelosservicios.showView()
                .fields([
                    nga.field('horas', 'float'),
                    nga.field('id_relmodeloservicio', 'number'),
                    nga.field('idServicio', 'reference')
                        .targetEntity(nga.entity('idServicios'))
                        .targetField(nga.field('referencia')),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                ]);

            return relmodelosservicios;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("RelproductosproductosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var relproductosproductos = nga.entity('relproductosproductos');

            RestangularProvider.addElementTransformer('relproductosproductos', function(element) {
                if (element.idProducto2) {
                    element.idProducto2 = element.idProducto2.id;
                }

                if (element.idProducto1) {
                    element.idProducto1 = element.idProducto1.id;
                }

                return element;
            });

            relproductosproductos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            relproductosproductos.dashboardView()
                .title('Recent relproductosproductos')
                .limit(5)
                .fields([
                    nga.field('id_relproductoproducto', 'number'),
                    nga.field('idProducto2', 'reference')
                        .targetEntity(nga.entity('idProducto2s'))
                        .targetField(nga.field('referencia')),
                    nga.field('idProducto1', 'reference')
                        .targetEntity(nga.entity('idProducto1s'))
                        .targetField(nga.field('referencia')),
                ]);

            relproductosproductos.listView()
                .fields([
                    nga.field('id_relproductoproducto', 'number'),
                    nga.field('idProducto2', 'reference')
                        .targetEntity(nga.entity('idProducto2s'))
                        .targetField(nga.field('referencia')),
                    nga.field('idProducto1', 'reference')
                        .targetEntity(nga.entity('idProducto1s'))
                        .targetField(nga.field('referencia')),
                ])
                .listActions(['show', 'edit', 'delete']);

            relproductosproductos.creationView()
                .fields([
                    nga.field('id_relproductoproducto', 'number'),
                    nga.field('idProducto2', 'reference')
                        .targetEntity(nga.entity('idProducto2s'))
                        .targetField(nga.field('referencia')),
                    nga.field('idProducto1', 'reference')
                        .targetEntity(nga.entity('idProducto1s'))
                        .targetField(nga.field('referencia')),
                ]);

            relproductosproductos.editionView()
                .fields([
                    nga.field('id_relproductoproducto', 'number'),
                    nga.field('idProducto2', 'reference')
                        .targetEntity(nga.entity('idProducto2s'))
                        .targetField(nga.field('referencia')),
                    nga.field('idProducto1', 'reference')
                        .targetEntity(nga.entity('idProducto1s'))
                        .targetField(nga.field('referencia')),
                ]);

            relproductosproductos.showView()
                .fields([
                    nga.field('id_relproductoproducto', 'number'),
                    nga.field('idProducto2', 'reference')
                        .targetEntity(nga.entity('idProducto2s'))
                        .targetField(nga.field('referencia')),
                    nga.field('idProducto1', 'reference')
                        .targetEntity(nga.entity('idProducto1s'))
                        .targetField(nga.field('referencia')),
                ]);

            return relproductosproductos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("ServiciosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var servicios = nga.entity('servicios');

            servicios.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            servicios.dashboardView()
                .title('Recent servicios')
                .limit(5)
                .fields([
                    nga.field('referencia'),
                    nga.field('servicio1'),
                    nga.field('servicio2'),
                ]);

            servicios.listView()
                .fields([
                    nga.field('referencia'),
                    nga.field('servicio1'),
                    nga.field('servicio2'),
                    nga.field('servicio3'),
                    nga.field('servicio4'),
                    nga.field('servicio5'),
                    nga.field('servicio6'),
                    nga.field('id_servicio', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            servicios.creationView()
                .fields([
                    nga.field('referencia'),
                    nga.field('servicio1'),
                    nga.field('servicio2'),
                    nga.field('servicio3'),
                    nga.field('servicio4'),
                    nga.field('servicio5'),
                    nga.field('servicio6'),
                    nga.field('id_servicio', 'number'),
                ]);

            servicios.editionView()
                .fields([
                    nga.field('referencia'),
                    nga.field('servicio1'),
                    nga.field('servicio2'),
                    nga.field('servicio3'),
                    nga.field('servicio4'),
                    nga.field('servicio5'),
                    nga.field('servicio6'),
                    nga.field('id_servicio', 'number'),
                ]);

            servicios.showView()
                .fields([
                    nga.field('referencia'),
                    nga.field('servicio1'),
                    nga.field('servicio2'),
                    nga.field('servicio3'),
                    nga.field('servicio4'),
                    nga.field('servicio5'),
                    nga.field('servicio6'),
                    nga.field('id_servicio', 'number'),
                ]);

            return servicios;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("TipaccionesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var tipacciones = nga.entity('tipacciones');

            tipacciones.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            tipacciones.dashboardView()
                .title('Recent tipacciones')
                .limit(5)
                .fields([
                    nga.field('tipaccion1'),
                    nga.field('tipaccion2'),
                    nga.field('tipaccion3'),
                ]);

            tipacciones.listView()
                .fields([
                    nga.field('tipaccion1'),
                    nga.field('tipaccion2'),
                    nga.field('tipaccion3'),
                    nga.field('tipaccion4'),
                    nga.field('tipaccion5'),
                    nga.field('tipaccion6'),
                    nga.field('id_tipaccion', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            tipacciones.creationView()
                .fields([
                    nga.field('tipaccion1'),
                    nga.field('tipaccion2'),
                    nga.field('tipaccion3'),
                    nga.field('tipaccion4'),
                    nga.field('tipaccion5'),
                    nga.field('tipaccion6'),
                    nga.field('id_tipaccion', 'number'),
                ]);

            tipacciones.editionView()
                .fields([
                    nga.field('tipaccion1'),
                    nga.field('tipaccion2'),
                    nga.field('tipaccion3'),
                    nga.field('tipaccion4'),
                    nga.field('tipaccion5'),
                    nga.field('tipaccion6'),
                    nga.field('id_tipaccion', 'number'),
                ]);

            tipacciones.showView()
                .fields([
                    nga.field('tipaccion1'),
                    nga.field('tipaccion2'),
                    nga.field('tipaccion3'),
                    nga.field('tipaccion4'),
                    nga.field('tipaccion5'),
                    nga.field('tipaccion6'),
                    nga.field('id_tipaccion', 'number'),
                ]);

            return tipacciones;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("TipclientesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var tipclientes = nga.entity('tipclientes');

            tipclientes.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            tipclientes.dashboardView()
                .title('Recent tipclientes')
                .limit(5)
                .fields([
                    nga.field('tipcliente1'),
                    nga.field('tipcliente2'),
                    nga.field('tipcliente3'),
                ]);

            tipclientes.listView()
                .fields([
                    nga.field('tipcliente1'),
                    nga.field('tipcliente2'),
                    nga.field('tipcliente3'),
                    nga.field('tipcliente4'),
                    nga.field('tipcliente5'),
                    nga.field('tipcliente6'),
                    nga.field('id_tipcliente', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            tipclientes.creationView()
                .fields([
                    nga.field('tipcliente1'),
                    nga.field('tipcliente2'),
                    nga.field('tipcliente3'),
                    nga.field('tipcliente4'),
                    nga.field('tipcliente5'),
                    nga.field('tipcliente6'),
                    nga.field('id_tipcliente', 'number'),
                ]);

            tipclientes.editionView()
                .fields([
                    nga.field('tipcliente1'),
                    nga.field('tipcliente2'),
                    nga.field('tipcliente3'),
                    nga.field('tipcliente4'),
                    nga.field('tipcliente5'),
                    nga.field('tipcliente6'),
                    nga.field('id_tipcliente', 'number'),
                ]);

            tipclientes.showView()
                .fields([
                    nga.field('tipcliente1'),
                    nga.field('tipcliente2'),
                    nga.field('tipcliente3'),
                    nga.field('tipcliente4'),
                    nga.field('tipcliente5'),
                    nga.field('tipcliente6'),
                    nga.field('id_tipcliente', 'number'),
                ]);

            return tipclientes;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("TipcombustiblesAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var tipcombustibles = nga.entity('tipcombustibles');

            tipcombustibles.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            tipcombustibles.dashboardView()
                .title('Recent tipcombustibles')
                .limit(5)
                .fields([
                    nga.field('tipcombustible1'),
                    nga.field('tipcombustible2'),
                    nga.field('tipcombustible3'),
                ]);

            tipcombustibles.listView()
                .fields([
                    nga.field('tipcombustible1'),
                    nga.field('tipcombustible2'),
                    nga.field('tipcombustible3'),
                    nga.field('tipcombustible4'),
                    nga.field('tipcombustible5'),
                    nga.field('tipcombustible6'),
                    nga.field('id_tipcombustible', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            tipcombustibles.creationView()
                .fields([
                    nga.field('tipcombustible1'),
                    nga.field('tipcombustible2'),
                    nga.field('tipcombustible3'),
                    nga.field('tipcombustible4'),
                    nga.field('tipcombustible5'),
                    nga.field('tipcombustible6'),
                    nga.field('id_tipcombustible', 'number'),
                ]);

            tipcombustibles.editionView()
                .fields([
                    nga.field('tipcombustible1'),
                    nga.field('tipcombustible2'),
                    nga.field('tipcombustible3'),
                    nga.field('tipcombustible4'),
                    nga.field('tipcombustible5'),
                    nga.field('tipcombustible6'),
                    nga.field('id_tipcombustible', 'number'),
                ]);

            tipcombustibles.showView()
                .fields([
                    nga.field('tipcombustible1'),
                    nga.field('tipcombustible2'),
                    nga.field('tipcombustible3'),
                    nga.field('tipcombustible4'),
                    nga.field('tipcombustible5'),
                    nga.field('tipcombustible6'),
                    nga.field('id_tipcombustible', 'number'),
                ]);

            return tipcombustibles;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("TipcontactosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var tipcontactos = nga.entity('tipcontactos');

            tipcontactos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            tipcontactos.dashboardView()
                .title('Recent tipcontactos')
                .limit(5)
                .fields([
                    nga.field('tipcontacto1'),
                    nga.field('tipcontacto2'),
                    nga.field('tipcontacto3'),
                ]);

            tipcontactos.listView()
                .fields([
                    nga.field('tipcontacto1'),
                    nga.field('tipcontacto2'),
                    nga.field('tipcontacto3'),
                    nga.field('tipcontacto4'),
                    nga.field('tipcontacto5'),
                    nga.field('tipcontacto6'),
                    nga.field('id_tipcontacto', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            tipcontactos.creationView()
                .fields([
                    nga.field('tipcontacto1'),
                    nga.field('tipcontacto2'),
                    nga.field('tipcontacto3'),
                    nga.field('tipcontacto4'),
                    nga.field('tipcontacto5'),
                    nga.field('tipcontacto6'),
                    nga.field('id_tipcontacto', 'number'),
                ]);

            tipcontactos.editionView()
                .fields([
                    nga.field('tipcontacto1'),
                    nga.field('tipcontacto2'),
                    nga.field('tipcontacto3'),
                    nga.field('tipcontacto4'),
                    nga.field('tipcontacto5'),
                    nga.field('tipcontacto6'),
                    nga.field('id_tipcontacto', 'number'),
                ]);

            tipcontactos.showView()
                .fields([
                    nga.field('tipcontacto1'),
                    nga.field('tipcontacto2'),
                    nga.field('tipcontacto3'),
                    nga.field('tipcontacto4'),
                    nga.field('tipcontacto5'),
                    nga.field('tipcontacto6'),
                    nga.field('id_tipcontacto', 'number'),
                ]);

            return tipcontactos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("TipempleadosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var tipempleados = nga.entity('tipempleados');

            tipempleados.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            tipempleados.dashboardView()
                .title('Recent tipempleados')
                .limit(5)
                .fields([
                    nga.field('tipempleado1'),
                    nga.field('tipempleado2'),
                    nga.field('tipempleado3'),
                ]);

            tipempleados.listView()
                .fields([
                    nga.field('tipempleado1'),
                    nga.field('tipempleado2'),
                    nga.field('tipempleado3'),
                    nga.field('tipempleado4'),
                    nga.field('tipempleado5'),
                    nga.field('tipempleado6'),
                    nga.field('id_tipempleado', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            tipempleados.creationView()
                .fields([
                    nga.field('tipempleado1'),
                    nga.field('tipempleado2'),
                    nga.field('tipempleado3'),
                    nga.field('tipempleado4'),
                    nga.field('tipempleado5'),
                    nga.field('tipempleado6'),
                    nga.field('id_tipempleado', 'number'),
                ]);

            tipempleados.editionView()
                .fields([
                    nga.field('tipempleado1'),
                    nga.field('tipempleado2'),
                    nga.field('tipempleado3'),
                    nga.field('tipempleado4'),
                    nga.field('tipempleado5'),
                    nga.field('tipempleado6'),
                    nga.field('id_tipempleado', 'number'),
                ]);

            tipempleados.showView()
                .fields([
                    nga.field('tipempleado1'),
                    nga.field('tipempleado2'),
                    nga.field('tipempleado3'),
                    nga.field('tipempleado4'),
                    nga.field('tipempleado5'),
                    nga.field('tipempleado6'),
                    nga.field('id_tipempleado', 'number'),
                ]);

            return tipempleados;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("TipingresosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var tipingresos = nga.entity('tipingresos');

            tipingresos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            tipingresos.dashboardView()
                .title('Recent tipingresos')
                .limit(5)
                .fields([
                    nga.field('tipingreso1'),
                    nga.field('tipingreso2'),
                    nga.field('tipingreso3'),
                ]);

            tipingresos.listView()
                .fields([
                    nga.field('tipingreso1'),
                    nga.field('tipingreso2'),
                    nga.field('tipingreso3'),
                    nga.field('tipingreso4'),
                    nga.field('tipingreso5'),
                    nga.field('tipingreso6'),
                    nga.field('id_tipingreso', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            tipingresos.creationView()
                .fields([
                    nga.field('tipingreso1'),
                    nga.field('tipingreso2'),
                    nga.field('tipingreso3'),
                    nga.field('tipingreso4'),
                    nga.field('tipingreso5'),
                    nga.field('tipingreso6'),
                    nga.field('id_tipingreso', 'number'),
                ]);

            tipingresos.editionView()
                .fields([
                    nga.field('tipingreso1'),
                    nga.field('tipingreso2'),
                    nga.field('tipingreso3'),
                    nga.field('tipingreso4'),
                    nga.field('tipingreso5'),
                    nga.field('tipingreso6'),
                    nga.field('id_tipingreso', 'number'),
                ]);

            tipingresos.showView()
                .fields([
                    nga.field('tipingreso1'),
                    nga.field('tipingreso2'),
                    nga.field('tipingreso3'),
                    nga.field('tipingreso4'),
                    nga.field('tipingreso5'),
                    nga.field('tipingreso6'),
                    nga.field('id_tipingreso', 'number'),
                ]);

            return tipingresos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("TippagosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var tippagos = nga.entity('tippagos');

            tippagos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            tippagos.dashboardView()
                .title('Recent tippagos')
                .limit(5)
                .fields([
                    nga.field('tippago1'),
                    nga.field('tippago2'),
                    nga.field('tippago3'),
                ]);

            tippagos.listView()
                .fields([
                    nga.field('tippago1'),
                    nga.field('tippago2'),
                    nga.field('tippago3'),
                    nga.field('tippago4'),
                    nga.field('tippago5'),
                    nga.field('tippago6'),
                    nga.field('id_tippago', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            tippagos.creationView()
                .fields([
                    nga.field('tippago1'),
                    nga.field('tippago2'),
                    nga.field('tippago3'),
                    nga.field('tippago4'),
                    nga.field('tippago5'),
                    nga.field('tippago6'),
                    nga.field('id_tippago', 'number'),
                ]);

            tippagos.editionView()
                .fields([
                    nga.field('tippago1'),
                    nga.field('tippago2'),
                    nga.field('tippago3'),
                    nga.field('tippago4'),
                    nga.field('tippago5'),
                    nga.field('tippago6'),
                    nga.field('id_tippago', 'number'),
                ]);

            tippagos.showView()
                .fields([
                    nga.field('tippago1'),
                    nga.field('tippago2'),
                    nga.field('tippago3'),
                    nga.field('tippago4'),
                    nga.field('tippago5'),
                    nga.field('tippago6'),
                    nga.field('id_tippago', 'number'),
                ]);

            return tippagos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider) {
        $provide.factory("TipvehiculosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var tipvehiculos = nga.entity('tipvehiculos');

            tipvehiculos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            tipvehiculos.dashboardView()
                .title('Recent tipvehiculos')
                .limit(5)
                .fields([
                    nga.field('tipvehiculo1'),
                    nga.field('tipvehiculo2'),
                    nga.field('tipvehiculo3'),
                ]);

            tipvehiculos.listView()
                .fields([
                    nga.field('tipvehiculo1'),
                    nga.field('tipvehiculo2'),
                    nga.field('tipvehiculo3'),
                    nga.field('tipvehiculo4'),
                    nga.field('tipvehiculo5'),
                    nga.field('tipvehiculo6'),
                    nga.field('clasificacion'),
                    nga.field('id_tipvehiculo', 'number'),
                ])
                .listActions(['show', 'edit', 'delete']);

            tipvehiculos.creationView()
                .fields([
                    nga.field('tipvehiculo1'),
                    nga.field('tipvehiculo2'),
                    nga.field('tipvehiculo3'),
                    nga.field('tipvehiculo4'),
                    nga.field('tipvehiculo5'),
                    nga.field('tipvehiculo6'),
                    nga.field('clasificacion'),
                    nga.field('id_tipvehiculo', 'number'),
                ]);

            tipvehiculos.editionView()
                .fields([
                    nga.field('tipvehiculo1'),
                    nga.field('tipvehiculo2'),
                    nga.field('tipvehiculo3'),
                    nga.field('tipvehiculo4'),
                    nga.field('tipvehiculo5'),
                    nga.field('tipvehiculo6'),
                    nga.field('clasificacion'),
                    nga.field('id_tipvehiculo', 'number'),
                ]);

            tipvehiculos.showView()
                .fields([
                    nga.field('tipvehiculo1'),
                    nga.field('tipvehiculo2'),
                    nga.field('tipvehiculo3'),
                    nga.field('tipvehiculo4'),
                    nga.field('tipvehiculo5'),
                    nga.field('tipvehiculo6'),
                    nga.field('clasificacion'),
                    nga.field('id_tipvehiculo', 'number'),
                ]);

            return tipvehiculos;
        });
    });

    app.config(function($provide, NgAdminConfigurationProvider, RestangularProvider) {
        $provide.factory("VehiculosAdmin", function() {
            var nga = NgAdminConfigurationProvider;
            var vehiculos = nga.entity('vehiculos');

            RestangularProvider.addElementTransformer('vehiculos', function(element) {
                if (element.idModelo) {
                    element.idModelo = element.idModelo.id;
                }

                if (element.idCliente) {
                    element.idCliente = element.idCliente.id;
                }

                if (element.idPais) {
                    element.idPais = element.idPais.id;
                }

                return element;
            });

            vehiculos.menuView()
                .icon('<span class="glyphicon glyphicon-cog"></span>');

            vehiculos.dashboardView()
                .title('Recent vehiculos')
                .limit(5)
                .fields([
                    nga.field('matricula'),
                    nga.field('numbastidor'),
                    nga.field('fecmatriculacion', 'date'),
                ]);

            vehiculos.listView()
                .fields([
                    nga.field('matricula'),
                    nga.field('numbastidor'),
                    nga.field('fecmatriculacion', 'date'),
                    nga.field('fecfabricacion', 'date'),
                    nga.field('fecitv', 'date'),
                    nga.field('fecmantenimiento', 'date'),
                    nga.field('fictecnica'),
                    nga.field('percirculacion'),
                    nga.field('id_vehiculo', 'number'),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ])
                .listActions(['show', 'edit', 'delete']);

            vehiculos.creationView()
                .fields([
                    nga.field('matricula'),
                    nga.field('numbastidor'),
                    nga.field('fecmatriculacion', 'date'),
                    nga.field('fecfabricacion', 'date'),
                    nga.field('fecitv', 'date'),
                    nga.field('fecmantenimiento', 'date'),
                    nga.field('fictecnica'),
                    nga.field('percirculacion'),
                    nga.field('id_vehiculo', 'number'),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            vehiculos.editionView()
                .fields([
                    nga.field('matricula'),
                    nga.field('numbastidor'),
                    nga.field('fecmatriculacion', 'date'),
                    nga.field('fecfabricacion', 'date'),
                    nga.field('fecitv', 'date'),
                    nga.field('fecmantenimiento', 'date'),
                    nga.field('fictecnica'),
                    nga.field('percirculacion'),
                    nga.field('id_vehiculo', 'number'),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            vehiculos.showView()
                .fields([
                    nga.field('matricula'),
                    nga.field('numbastidor'),
                    nga.field('fecmatriculacion', 'date'),
                    nga.field('fecfabricacion', 'date'),
                    nga.field('fecitv', 'date'),
                    nga.field('fecmantenimiento', 'date'),
                    nga.field('fictecnica'),
                    nga.field('percirculacion'),
                    nga.field('id_vehiculo', 'number'),
                    nga.field('idModelo', 'reference')
                        .targetEntity(nga.entity('idModelos'))
                        .targetField(nga.field('modelo')),
                    nga.field('idCliente', 'reference')
                        .targetEntity(nga.entity('idClientes'))
                        .targetField(nga.field('nifCif')),
                    nga.field('idPais', 'reference')
                        .targetEntity(nga.entity('idPais'))
                        .targetField(nga.field('pais1')),
                ]);

            return vehiculos;
        });
    });

    app.config(function(NgAdminConfigurationProvider, CitasAdminProvider, ClientesAdminProvider, CodpostalesAdminProvider, DencomercialesAdminProvider, Detfacturas1AdminProvider, Detfacturas2AdminProvider, Detordenestrabajos1AdminProvider, Detordenestrabajos2AdminProvider, Detpresupuestos1AdminProvider, Detpresupuestos2AdminProvider, EmpresasAdminProvider, EntbancariasAdminProvider, EntradasosalidasAdminProvider, EstadosAdminProvider, FabricantesAdminProvider, FacturasAdminProvider, FamiliasAdminProvider, IdiomasAdminProvider, ImpuestosAdminProvider, IngresosAdminProvider, InventariosAdminProvider, MarcasAdminProvider, ModelosAdminProvider, MonedasAdminProvider, OrdenestrabajosAdminProvider, PaisesAdminProvider, PoblacionesAdminProvider, PresupuestosAdminProvider, ProductosAdminProvider, ProvinciasAdminProvider, RelempresasclientesAdminProvider, RelempresascuecorrientesAdminProvider, RelempresasemailsAdminProvider, RelempresasempleadosAdminProvider, RelempresasfabricantesAdminProvider, RelempresasroductosAdminProvider, RelempresasserviciosAdminProvider, RelempresastelefonosAdminProvider, RelmodelosproductosAdminProvider, RelmodelosserviciosAdminProvider, RelproductosproductosAdminProvider, ServiciosAdminProvider, TipaccionesAdminProvider, TipclientesAdminProvider, TipcombustiblesAdminProvider, TipcontactosAdminProvider, TipempleadosAdminProvider, TipingresosAdminProvider, TippagosAdminProvider, TipvehiculosAdminProvider, VehiculosAdminProvider) {
        var admin = NgAdminConfigurationProvider
            .application('')
            .baseApiUrl(location.protocol + '//' + location.hostname + (location.port ? ':' + location.port : '') + '/api/')

        admin
            .addEntity(CitasAdminProvider.$get())
            .addEntity(ClientesAdminProvider.$get())
            .addEntity(CodpostalesAdminProvider.$get())
            .addEntity(DencomercialesAdminProvider.$get())
            .addEntity(Detfacturas1AdminProvider.$get())
            .addEntity(Detfacturas2AdminProvider.$get())
            .addEntity(Detordenestrabajos1AdminProvider.$get())
            .addEntity(Detordenestrabajos2AdminProvider.$get())
            .addEntity(Detpresupuestos1AdminProvider.$get())
            .addEntity(Detpresupuestos2AdminProvider.$get())
            .addEntity(EmpresasAdminProvider.$get())
            .addEntity(EntbancariasAdminProvider.$get())
            .addEntity(EntradasosalidasAdminProvider.$get())
            .addEntity(EstadosAdminProvider.$get())
            .addEntity(FabricantesAdminProvider.$get())
            .addEntity(FacturasAdminProvider.$get())
            .addEntity(FamiliasAdminProvider.$get())
            .addEntity(IdiomasAdminProvider.$get())
            .addEntity(ImpuestosAdminProvider.$get())
            .addEntity(IngresosAdminProvider.$get())
            .addEntity(InventariosAdminProvider.$get())
            .addEntity(MarcasAdminProvider.$get())
            .addEntity(ModelosAdminProvider.$get())
            .addEntity(MonedasAdminProvider.$get())
            .addEntity(OrdenestrabajosAdminProvider.$get())
            .addEntity(PaisesAdminProvider.$get())
            .addEntity(PoblacionesAdminProvider.$get())
            .addEntity(PresupuestosAdminProvider.$get())
            .addEntity(ProductosAdminProvider.$get())
            .addEntity(ProvinciasAdminProvider.$get())
            .addEntity(RelempresasclientesAdminProvider.$get())
            .addEntity(RelempresascuecorrientesAdminProvider.$get())
            .addEntity(RelempresasemailsAdminProvider.$get())
            .addEntity(RelempresasempleadosAdminProvider.$get())
            .addEntity(RelempresasfabricantesAdminProvider.$get())
            .addEntity(RelempresasroductosAdminProvider.$get())
            .addEntity(RelempresasserviciosAdminProvider.$get())
            .addEntity(RelempresastelefonosAdminProvider.$get())
            .addEntity(RelmodelosproductosAdminProvider.$get())
            .addEntity(RelmodelosserviciosAdminProvider.$get())
            .addEntity(RelproductosproductosAdminProvider.$get())
            .addEntity(ServiciosAdminProvider.$get())
            .addEntity(TipaccionesAdminProvider.$get())
            .addEntity(TipclientesAdminProvider.$get())
            .addEntity(TipcombustiblesAdminProvider.$get())
            .addEntity(TipcontactosAdminProvider.$get())
            .addEntity(TipempleadosAdminProvider.$get())
            .addEntity(TipingresosAdminProvider.$get())
            .addEntity(TippagosAdminProvider.$get())
            .addEntity(TipvehiculosAdminProvider.$get())
            .addEntity(VehiculosAdminProvider.$get())
        ;

        NgAdminConfigurationProvider.configure(admin);
    });
})();

