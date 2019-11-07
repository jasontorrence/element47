<?php
$class = get_sub_field('css_class');
if($class) {
	$customClass =  ' ' . $class;
}
else {
	$customClass = '';
}
$cleanClasses = implode(' ', $classes);
$allClasses = $cleanClasses . $customClass;
$formattedClasses = preg_replace('!\s+!', ' ', $allClasses);