<div class="titulo">Emails de Temas
    <div class="opciones_menu">
        <a href="<?= base_url() ?>admin/emails_temas/crear"><img class="ico_agregar" src="<?= base_url(); ?>css/general/img/t.gif" title="Añadir un nuevo email"></a>
    </div>
</div>
<div class="contenido">
    <div class="contenedortablabuscar">
        <form action="<?= base_url() ?>admin/emails_temas" id="form_buscar" method="post" >
            <table>
                <tbody>
                    <tr>
                        <td>Buscar:</td>
                        <td>
                            <input type="text" name="w_buscar" id="w_buscar" value="<?= $w_buscar ?>">
                            <input name="desde" id="desde" type="hidden" value="0" />
                        </td>
                        <td><img src="<?= base_url(); ?>css/general/img/t.gif" class="buscar" title='Buscar emails'></td>
                    </tr>
                </tbody>
            </table>
            </form>
    </div>

    <div class="contenedortabla">
        <table>
            <tr>
                <th width="2%">Id</th>
                <th>Nombre</th>
                <th width="5%">Opciones</th>
            </tr>
            <?= $html ?>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <?= $paginado ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script src="<?= base_url() ?>js/admin/helper.js"></script>
<script src="<?= base_url() ?>js/admin/emails_temas.js"></script>