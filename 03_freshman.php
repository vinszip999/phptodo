<?php
$title = "연관 배열 : Associated Array";
include("./header.php");
// 03_freshman.php

// **연상배열**
$freshman = array(
	"David" => "Computer",
	"Alice" => "Math",
	"Elsa" => "physics",
	"Bob" => "Music",
	"Chris" => array("Electronics", "Design")
);

print($freshman['David']); // print($freshman[David]);
$freshman["Bob"] = "Movie";
$freshman["IU"] = "Singer";
// key 값이 있으면 수정이고, 없으면 추가이다.
unset($freshman["Elsa"]); 
// unset => 해당 항목을 사라지게 하는 것이다.

print("<pre class=\"bg-warning text-white\">");
print_r($freshman);
print("</pre>");

include("./footer.php");
?>