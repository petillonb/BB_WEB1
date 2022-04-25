<!DOCTYPE html>
<html>

<head>
    <title>SiteWeb - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        Accueil !!!

        <?php
        $res = select_fields("comment", 1);
        ?>
        <p>Total results found: <?php echo $res["total"]; ?>
        </p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $res["row"]["ID"]; ?>
                    </td>
                    <td>
                        <?php echo $res["row"]["message"]; ?>
                    </td>
                    <td>
                        <?php echo $res["row"]["post_date"]; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>