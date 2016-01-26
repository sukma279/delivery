<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Data Customer<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>Kode</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kabupaten</th>
          <th>Nomor Telepon</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <?php foreach ($item as $data) { ?>
        <tr class="active">
            <td><?php echo $data->kode_pemesan ?></td>
            <td><?php echo $data->nama_pemesan ?></td>
            <td><?php echo $data->alamat ?></td>
            <td><?php echo $data->kabupaten ?></td>
            <td><?php echo $data->no_tlp ?></td>
            <td><?php echo $this->tag->linkTo(array("data_customer/edit/" . $data->kode_pemesan, "Edit")); ?> |
            <?php echo $this->tag->linkTo(array("data_customer/delete/" . $data->kode_pemesan, "Delete")); ?></td>
        </tr>
    <?php } ?>
      </tbody>
    </table>
   </div>