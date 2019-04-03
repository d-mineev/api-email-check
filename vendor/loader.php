<?php

/**
 * Class Loader
 */
class Loader
{
    /**
     * @param $fullNamespace
     */
    public function autoload($fullNamespace)
    {
        $namespaceParts = explode('\\', $fullNamespace);

        $pathPrefix = __DIR__ . '/../App/Controllers/';
        if (!empty($namespaceParts[2]) && $namespaceParts[2] == 'Api') {
            $pathPrefix = '/App/Controllers/Api/';
        }

        $nameClass = array_pop($namespaceParts);
        $classFile = $pathPrefix . $nameClass . '.php';

        if (is_file($classFile)) {
            require_once $classFile;
        }
    }
}