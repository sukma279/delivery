<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Data Supir<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
            <<th>Kode Supir</th>
            <th>Nama Supir</th>
            <th>Nomor SIM</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Jenis Kendaraan</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <?php foreach ($item as $data) { ?>
        <tr class="active">
            <td><?php echo $data->kode_supir ?></td>
            <td><?php echo $data->nama_supir ?></td>
            <td><?php echo $data->nomor_sim ?></td>
            <td><?php echo $data->alamat ?></td>
            <td><?php echo $data->no_tlp ?></td>
            <td><?php echo $data->jenis_kendaraan ?></td>
            <td><?php echo $data->name ?></td>
            <td><?php echo $data->password ?></td>
            <td><?php echo $this->tag->linkTo(array("data_supir/edit/" . $data->kode_supir, "Edit")); ?> |
            <?php echo $this->tag->linkTo(array("data_supir/delete/" . $data->kode_supir, "Delete")); ?></td>
        </tr>
    <?php } ?>
      </tbody>
    </table>
   </div>