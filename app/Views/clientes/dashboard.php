<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        <?=$countClientes?> Clientes
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button class="btn btn-sm btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#addCliente"><i class="fa-solid fa-plus"></i> Agregar cliente</button>
        </div>
    </div>
    <div class="modal fade" id="addCliente" aria-hidden="true" aria-labelledby="addCliente" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Nuevo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="<?=base_url()?>clientes/create" method="post" class="form-horizontalrizontal auth-form my-4">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nCliente" name="nCliente" placeholder="Nombre" required>
                                        <label for="nCliente">Nombre</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="aCliente" name="aCliente" placeholder="Apellido" required>
                                        <label for="aCliente">Apellido</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="cTelefono" name="cTelefono">
                                        <label for="cTelefono">Teléfono</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="cWhatsapp" name="cWhatsapp">
                                        <label for="cWhatsapp">WhatsApp</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="submit" class="btn btn-outline-success blueR float-right" value="Agregar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php if (!empty($clientes)): ?>
        <input type="text" id="countResult" class="dNone" value="<?=count($clientes)?>">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nombre completo</th>
                    <th>Teléfono</th>
                    <th>WhatsApp</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < count($clientes); $i++) {?> 
                    <tr>
                        <td><?=$i+1?></td>
                        <td><a href="<?=base_url()?>clientes/read/<?=$clientes[$i] -> cl_token?>"><?=ucwords(mb_strtolower($clientes[$i] -> cl_apellido, "UTF-8"))?> <?=ucwords(mb_strtolower($clientes[$i] -> cl_nombre, "UTF-8"))?></a></td>
                        <td><a href="tel:<?=$clientes[$i] -> cl_telefono?>" target="__blank" class="phoneFormat<?=$i?>"><?=$clientes[$i] -> cl_telefono?></a></td>
                        <td><a href="https://wa.me/<?=$clientes[$i] -> cl_whatsapp?>" target="__blank" class="phoneFormat<?=$i?>"><?=$clientes[$i] -> cl_whatsapp?></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php endif ?>
</div>
<div class="row mt-5">
    <div class="col-12">
        <?php if ($countClientes != 0) {
            $totalrows = 15;
            $pagLeads = ceil($countClientes/$totalrows);
            if ($pagLeads > 1) { ?>
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo $pag <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="<?=base_url()?>clientes?pag=<?=$pag -1?>">Previus</a></li>
                    <?php for ($i=1; $i <= $pagLeads; $i++) { ?>
                        <li class="page-item <?php echo $pag == $i ? 'active' : '' ?>"><a class="page-link" href="<?=base_url()?>clientes?pag=<?=$i?>"><?php print_r($i);?></a></li>
                    <?php } ?>
                    <li class="page-item <?php echo $pag >= $pagLeads ? 'disabled' : '' ?>"><a class="page-link" href="<?=base_url()?>clientes?pag=<?=$pag +1?>">Next</a></li>
                </ul>
            <?php } else { ?>
            <?php }
        } ?>
    </div>
</div>