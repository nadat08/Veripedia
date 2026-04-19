<?php

namespace Models;

class Article {
    private $id;
    private $title;
    private $content;
    private $createdAt;
    private $updatedAt;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = date('Y-m-d H:i:s');
        $this->updatedAt = $this->createdAt;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function save() {
        // Logic to save the article to the database
    }

    public function delete() {
        // Logic to delete the article from the database
    }
}
