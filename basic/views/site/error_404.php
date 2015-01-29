<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>


<div class="row block-404">
    <div class="span8">
        <img src="img/404.png" alt="">
    </div>
    <div class="span4">
        <h1>Sorry!</h1>
        <h4>404 page not found</h4>
        <p class="p3">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        Please try using our search box below to look for information on the website
        <form id="form-search" action="search.php" method="GET" accept-charset="utf-8" class="form-404">
            <div class="clearfix">
                <input type="text" name="s" onblur="if (this.value == '')
                                this.value = ''" onfocus="if (this.value == '')
                                            this.value = ''">
                <a href="#" onclick="document.getElementById('form-search').submit()" class="btn btn_ btn-small_">search</a>
            </div>
        </form>
    </div>  
</div>