<?php
class Book {
    private string $title;
    private string $author;
    private int $pageCount;

    public function __construct(string $title, string $author, int $pageCount)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pageCount = $pageCount;
    }

    public function getSummary():string {
        return "Le livre {$this->title} a été écrit par {$this->author} et contient {$this->pageCount} pages.";
    }
}