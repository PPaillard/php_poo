<?php
class Book {
    private string $title;
    private string $author;
    private int $pageCount;

    public function __construct(string $title, string $author, int $pageCount)
    {
        $this->setTitle($title);
        $this->author = $author;
        $this->pageCount = $pageCount;
    }

    public function getSummary():string {
        return "Le livre {$this->title} a été écrit par {$this->author} et contient {$this->pageCount} pages.";
    }

    public function setTitle(string $title):void {
        // si le titre est supérieur ou égal à 50, on le set
        if(strlen($title) <= 50)
            $this->title = $title;
    }

    public function getTitle():string {
        return $this->title;
    }

    public function getAuthor():string {
        return $this->author;
    }

    public function getPageCount():int {
        return $this->pageCount;
    }
}