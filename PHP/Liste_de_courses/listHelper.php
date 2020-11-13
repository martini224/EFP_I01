<?php

class ListHelper {

    private ?array $categories = null;


    function __construct()
    {

    }

    public function getCategories(): array {
        if(!isset($this->categories)) {
            $this->categories = $this->convertJsonListToCategories($this->getListAsJson());
        }
        return $this->categories;
    }

    private function getListAsJson() {
        $filename = 'liste.json';
        $myfile = fopen($filename, "r") or die("Unable to open file!");
        return fread($myfile, filesize($filename));
    }

    private function convertJsonListToCategories(string $json): array {
        $categories = array();

        if(isset($json)) {
            $jsonObject = json_decode ($json);
            $categoriesJsonObject = $jsonObject->categories;

            foreach ($categoriesJsonObject as $categoryJsonObject){
                array_push ($categories, $this->convertCategoryJsonObjectToCategory($categoryJsonObject));
            }
        }

        return $categories;
    }

    private function convertCategoryJsonObjectToCategory($categoryJsonObject): Category {
        $id = $categoryJsonObject->id;
        $name = $categoryJsonObject->name;
        $articles = property_exists($categoryJsonObject, 'articles') ? $categoryJsonObject->articles : null;

        return new Category($id, $name, $articles);
    }

}