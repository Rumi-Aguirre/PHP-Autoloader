# AutoloadWithNamespacesPHP

Basic structure example for autoloading with namespaces in PHP.

**_Autoloader.php_**

Has all the logic of the Autoloading, this example is based on a library
that has all the classes under the ./ directory, you can just change
that string if your application is under further directories.

`$dir = './';`

**_MainClass.php_**

Main Class for testing purposes, this also loads another class called AutoloadedClass
