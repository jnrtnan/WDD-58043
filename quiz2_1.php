<!DOCTYPE html>
<html>
<strong><body>

<?php
    $Salary_rate = 600;
    $Salary = $Salary_rate*15;
    $Taxable_amount = 0.3*$Salary;
    $Net_pay = $Salary-$Taxable_amount;

    echo "Salary rate per day: ".$Salary_rate;
    echo "<br>";
    echo "Salary: ".$Salary;
    echo "<br>";
    echo "Taxable Amount: ".$Taxable_amount;
    echo "<br>";
    echo "Net pay: ".$Net_pay;
    

	
	
?>
</body><strong>
</html>
