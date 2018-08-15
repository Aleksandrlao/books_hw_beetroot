<?php

abstract class Book2 {
    protected $id;
    protected $name;
    protected $author;
    protected $description;
    protected $public_year;
    protected $file_path;
    protected $thumb;
    protected $type;
    protected $sort_order;

    function __construct($item){
        $this->id = $item['id'];
        $this->name = $item['name'];
        $this->author = $item['author'];
        $this->description = $item['description'];
        $this->public_year = $item['public_year'];
        $this->file_path = $item['file_path'];
        $this->thumb = $item['thumb'];
        $this->type = $item['type'];
        $this->sort_order = $item['sort_order'];
    }

    abstract public function printInfo2();
    public function printInfoBox2() {
        $printInfoBook = array();
        $printInfoBook['id'] = $this->id;
        $printInfoBook['name'] = $this->name;
        $printInfoBook['author'] = $this->author;
        $printInfoBook['description'] = $this->description;
        $printInfoBook['public_year'] = $this->public_year;
        $printInfoBook['file_path'] = $this->file_path;
        $printInfoBook['type'] = $this->type;
        $printInfoBook['sort_order'] = $this->sort_order;
        return $printInfoBook;
    }

}

class BookTxt2 extends Book2 {
    public function printInfo2() {
        $printBook = parent::printInfoBox2();
        $printBook['thumb'] = 'images/txt.png';
        $printBook['css'] = ' book_txt';
        return $printBook;
    }
}

class BookPdf2 extends Book2 {
    public function printInfo2() {
        $printBook = parent::printInfoBox2();
        $printBook['thumb'] = 'images/pdf.png';
        $printBook['css'] = ' book_pdf';
        return $printBook;
    }
}

class BookDoc2 extends Book2 {
    public function printInfo2() {
        $printBook = parent::printInfoBox2();
        $printBook['thumb'] = 'images/doc.png';
        $printBook['css'] = ' book_doc';
        return $printBook;
    }
}