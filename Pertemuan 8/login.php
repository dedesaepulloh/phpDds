<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
</head>
<body>
    <h2 align="center">Form Login</h2>
    <form method="POST" action="cek_login.php">
    <table align="center">
            <tr>
                <td>Username</td>
                <td>: <input type="text" name="username" required/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password" required /> </td>
            </tr>
            <tr>
                <td></td>
                <td>&nbsp;
                    <input type="submit" name="submit" value="Login" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>