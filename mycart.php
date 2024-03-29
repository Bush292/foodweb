<?php 
session_start();
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php 
// include("header.php"); 
?>
<body>
 <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MY Cart</h1>
        </div>
<div class="col-lg-9">

         <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item price</th>
      <th scope="col">Quantity</th>
      <th scope="col">total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
     $total=0;
    if(isset($_SESSION['cart']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
        $sr=$key+1;
        $total=$total+$value['Price'];
        echo"
           <tr>
            <td>$sr</td>
            <td>$value[Item_Name]</td>
            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
            <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min= '1' max='10'></td>
            <td class='itotal'></td>
            <td>
            <form action='manage_cart.php' method='POST'>
             <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
             <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
            </form>
            </td>
            </tr>
           ";
        }
    } 
    ?>
    </tbody>
</table>
</div>

<div class="col-lg-3">
<h3>total:</h3>
<h5 class="text-right"><?php echo $total ?></h5>

    </div>

        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
            <h4>Grand Total:</h4>
            <h5 class="text-right" id="gtotal"></h5>
            <br>
            <form>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Cash On Delivery
  </label>
</div>
<br>
                <button class="btn btn-primary btn-block">Make Purchase</button>
            </form>
        </div>
</div>
</div>
 </div> 
 
 <script>

var gt=0;
var iprice=document.getElementByClassName('iprice');
var iquantity=document.getElementByClassName('iquantity');
var itotal=document.getElementByClassName('itotal');
var gtotal=document.getElementById('gtotal');

function subTotal()
{
  get=0;
  for(i=0;i<price.length;i++)
  {
    itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

    gt=gt+(iprice[i].value)*(iquantity[i].value);

    /* price 650 quantity 1  gt=0+(650*1) 
       price 750 quantity 2  gt=650+(750*2) *** gt =gt=2150
       price 850 quantity 1  gt=2150+(850*1) *** gt=3000
    */

  }
  gtotal.innerText=gt;

}

subTotal();
 </script>
</body>
</html>
<!-- </body>
</html> -->