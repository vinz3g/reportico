<?php
namespace Reportico;

$menu_title = template_xlate(ReporticoApp::getConfig("project_title"));
$menu = array (
        array ( "language" => "en_gb", "report" => "", "title" => "BLANKLINE" ),
	array ( "language" => "en_gb", "report" => "createproject.xml", "title" => "Create A New Project" ),
	array ( "language" => "en_gb", "report" => "createtutorials.xml", "title" => "Configure Tutorials" ),
	);
?>
