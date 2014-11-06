<?php
/**
 * Created by PhpStorm.
 * User: Aile
 * Date: 5.11.14
 * Time: 14:56
 */
class calendar extends Controller {
    function index() {
        $this->posts = get_all("SELECT * FROM news");
    }
}