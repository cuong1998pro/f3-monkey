<table border="1">
<?php 
    $users = $data['users'];
    foreach ($users as $user): ?>
    <tr>
    <td><?php echo $user->ten ?></td>
    <td><?php echo $user->email ?></td>
    <td><?php echo $user->matkhau ?></td>
    </tr>

<?php endforeach; ?>
</table>