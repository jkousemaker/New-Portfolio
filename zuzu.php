<?php
    require_once('standard/header.php');
    require_once('standard/database.php');
    require_once('standard/jumbotron.php');
?>
<body>
    <div class= "wrapper">
        <p>Wat wilt u bestellen?</p>
        <div class="order">
            <form method="post">
                <select name="sushi_id">
                    <option selected disabled value="">Kies een sushi!</option>
                    <?php
                    global $pdo;
                    $sql = $pdo->prepare("SELECT * FROM sushi");
                    $sql->execute();
                    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                    foreach($result as $data) {
                        echo "
                            <option selected enabled value='$data[name]'>" . $data['name'] . "</option>
                        ";
                    }
                    ?>
                </select> <br>
                <input placeholder="Hoeveelheid" type="number" name="amount" value="1">
                <input placeholder="Voornaam" type="text" name="fname">
                <input placeholder="Achternaam" type="text" name="lname">
                <input placeholder="Adres"type="text" name="address">
                <input placeholder="Stad" type="text" name="city">
                <input placeholder="Postcode"type="text" name="zipcode"> <br>
                <input type="submit" name="submit">
            </form>
        </div>
    </div>

<?php
    global $pdo;
    if(isset($_POST['submit'])){
            $sushi = $_POST['sushi_id'];
            $sql = $pdo->prepare("SELECT * FROM sushi");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                if ($data['name'] == $sushi) {
                    $tempAmount = $data['amount'];
                }
            }
        if ($_POST['amount'] != 0 && !empty($_POST['amount']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['zipcode'])) {
            $amount = $_POST['amount'];
            $sushi = $_POST['sushi_id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $zipcode = $_POST['zipcode'];

            if($amount <= $tempAmount ) {
        
                $sql = $pdo->prepare("INSERT INTO customer (fname, lname, address, city, zipcode) VALUES ('$fname', '$lname', '$address', '$city', '$zipcode')");
                $sql->execute();

                $sql = $pdo->prepare("SELECT * FROM customer");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $data) {
                    if ($data['address'] == $address) {
                        $fn = $data['fname'];
                        $ln = $data['lname'];
                        $ad = $data['address'];
                        $ci = $data['city'];
                        $zi = $data['zipcode'];
                    }
                }

                $sql = $pdo->prepare("SELECT * FROM sushi");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $data) {
                    if ($data['name'] == $sushi) {
                        $sn = $data['name'];
                        $sp = $data['price'];
                        $id = $data['id'];
                        $am = $data['amount'];
                        $sa = $amount;
                        if ($sa > 1) {
                            $stp = $data['price'] * $sa;
                        } else {
                            $stp = $sp;
                        }
                    }
                }
                $temp = $am - $amount;
                $sql = $pdo->prepare("UPDATE sushi
                                        SET amount = $temp
                                            WHERE id = $id;");
                $sql->execute();


                echo "
                <table>
                    <tr>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Adres</th>
                        <th>Stad</th>
                        <th>Postcode</th>
                    </tr>
                    <tr>
                        <td>" . $fn . "</td>
                        <td>" . $ln . "</td>
                        <td>" . $ad . "</td>
                        <td>" . $ci . "</td>
                        <td>" . $zi . "</td>
                    </tr>
                    <tr>
                        <th>Sushi</th>
                        <th>Prijs</th>
                        <th>Hoeveelheid</th>
                        <th>Totaal Prijs</th>
                    </tr>
                    <tr>
                        <td>" . $sn . "</td>
                        <td>" . $sp . "</td>
                        <td>" . $sa . "</td>
                        <td>" . $stp . "</td>
                    </tr>
                </table>";
            } else {
                echo '<script>alert("There are not enough sushi in stock")</script>';
            }
        } else {
            echo '<script>alert("Fill in all fields.");</script>';
        }
    }
?>
<?php require_once('standard/footer.php'); ?>

