<?php

    $people = array(
        array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
        array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
        array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
        array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
        array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
    );

?>

<!doctype html>
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-Mail</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($people as $contact): ?>
                    <tr>
                        <td id="id"><?=$contact['id'];?></td>
                        <td id="first_name"><?=$contact['first_name'];?></td>
                        <td id="last_name"><?=$contact['last_name'];?></td>
                        <td id="email"><?=$contact['email'];?></td>
                        <td><button type="button">Click Me!</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                
                $(document).on('click', 'button', function() {

                    $alert = "Full Name: ";
                    $alert += $(this).closest("tr").find("#first_name").text() + " " + $(this).closest("tr").find("#last_name").text();
                    $alert += "\nE-Mail: ";
                    $alert += $(this).closest("tr").find("#email").text();

                    alert($alert);
                });

            });
        </script>
    </body>
</html>