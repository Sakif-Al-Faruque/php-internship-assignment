<?php 
    require("./employee.php");

    $emp1 = new Employee();
    $emp2 = new Employee();

    $emp1->set_emp_id("2001");
    $emp1->set_emp_name("john");
    $emp1->set_emp_contact("019837373");

    $emp2->set_emp_id("2002");
    $emp2->set_emp_name("bob");
    $emp2->set_emp_contact("01387773");

    echo "Details of employee one <br>";
    echo "Id: ".$emp1->get_emp_id("2001")."<br>";
    echo "Name: ".$emp1->get_emp_name("john")."<br>";
    echo "Contacts: ".$emp1->get_emp_contact("019837373")."<br>";
    echo "<br><br>";
    echo "Details of employee one <br>";
    echo "Id: ".$emp2->get_emp_id("2002")."<br>";
    echo "Name: ".$emp2->get_emp_name("bob")."<br>";
    echo "Contacts: ".$emp2->get_emp_contact("01387773")."<br>";


?>