<?php

echo (int)(15.2 + 14.7 + (10.5 + 10.5)) . "<br>"; // 50
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))) . "<br>"; // Integer

echo gettype(100) . "<br> ";

var_dump(100) . "<br>";

echo get_debug_type(100) . "<br> ";

echo "hello Elzero \\\ " . '""" ' . 'we love "$$php" ' . "<br>";

echo nl2br(" We
Love
Elzero
Web
School") . "<br>";


echo "<br>";

echo nl2br(<<< 'Now'
  Hello "'Elzero'" 
"We Love $Programming$" 
"Languages Specially" "PHP"
Now);

echo "<br>";
echo is_string("Hello PHP");
echo '<br>';
echo gettype((int)("hello php"));
$front_end = [0 => "html", 1 => "css", "js" => ["vuejs" => [2 => "v2", 3 => "v3"], 0 => "react js", 1 => "selte"]];
$back_end = [0 => "php", 1 => "my sql", 2 => "security", [0 => "git", 1 => "github", "testing" => [0 => "united testing", 1 => "end to end", 2 => "integration"]]];

echo "
    <pre>";
print_r($front_end);
print_r($back_end);
echo "</pre>";
