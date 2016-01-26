<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Data User<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <?php foreach ($item as $data) { ?>
        <tr class="active">
            <td><?php echo $data->username ?></td>
            <td><?php echo $data->email ?></td>
            <td><?php echo $data->password ?></td>
            <td><?php echo $this->tag->linkTo(array("data_user/edit/" . $data->username, "Edit")); ?> |
            <?php echo $this->tag->linkTo(array("data_user/delete/" . $data->username, "Delete")); ?></td>
        </tr>
    <?php } ?>
      </tbody>
    </table>
   </div>