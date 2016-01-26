<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Data Ongkir<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
            <th>Kode Daerah</th>
            <th>Nama Daerah</th>
            <th>Ongkir</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <?php foreach ($item as $data) { ?>
        <tr class="active">
            <td><?php echo $data->kode_daerah ?></td>
            <td><?php echo $data->nama_daerah ?></td>
            <td><?php echo $data->ongkir ?></td>
            <td><?php echo $this->tag->linkTo(array("data_ongkir/edit/" . $data->kode_daerah, "Edit")); ?> |
            <?php echo $this->tag->linkTo(array("data_ongkir/delete/" . $data->kode_daerah, "Delete")); ?></td>
        </tr>
    <?php } ?>
      </tbody>
    </table>
   </div>