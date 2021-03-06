<?php
  $unid = new Unidade();
  $unidade = $unid->findAll();
?>
 <!--main content start-->
<section id="main-content">
   <section class="wrapper">
     <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Unidade
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">

                    <table id="example" class="table table-striped table-hover table-bordered  display" style="width:100%">
                    <thead>
                          <tr>
                            <th scope="col">Unidade</th>
                            <th scope="col">#</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php  foreach ($unidade as $rows) { ?>
                          <tr>
                              <td scope="col" width="90%"><?php echo $rows->desc_unidade; ?></td>
                              <td scope="col" > 
                                  <a href="?p=formUnidade&edit=1&id=<?php echo $rows->id_unidade; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                  <?php if($rows->ativo == 1){ ?>
                                    <a href="cadastramento/acaoUnidade.php?acao=inative&id=<?php echo $rows->id_unidade; ?>" class="btn btn-default edit"  title="Inativar">
                                        <i class="fa fa-times-circle-o"></i>
                                    </a>
                                  <?php }else{ ?>
                                    <a href="cadastramento/acaoUnidade.php?acao=ative&id=<?php echo $rows->id_unidade; ?>" class="btn btn-info edit"  title="Ativar">
                                          <i class="fa fa-check"></i>
                                      </a>
                                  <?php } ?>
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
                </section>
                <a href="?p=formUnidade" type="button" class="btn btn-success"><i class="fa fa-folder-open-o"></i> Cadastrar Unidade </a>

            </div>
        </div>
  </section>
</section>