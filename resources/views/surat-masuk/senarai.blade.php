<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>

    <table class="table-auto border-separate border border-green-800">
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
                    <a href="/surat-masuk/<?php echo $item->id; ?>">
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
