<?php
/**
* 
*/
require_once("include/MVC/View/views/view.list.php");
class Cux_applyViewList extends ViewList
{
	function processSearchForm(){
        if(isset($_REQUEST['query']))
        {
            // we have a query
            if(!empty($_SERVER['HTTP_REFERER']) && preg_match('/action=EditView/', $_SERVER['HTTP_REFERER'])) { // from EditView cancel
                $this->searchForm->populateFromArray($this->storeQuery->query);
            }
            else {
                $this->searchForm->populateFromRequest();
            }

            $where_clauses = $this->searchForm->generateSearchWhere(true, $this->seed->module_dir);
            if (count($where_clauses) > 0 ){
            	//重写查询条件
                $num=0;
                foreach ($where_clauses as $key => $value) {
                    if (preg_match('/_date/', $value)) {
                        $num++;
                    }
                }
                if($num==2){
                	foreach ($where_clauses as $k => $v) {
                        if (preg_match('/apply_date,/', $v)) {
                            $where_clauses[$k]=str_replace('=', '>=',$v);
                        }else if(preg_match('/apply_date_to/', $v)){
                            $where_clauses[$k]=str_replace('=', '<',$v);
                            $where_clauses[$k]=str_replace('_to', '',$where_clauses[$k]);
                        }
                    }
                }
            	$this->where = '('. implode(' ) AND ( ', $where_clauses) . ')';
                //var_dump($this->where);
            }
            $GLOBALS['log']->info("List View Where Clause: $this->where");
        }
        if($this->use_old_search){
            switch($view) {
                case 'basic_search':
                    $this->searchForm->setup();
                    $this->searchForm->displayBasic($this->headers);
                    break;
                 case 'advanced_search':
                    $this->searchForm->setup();
                    $this->searchForm->displayAdvanced($this->headers);
                    break;
                 case 'saved_views':
                    echo $this->searchForm->displaySavedViews($this->listViewDefs, $this->lv, $this->headers);
                   break;
            }
        }else{
            echo $this->searchForm->display($this->headers);
        }
    }
}