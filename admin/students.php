<?php
include_once 'up.php';
include_once 'connection.php';
$result = $connection->query("SELECT `fname`, `lname`, `address`, `gender`, `code`,name FROM `students` INNER JOIN `departments` ON dept_num=number");
// echo "<pre>";
$students = $result->fetchAll(PDO::FETCH_ASSOC);
// var_dump($students);
// die();
$result2 = $connection->query("SELECT `fname`, `lname`, skill FROM `students`INNER JOIN `skills` ON code=std_code");
$skills = $result2->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Students</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">address</th>
                        <th scope="col">gender</th>
                        <th scope="col">code</th>
                        <th scope="col">dept_name</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($students as $value) {
                        $name = $value['fname'] . ' ' . $value['lname'];
                    ?>
                        <tr>
                            <td><?= $name ?></td>
                            <td><?= $value['address'] ?></td>
                            <td><?= $value['gender'] ?></td>
                            <td><?= $value['code'] ?></td>
                            <td><?= $value['name'] ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<br/>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">skills</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">skill</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($skills as $value) {
                        $name = $value['fname'] . ' ' . $value['lname'];
                    ?>
                        <tr>
                            <td><?= $name ?></td>
                            <td><?= $value['skill'] ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<?php
include_once 'dowm.php';
?>