<script>
    function preview(name) {
        window.open('.?page=countrydetail&name=' + name, '_self')
    }
</script>

<table class="table table-hover table-sm table-responsive-xl">
    <thead class="thead-dark">
        <tr>
            <th></th>
            <th width="">Name</th>
            <th width="">Capital</th>
            <th width="">Population</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($decoded as $item) {
            $count++; ?>
            <tr style="cursor: pointer" onclick="preview(<?php echo '\'' . $item['name'] . '\'' ?>)">
                <th><?php echo $count; ?></th>
                <td><?php echo $item["name"] ?></td>
                <td><?php echo $item["capital"] ?></td>
                <td><?php echo number_format($item["population"], 0, '', ',') ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>