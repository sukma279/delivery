{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Data Ongkir{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

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