<?php
$aNum = "";
$bNum = "";
$oP   = "";
$res  = "";
if(isset($_REQUEST['num1']))
{
    $aNum = $_REQUEST['num1'];
    $bNum = $_REQUEST['num2'];
    $oP = $_REQUEST['opr'];
    $res = calc($aNum, $bNum, $oP);
}
function calc($aNum, $bNum, $oP)
{
    $result = 0;
    switch($oP)
    {
        case '+':
            $result = $aNum+$bNum;
            break;
        case '-':
            $result = $aNum-$bNum;
            break;
        case '*':
            $result = $aNum*$bNum;
            break;
        case '/':
            $result = $aNum/$bNum;
            break;
        default:
            $result = "Error";
    }
    return $result;
}
?>
<!--<form method="post">-->
<form method="get">
    <h1>Calculate</h1>
    a<input type="text" name="num1" value="<?php echo $aNum?>"><p>
        b<input type="text" name="num2" value="<?php echo $bNum?>"><p>
        op<input type="text" name="opr" value="<?php echo $oP?>"><p>
        result <input type="text" name="Res" value="<?php echo $res?>"><p>
        <input type="submit" value="Calculate"><p>
</form>



