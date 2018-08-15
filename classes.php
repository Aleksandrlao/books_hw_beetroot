<?php

abstract class Book {
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

    abstract public function printInfo();
    public function printInfoBox() {
        $printInfoBook = '<div class="book_thumb"><img src="'.$this->thumb.'" alt="'.$this->name.'" /></div>';
        $printInfoBook .= '<div class="book_info"><a href="'.$this->file_path.'">'.$this->name.'</a>';
        $printInfoBook .= '<div class="book_data">Автор: '.$this->author.', Год публикации: '.$this->public_year.'</div>';
        $printInfoBook .= '<div class="book_desc">'.$this->description.'</div></div>';
        return $printInfoBook;
    }

}

class BookTxt extends Book {
    public function printInfo() {
        $printBook = '<div class="book_item book_txt">'.parent::printInfoBox().'</div>';
        return $printBook;
    }
}

class BookPdf extends Book {
    public function printInfo() {
        $printBook = '<div class="book_item book_pdf">'.parent::printInfoBox().'</div>';
        return $printBook;
    }
}

class BookDoc extends Book {
    public function printInfo() {
        $printBook = '<div class="book_item book_doc">'.parent::printInfoBox().'</div>';
        return $printBook;
    }
}