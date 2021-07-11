<?php

namespace Tqdev\PhpCrudApi;

	$classes = get_declared_classes();
	include ("src/Tqdev/PhpCrudApi/Config.php");
	
	$diff = array_diff(get_declared_classes(), $classes);
	$class_with_namespace = reset($diff);
	
	//var_dump($class_with_namespace);
	
	$class_name_parts = explode("\\", $class_with_namespace);
	$class_name = $class_name_parts[sizeof($class_name_parts)-1];
	
	//var_dump($class_name[sizeof($class_name)-1]);
	
	//src/Tqdev/PhpCrudApi/Config.php
	
	$class_object = new $class_with_namespace(array());
	
	$class_methods = get_class_methods($class_object);
	
	echo "<pre>";
	print_r($class_methods);
	echo "</pre>";
	
	/* $class = new ReflectionClass('Config');

	var_dump($class->inNamespace());
	var_dump($class->getName());
	var_dump($class->getNamespaceName());
	var_dump($class->getShortName()); */
	
	//$declared_classes = get_declared_classes();
	
	//var_dump($declared_classes);
	
	/* echo "<pre>";
	print_r($declared_classes);
	echo "</pre>"; */
	
	/* $class = new ReflectionClass('Config');
	$methods = $class->getMethods();
	
	var_dump($methods);
	
	
	$config_class = get_class_methods("Config");
	echo "<pre>";
	print_r($config_class);
	echo "</pre>"; */
	
	
	/* if (exists($declared_classes[0])) {
		var_dump($declared_classes);
	} */