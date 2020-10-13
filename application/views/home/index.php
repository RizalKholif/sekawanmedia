
<div class="container mt-3">

<table class="table table-hover mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID Pegawai</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Gaji</th>
            <th scope="col">Usia</th>
            <th scope="col">Foto</th>
        </tr>
    </thead>


    <?php $i = 1; ?>
    <?php array_multisort(array_column($output['data'], 'employee_age'), SORT_ASC, $output['data']); ?>
    <?php foreach ($output['data'] as $row) : ?>
    <tbody>

        <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["employee_name"]; ?></td>
            <td><?php echo $row["employee_salary"]; ?></td>
            <td><?php echo $row["employee_age"]; ?></td>
            <td><img class="img-thumbnail" src="<?php echo $row["profile_image"]; ?>"></td>

        </tr>
    </tbody>
    <?php $i++; ?>
    <?php endforeach ; ?>
    </table>
</div>