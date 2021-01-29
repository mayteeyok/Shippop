<?PHP
echo "คำตอบ<br />";
echo "SELECT e.employee_name, c.company_name, b.branch_name, p.position_name <br />";
echo "FROM employee e <br />";
echo "INNER JOIN company c ON e.company_id = c.company_id <br />";
echo "INNER JOIN branch b ON c.company_id = b.company_id <br />";
echo "INNER JOIN position p ON e.position_id = p.position_id <br />";
echo "WHERE c.company_name = 'Master-programmer' <br />";
echo "AND b.branch_name = 'เลย' <br />";
echo "AND p.position_name = 'programmer'";
