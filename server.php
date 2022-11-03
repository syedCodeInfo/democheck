
<?php
if (isset($_POST['signChange'])) {
    $number = $_POST['myNumber'];
    if (empty($number)) {
      echo "Number is empty";
    } 
    else {
      $number= (int)$number;
      if($number<0)
      {
        $negativeValue= ltrim($number, '-');
        echo $negativeValue;
      }
      elseif($number==0)
      {
        echo 'Number is zero';
      }
      else
      {
        echo '-'.$number;
      }
    }
  }


  if (isset($_POST['TempChange'])) {
    $number = $_POST['tempNumber'];
    $mode = $_POST['mode'];
    if (empty($number)) {
      echo "Number is empty";
    } 
    else {
        if($mode==1)
        {
                $fara= (($number*9)/5)+32;
                echo 'Temperature in Fahrenheit is:'.$fara;
        }
        elseif($mode==2)
        {
            $celsius= ($number-32)*(5/9);
            echo 'Temperature in celsius is:'.$celsius;
        }
    }
  }

?>