<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Data Kendaraan<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
            <th>Nomor Plat</th>
            <th>Jenis Kendaraan</th>
            <th>Nomor STNK</th>
            <th>Kapasitas</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <?php foreach ($item as $data) { ?>
        <tr class="active">
            <td><?php echo $data->plat_nomor ?></td>
            <td><?php echo $data->jenis_kendaraan ?></td>
            <td><?php echo $data->nomor_stnk ?></td>
            <td><?php echo $data->kapasitas ?></td>
            <td><?php echo $this->tag->linkTo(array("data_kendaraan/edit/" . $data->plat_nomor, "Edit")); ?> |
            <?php echo $this->tag->linkTo(array("data_kendaraan/delete/" . $data->plat_nomor, "Delete")); ?></td>
        </tr>
    <?php } ?>
      </tbody>
    </table>
   </div>