<?php

class Category {

    private int $id;

    private string $name;

    private array $articles;


    function __construct(int $id, string $name, ?array $articles)
    {
        $this->id = $id;
        $this->name = $name;
        $this->articles = !isset($articles) ? array() : $articles;
    }


    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getArticles(): array {
        return $this->articles;
    }
}