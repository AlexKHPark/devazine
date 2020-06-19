<h1> Test</h1>

<?php
  $arr = array(1,2,3,4,5);
?>

<table>
  <tr>
    <th> no</th>
  </tr>
  <?php foreach($arr as $x):?>
    <tr>
    <td>
      <?= $x?>
    </td>
  </tr>
  <?php endforeach;?>
</table>
