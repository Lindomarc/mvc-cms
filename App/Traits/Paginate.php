<?php
namespace App\Traits;

trait Paginate
{
    protected $perPage;
    private $totalRegisters;

    /**
     * quantidade de links na lista numerica 
     */  
    private $maxLinks = 10;

    private function currentPage(){
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
        return $page ?? 1;
    }

    private function offset(){
        return ($this->currentPage() * $this->perPage) - $this->perPage;
    }

    private function totalRegisters(){

        $bind = $this->pdoStatement;
        $bind->execute();
        return $bind->rowCount();

    }

    private function totalPages(){
        return ceil($this->totalRegisters() / $this->perPage);
    }

    protected function sqlPaginate(){
        
        return " limit {$this->perPage} offset {$this->offset()} ";
    }
    private function link(){
        $url = new \App\Classes\Url;
        $link = "?page=";
        // localhost:8888/node?page=
        return $url->getUrl().$link;
    }

    // << 1 2 3 4 5 >>
    private function preview(){
        $links = '';
        if($this->currentPage() != 1){
            $preview = ($this->currentPage() - 1);
            $links .= '<li class="page-item"><a class="page-link" href="'.$this->link().'1">[1]</a><li>';
            $links .= '<li class="page-item"><a class="page-link" href="'.$this->link().$preview.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
        }
    }

    private function next(){
        $links = '';
        if($this->currentPage() != $this->totalPages()){
            $next = ($this->currentPage() - 1);
            $links .= '<li class="page-item"><a class="page-link" href="'.$this->link().$next.'" arial-label="Next"><span aria-hidden="true">&raquo</span></a></li>';
            $links .= '<li class="page-item"><a class="page-link" href="'.$this->totalPages().'"> ['.$this->totalPages().'] </a></li>';
        }
    }

    private function showLinks($i){
        $class = ($i == $this->currentPage())? "actual" :"";
        if($i > 0 && $i <= $this->totalPages()){
            return '<li class="page-item"><a class="page-link '.$class.'" href="'.$this->link().$i.'">'.$i.'<a/></li>';
        }
    }

    public function links(){
 
        if($this->totalPages() > 0){

            $links = '<ul class="pagination">';
            $links .= $this->preview();
            
            for($i = $this->currentPage() -  $this->maxLinks;  $i <= $this->currentPage() + $this->maxLinks; $i++){
                $links .= $this->showLinks($i);
            }

            $links .= $this->next();
            $links .= '</ul>';

            return $links;
        }

    }

}