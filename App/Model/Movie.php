<?php

namespace App\Model;

class Movie
{
    //Attributs
    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?Date $publishAt;
    private ?int $duration;
    private ?string $cover;
    private ?array $categories;

    //constructeur
    public function __construct()
    {
        $this->movies = [];
    }


    //Getters et Setters
    //ID
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    //TITLE
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    //DESCRIPTION
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    //PUBLISHAT
    public function getPublishAt(): Date
    {
        return $this->publishAt;
    }
    public function setPublishAt(?Date $publishAt): void
    {
        $this->publishAt = $publishAt;
    }

    //DURATION
    public function getDuration(): int
    {
        return $this->duration;
    }
    public function setDuration(?int $duration): void
    {
        $this->duration = $duration;
    }

    //COVER
    public function getCover(): string
    {
        return $this->cover;
    }
    public function setCover(?string $cover): void
    {
        $this->cover = $cover;
    }

    //CATEGORIES
    public function getCategories(): array
    {
        return $this->categories;
    }
    public function addCategory(?array $categories): void
    {
        $this->category->$categories;
    }
}