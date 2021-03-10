<?php
$arr = [
    [
        'name' => 'Arif',
        'nim' => '192410101087',
        'prodi' => 'SI'
    ],

    [
        'name' => 'Dandee',
        'nim' => '192410101084',
        'prodi' => 'IF'
    ],
    
    [
        'name' => 'Agus',
        'nim' => '192410101000',
        'prodi' => 'Ubur2'
    ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba array</title>
</head>

<body>
    <table style="border: 1px solid black;">
        <tr>
            <td>Name</td>
            <td>Nim</td>
            <td>Prodi</td>
        </tr>
        <?php foreach ($arr as $key => $value) : ?>
            <tr>
                <td><?= $value['name']; ?></td>
                <td><?= $value['nim']; ?></td>
                <td><?= $value['prodi']; ?></td>
                <?php
                switch ($value['name']) {
                    case 'Arif':
                        echo "<td>SI</td>";
                        break;
                    case 'Dandee':
                        echo "<td>IF</td>";
                        break;
                    case 'Agus':
                        echo "<td>Ubur2</td>";
                        break;
                    default:
                        break;
                }
                ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>