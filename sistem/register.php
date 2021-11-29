<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form action="register_process.php" method="post">
        <table>
            <tr>
                <td><label for="nric">NRIC</label></td>
                <td>
                    <input id="nric" type="text" name="nric" required />
                </td>
            </tr>
            <tr>
                <td><label for="katalaluan">Katalaluan</label></td>
                <td>
                    <input id="katalaluan" type="text" name="katalaluan" required />
                </td>
            </tr>
            <tr>
                <td><label for="cust_name">Customer Name</label></td>
                <td>
                    <input id="cust_name" type="text" name="cust_name" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Register</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>