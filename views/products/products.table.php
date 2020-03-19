<script>
    function preview(id) {
        window.open('?page=productdetail&id=' + id, '_self')
    }
</script>

<table class="table table-sm table-hover table-responsive-md">
    <thead class="thead-dark">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($lists as $item) {
            $count++ ?>
            <tr style="cursor:pointer" onclick="preview(<?php echo $item['id'] ?>)">
                <th><?php echo $count ?></th>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['price'] ?></td>
                <td><?php echo $item['category_name'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>