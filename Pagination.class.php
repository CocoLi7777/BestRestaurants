<?php
class Pagination{
   public $totalRecord=10;
   public $pageSize=5;
   public $currentPage=2;
   public $url='';


  public function __set($p,$v){
    if(property_exists($this,$p)){
       $this->p=$v;
    }
  }

  public function __get($p){
    if(property_exists($this,$p)){
       return $this->p;
    }
  }

  public function createPagination(){
    $first =1;
    $first_active=$this->currentPage==1 ? 'active' : '';
    $url = $this->url.'?page=';
    $page = <<<HTML
       <div class="pagination-wrapper">
        <ul class="pagination">
            <li class="$first_active"><a href="$url$first">First</a></li>

HTML;
    $totalPage = ceil($this->totalRecord / $this->pageSize);

    for($i=2;$i<$totalPage;$i++){
      $active=$this->currentPage==$i ? 'active' : '';
      $page .= <<<HTML
          <li class="$active"><a href="$url$i">$i</a></li>
HTML;
    }
    $last_active=$this->currentPage==$totalPage ? 'active' : '';
    $page .= <<<HTML
      <li class="$last_active" ><a href="$url$totalPage">Last</a></li>
  </ul></div>
HTML;
     return $page;

  }



}

 ?>
