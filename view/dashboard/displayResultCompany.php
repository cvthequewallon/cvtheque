<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <tbody>
        <tr>
            <td>{company_name}</td>
            <td>{siren}</td>
            <td>{phone}</td>
            <td>{postcode}</td>
            <td>{town}</td>
            <td>
                <form action="../../controller/manage.php" method="POST">
                    <input type="number" name="id_waiting" value="{id_waiting}" hidden>
                    <button type="submit" name="Validate" value="Validate">Accepter</button>
                    <button type="submit" name="Refuse" value="Refuse">Refuser</button>
                </form>
            </td>
        </tr>
    </tbody>
</body>

</html>