<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="_templates/assets/dist/css/user.css" rel="stylesheet">
    <!--table sorting-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" />


</head>

<body>
    <main class="container">
    <div class="contanier ms-1">
        <h1 class="text-center">User register list</h1>
        <table class="table" id="stable">
            <thead>
                <tr class="table-info">
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email id</th>
                    <th scope="col">age</th>
                    <th scope="col">address</th>
                    <th scope="col">qualifiacation</th>
                    <th scope="col">date</th>
                </tr>
            </thead>
            <tr>
                <?php
                $user = User::getUsers();
                $i = 1;

                foreach ($user as $users) {


                ?>
                    <td><?= $i++ ?></td>
                    <td><?= $users['name'] ?></td>
                    <td><?= $users['email'] ?></td>
                    <td><?= $users['age'] ?></td>
                    <td><?= $users['address'] ?></td>
                    <td><?= $users['qualifiacation'] ?></td>
                    <td><?=$users['reg_time']?></td>
            </tr>
        <?php
                }
        ?>
        </table>
        <div>
        <a href="/reg.php" class="w-100 btn btn-link">Not registered? click here</a>
        </div>
    </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(() => {
            $('#stable').DataTable();
        })
    </script>

</body>

</html>