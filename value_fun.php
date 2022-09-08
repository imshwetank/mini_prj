<?php 
$value_rupee=NULL;
$value_people=NULL; 
$rupee_people=NULL;
$rem_rupee=null;
if(isset($_REQUEST['value_rupee'])){
    // echo '<pre>';
    // print_r($_REQUEST);
   
    $value_rupee=$_REQUEST['value_rupee'];
    $value_people=$_REQUEST['value_people']; 
    $rupee_people=$_REQUEST['rupee_people'];
    // $row_num_1=$value_rupee/$rupee_people;
    // $value_rupee=$value_rupee+$rupee_people;
    // echo $row_num_1;
    if(!empty( $value_rupee) && !empty( $value_people)) {

 function remaining($value_rupee, $rupee_people,$value_people) {
    $value_rupee=$value_rupee+$rupee_people;
      $nn=0;
      $w=0;

    for ($i=1; $i <= $value_people; $i++) { 
        while ($nn<=$value_people) {
            $value_rupee=$value_rupee-$rupee_people;
            $rem_rupee=$value_rupee;
            // echo $value_rupee.'<br>';
            // echo $i++.' Persone Recive '.$rupee_people. ' and  Remaning Amount '.$rem_rupee.'<br>';
            $nn++;
         }
        
   
    }
    // $rem_rupee=$rem_rupee-$value_rupee;
    if ($rem_rupee==0){
        $rem_rupee='Remaning Amount 0';
        $w=1;
    }
    if ($rem_rupee<0){
        $rem_rupee='Insufficient value distribution';
    }
    if($rem_rupee>=1 && $w!==1){
       
            $rem_rupee='Remaning Amount '.$rem_rupee;
        
    }
    return $rem_rupee;
};
// remaining($value_rupee, $rupee_people,$value_people);
    
$rem_rupee= remaining($value_rupee, $rupee_people,$value_people);
    // die();

// function remaining($value_rupee,$value_people,$rupee_people){
} else{
    echo "<script>alert('please fill out.');</script>";
} 

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create a dynamic function for distributing</title>
</head>
<body>
<p style="font-size:20px;">
Create a dynamic function for distributing ‘x’ amount of Rupees to ‘y’ number of people where maximum ‘z’ amount of rupees can be received by each person- The function should display the amount each person will get  along with that it should also return the remaining amount that will be left (if any) after distributing it with the people.

         </p>
<div class="container py-5">
<div class="row">
    <div class="col-lg-5 col-md-8 col-12 mx-auto">
        <div class="card rounded bg-white border p-4">
            <div class="card-body">
                <h3 class="card-title md-3">Get Value </h3>
                        <?php //echo $msg;?>
                        <!-- javascript:void(0); -->
                    <form  method="POST">
                        <div class="mb-3">
                            <label for="value_rupee" class="form-label result">'x' amount of Rupees</label>
                            <input type="text"  class="form-control value_rupee" value="<?= $value_rupee ?>" id="value_rupee" name="value_rupee">
                        </div>
                        <div class="mb-3">
                            <label for="value_people"  class="form-label result">'y' number of people</label>
                            <input type="text" class="form-control value_people" value="<?= $value_people ?>" id="value_people" maxvalue="2" name="value_people">
                        </div>
                        <div class="mb-3">
                            <label for="rupee_people"  class="form-label result">'z' amount of rupees received by each person</label>
                            <input type="text" class="form-control rupee_people" value="<?= $rupee_people ?>" id="rupee_people" maxvalue="2" name="rupee_people">
                        </div>
                        <div class="mb-3">
                            <label for="remaining" class="form-label result">Value Result of remaining</label>
                            <input type="text" class="form-control remaining" value="<?=$rem_rupee ?>" id="remaining" disabled placeholder="" name="remaining">
                        </div>
                        <button type="" onclick="taxCalfun()" name="submit" class="btn btn-primary">Get Result</button>
                    </form>
            </div>
        </div>
    </div>
</div>


</div> 
    
<!-- 
    Create a dynamic function for distributing ‘x’ amount of Rupees to ‘y’ number of people where maximum ‘z’ amount of rupees can be received by each person- The function should display the amount each person will get  along with that it should also return the remaining amount that will be left (if any) after distributing it with the people.
 -->

<script>
function taxCalfun(){
}
  
</script>
</body>
</html>