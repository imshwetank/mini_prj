<?php
$value_input=null;
$value_rate=null;
$result=null;
if(isset($_REQUEST['submit'])){
    // echo '<pre>';
    // print_r($_REQUEST);
    // die();
    $value_input=$_REQUEST['value_input'];
    $value_rate=$_REQUEST['value_rate'];
    // [submit]; 

    function tax_fun($value_input,$value_rate){
        if(is_numeric($value_input) && is_numeric($value_rate) && $value_rate!=='' && $value_rate!==''){
        $value_rate=$value_rate+100;
        $result2=$value_input/$value_rate*100;
        $result=bcadd(0,$result2,2);
        }
        if(!is_numeric($value_input)  || !is_numeric($value_rate)){
            // $value_rate=$value_rate+100;
            $result='Please provide Proper Value for Result';
        }
        if($value_rate=='' || $value_rate==''){
            $result='Empty value ';
          }
        return $result;
    }
    $result= tax_fun($value_input,$value_rate);
    // echo $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Get Value from</title>
</head>
<body>
    <p style="font-size:26px;">
    Let ‘x’ amount is inclusive of 29% of tax applied on ‘y’, create a function which accepts this x amount and returns the amount before tax applied (y).
         </p>

<div class="container py-5">
<div class="row">
    <div class="col-lg-5 col-md-8 col-12 mx-auto">
        <div class="card rounded bg-white border p-4">
            <div class="card-body">
                <h3 class="card-title md-3">Get Value </h3>
                        <?php //echo $msg;?>
                    <form method="POST">
                    <!-- <form action="javascript:void(0);" method="POST"> -->
                        <div class="mb-3">
                            <label for="value_input" class="form-label ">Value Input X</label>
                            <input type="text" value="<?= $value_input?>" placeholder="Value Input X (129 or 258......)" class="form-control value_input" id="value_input" name="value_input">
                        </div>
                        <div class="mb-3">
                            <label for="value_rate"  class="form-label ">Value Rate Y </label>
                            <input type="text" value="<?= $value_rate ?>" placeholder="Value Rate Y 29%" class="form-control value_rate" id="value_rate" maxvalue="2" name="value_rate">
                        </div>
                        <div class="mb-3">
                            <label for="value_result"  class="form-label result">Value Result</label>
                            <input type="text" value="<?= $result ?>" class="form-control value_result" id="value_result" disabled placeholder="" name="value_result">
                        </div>
                        <button type=""  name="submit" class="btn btn-primary">Get Result</button>
                        <!-- <button type="" onclick="taxCalfun()" name="submit" class="btn btn-primary">Get Result</button> -->
                    </form>
            </div>
        </div>
    </div>
</div>


</div> 
    
<!-- 
    Let ‘x’ amount is inclusive of 29% of tax applied on ‘y’, create a function which accepts this x amount and returns the amount before tax applied (y).
 -->

<script>
// function taxCalfun(){
//          let x=document.getElementById('value_input').value;
//          let y=document.getElementById('value_rate').value;
//          x=parseInt(x);
//          y=parseInt(y);
//         // x=129;
//         // y=29;
// // console.log(typeof(x,y));
//  function returnValue(result) {
    
     
//     document.getElementById('value_result').value=result;
//     console.log(result);
     
// }

// function taxCal(x, y, myCallback) {
//     y=y+100;
//           result=x/y*100;
//   myCallback(result);
// }

// taxCal(x, y, returnValue);
// }
  
</script>
</body>
</html>