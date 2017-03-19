<?php
require_once("classes/autoload/Psr4AutoloaderClass.php");
require_once("classes/autoload/Psr4AutoloaderExt.php");
class Autoloader {
	
    static public function loader($className) {
		$classNameOrig=$className;
        $className=str_replace("App","classes",$className);

        $filename = "./" . str_replace('\\', '/', $className) . ".php";

        if (file_exists($filename)) {
            include_once($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        }else{
			self::loaderPsr4($classNameOrig);
		}
        return FALSE;
    }
	
	static public function loaderPsr4($className) {
		//protected $loader;
        //$this->loader = new Psr4AutoloaderExt;
		
        $loader = new Psr4AutoloaderExt;

        //$this->loader->setFiles(array(
		$loader->setFiles(array(
            //'/vendor/foo.bar/src/ClassName.php',
            '/classes/Animal.php',
            '/classes/Ball.php',
            '/classes/Cloneable.php',
            '/classes/Person.php',
            '/classes/Shared.php',
			'/classes/Vehicle.php',
			'/classes/test/TestDebugInfo.php',
			'/classes/test/other/TestSetState.php',
			'/classes/test/other/TestSetState.php',
        ));

        $loader->addNamespace(
            //'Foo\Bar',
			'App',
            //'/vendor/foo.bar/src'
			'/classes'
        );
		
		$loader->addNamespace(
            //'Foo\Bar',
			'Vendor',
            //'/vendor/foo.bar/src'
			'/Vendor'
        );
		
		//$actual = $this->loader->loadClass('Foo\Bar\ClassName');
		$actual = $loader->loadClass($className);
	}
}
spl_autoload_register('Autoloader::loader');