{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Data Pemesanan{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
            <th>Kode Pemesanan</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Nama Penerima</th>
            <th>Alamat Penerima</th>
            <th>Nomor Telepon Penerima</th>
            <th>Kabupaten</th>
            <th>Tanggal Kirim</th>
            <th>Tanggal Terima</th>
            <th>Berat Barang(kg)</th>
            <th>Total Ongkir</th>
            <th>Nama Supir</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <?php foreach ($item as $data) { ?>
        <tr class="active">
            <td><?php echo $data->kode_pemesanan ?></td>
            <td><?php echo $data->nama_pemesan ?></td>
            <td><?php echo $data->alamat ?></td>
            <td><?php echo $data->no_telp ?></td>
            <td><?php echo $data->nama_penerima?></td>
            <td><?php echo $data->alamat_penerima ?></td>
            <td><?php echo $data->no_telppenerima ?></td>
            <td><?php echo $data->nama_daerah ?></td>
            <td><?php echo $data->tanggal_kirim ?></td>
            <td><?php echo $data->tanggal_terima ?></td>
            <td><?php echo $data->berat_barang ?></td>
            <td><?php echo $data->total_ongkir ?></td>
            <td><?php echo $data->nama_supir ?></td>
            <td><?php echo $this->tag->linkTo(array("data_pemesanan/view/" . $data->kode_pemesanan, "View")); ?>
        </tr>
    <?php } ?>
      </tbody>
    </table>
    
   </div>