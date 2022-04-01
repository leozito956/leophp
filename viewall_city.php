<?php
include 'connect.php';
// include'checkLogin.php';

?>

<a href="regcity.php"> adicionar cidade </a>

<table border='1'>
    <tr>
        <th>
            idCity
        </th>
        <th>
            Name
        </th>
        <th> 
            Excluir
        </th>
    </tr>

<?php
$sq="select * from city";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idCity']?>
        </td>
        <td>
            <?php echo $f['nameCity']?>
        </td>
        <td>
            <a href="delete_city.php"> Delete </a>
        </td>
    </tr>
    <?php
}
?>