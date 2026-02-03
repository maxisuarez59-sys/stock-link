<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
include("includes/header.php"); 
?>
<div >
    <div >
        <div class="col-12">
           <h1 class="h2 fw-bold mb-1 text-white">Hola, <?php echo($_SESSION['usuario']); ?></h1>
            <p class="text-secondary mb-0">Panel de Control de Inventario</p>
        </div>
    </div>  
<!-- =====================================================================-->
 <!-- ========================PROVEEDORES==================================-->        
    <div class="row">
        <div class="col-12">
<!-- ============Proveedor ============ -->
            <div class="card bg-dark text-white border border-secondary border-opacity-25 rounded-3 shadow-sm mb-3">
                <div class="card-body p-3"> <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fs-4"><i class="bi bi-cake2 fs-4 text-warning"></i></span> <h5 class="fw-bold m-0">Panadería "El Baguetón"</h5>
                        </div>
                        <span class="badge bg-warning text-dark fw-bold" style="font-size: 0.7rem;">4 ÍTEMS</span>
                    </div>
                <div class="d-grid gap-2 mb-3">

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Pan de Campero</span>
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Pan de Hamburguesa</span>
                            
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Pan de Perritos</span>                          
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Pre-pizzas</span>
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="50" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>
                  
<!-- ============Botón Enviar ============ -->
                    <button class="btn btn-success w-100 py-2 fw-bold rounded-2 shadow-sm d-flex align-items-center justify-content-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 1.1rem;">send</span>
                        ENVIAR PEDIDO
                    </button>
                </div>
            </div>
 </div>

<!-- =====================================================================-->
 <!-- ========================PROVEEDOR==================================-->
<div class="card bg-dark text-white border border-secondary border-opacity-25 rounded-3 shadow-sm mb-3">
                <div class="card-body p-3"> <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fs-4"><i class="bi bi-knife text-danger fs-4"></i></span> <h5 class="fw-bold m-0">Carnicería "Los brother"</h5>
                        </div>
                        <span class="badge bg-warning text-dark fw-bold" style="font-size: 0.7rem;">4 ÍTEMS</span>
                    </div>
                    <div class="d-grid gap-2 mb-3">

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Hamburguesa de ternera</span>
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Hamburguesa de pollo</span>                           
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Hamburguesa de Buey</span>                           
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Carne de pollo</span>                            
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="50" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ --> 
                         <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Rollo de Shawarma</span>
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ --> 
                             <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Filete de pollo empanado</span>
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                         <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Filete de cerdo</span>                           
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Salchichas/viena</span>                           
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>
                    

<!-- ============Botón Enviar ============ -->
                    <button class="btn btn-success w-100 py-2 fw-bold rounded-2 shadow-sm d-flex align-items-center justify-content-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 1.1rem;">send</span>
                        ENVIAR PEDIDO
                    </button>
                </div>
            </div>
</div>
<!-- =====================================================================-->
 <!-- =========================PROVEEDOR==================================-->

<div class="card bg-dark text-white border border-secondary border-opacity-25 rounded-3 shadow-sm mb-3">
                <div class="card-body p-3"> <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fs-4"><i class="bi bi-snow2"></i></span> <h5 class="fw-bold m-0">Congelados "Durísimo"</h5>
                        </div>
                        <span class="badge bg-warning text-dark fw-bold" style="font-size: 0.7rem;">4 ÍTEMS</span>
                    </div>
                    <div class="d-grid gap-2 mb-3">

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Patatas fritas (1 kilo)</span>                          
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>
<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Patatas fritas de luxe (1 Kilo)</span>                         
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>
<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Aros de cebolla (1 kilo)</span>                           
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>
<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Bastones de queso (1 kilo)</span>                         
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="50" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>
                   
<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Berejenas rebozadas (1 kilo)</span>                         
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="50" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Croquetas de jamón (1 kilo)</span>                         
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="50" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>
<!-- ============Boton enviar============ -->
                    <button class="btn btn-success w-100 py-2 fw-bold rounded-2 shadow-sm d-flex align-items-center justify-content-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 1.1rem;">send</span>
                        ENVIAR PEDIDO
                    </button>
                </div>
            </div>
 </div>

<!-- =====================================================================-->
 <!-- ==================PROVEEDORE=========================================-->
<div class="card bg-dark text-white border border-secondary border-opacity-25 rounded-3 shadow-sm mb-3">
                <div class="card-body p-3"> <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fs-4"><i class="bi bi-leaf fs-4 text-success"></i></span> <h5 class="fw-bold m-0">Verduleria "EL papa"</h5>
                        </div>
                        <span class="badge bg-warning text-dark fw-bold" style="font-size: 0.7rem;">4 ÍTEMS</span>
                    </div>
                    <div class="d-grid gap-2 mb-3">

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Tomate</span>
                            
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">KG.</span>
                            </div>
                        </div>
<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Lechuga</span>                         
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">KG.</span>
                            </div>
                        </div>
<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Cebolla</span>                           
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">KG.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Huevos (24 unidades)</span>                         
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="50" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                            </div>
                        </div>
                    
<!-- ============Boton enviar============ -->
                    <button class="btn btn-success w-100 py-2 fw-bold rounded-2 shadow-sm d-flex align-items-center justify-content-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 1.1rem;">send</span>
                        ENVIAR PEDIDO
                    </button>
                </div>
            </div>
</div>
<!-- =====================================================================-->
 <!-- =====================PROVEEDOR========================================-->

<div class="card bg-dark text-white border border-secondary border-opacity-25 rounded-3 shadow-sm mb-3">
                <div class="card-body p-3"> <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fs-4"><i class="bi bi-layers fs-4 text-secondary"></i></span> <h5 class="fw-bold m-0">Fiambreria "Bondiola"</h5>
                        </div>
                        <span class="badge bg-warning text-dark fw-bold" style="font-size: 0.7rem;">4 ÍTEMS</span>
                    </div>
                    <div class="d-grid gap-2 mb-3">

<!-- ============Articulo ============ -->                      
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Queso en lonchas</span>                         
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="900" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">KG.</span>
                            </div>
                        </div>
<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                            <span class="fw-bold text-white small">Jamón cocido</span>                        
                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">KG.</span>
                            </div>
                        </div>

<!-- ============Articulo ============ -->
                        <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                        <div class="d-flex flex-column">    
                        <span class="fw-bold text-white small">Bacon en lonchas</span>   
                        <span class="text-secondary" style="font-size: 0.75rem;">1 kilo</span>
                </div>
                        

                            <div class="d-flex align-items-center">
                                <input type="number" 
                                       value="120" 
                                       min="0" 
                                       class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                                       style="width: 70px;">
                                <span class="text-secondary small ms-1" style="font-size: 0.65rem;">kG.</span>
                            </div>
                        </div>

<!-- ============Boton Enviar ============ -->
                    <button class="btn btn-success w-100 py-2 fw-bold rounded-2 shadow-sm d-flex align-items-center justify-content-center gap-2">
                        <span class="material-symbols-outlined" style="font-size: 1.1rem;">send</span>
                        ENVIAR PEDIDO
                    </button>
                </div>
            </div>
        </div>
    </div>

    </div>

<!-- =====================================================================-->
 <!-- =====================PROVEEDOR========================================-->
    <div class="card bg-dark text-white border border-secondary border-opacity-25 rounded-3 shadow-sm mb-3">
    <div class="card-body p-3">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-snow2 fs-4 text-info"></i>
                <h5 class="fw-bold m-0">Congelados "Durísimo"</h5>
            </div>
        </div>

        <div class="d-grid gap-2 mb-3">
            <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                <div class="d-flex flex-column">
                    <span class="fw-bold text-white small">Patatas fritas</span>
                    <span class="text-secondary" style="font-size: 0.75rem;">1 kilo</span>
                </div>
                
                <div class="d-flex align-items-center">
                    <input type="number" value="900" min="0" 
                           class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                           style="width: 70px;">
                    <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center p-2 rounded-2 border border-secondary border-opacity-25" style="background-color: rgba(0,0,0,0.2);">
                <div class="d-flex flex-column">
                    <span class="fw-bold text-white small">Patatas fritas de luxe</span>
                    <span class="text-secondary" style="font-size: 0.75rem;">1 Kilo</span>
                </div>
                
                <div class="d-flex align-items-center">
                    <input type="number" value="120" min="0" 
                           class="form-control form-control-sm bg-dark text-danger fw-bold border-secondary text-center p-1" 
                           style="width: 70px;">
                    <span class="text-secondary small ms-1" style="font-size: 0.65rem;">UNID.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>