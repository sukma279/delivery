{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Data Kendaraan{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

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