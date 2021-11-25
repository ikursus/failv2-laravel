<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>NO RUJUKAN</th>
                <th>TARIKH SURAT</th>
                <th>TAJUK</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($listSurat as $item): ?>

            <tr>
                <td>
                    <a href="/surat-keluar/<?php echo $item->id; ?>">
                    <?php echo $item->norujukan; ?>
                    </a>
                </td>
                <td><?php echo $item->trksurat; ?></td>
                <td><?php echo $item->tajuk; ?></td>
            </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

    <?php echo $listSurat->links(); ?>
</body>
</html>
