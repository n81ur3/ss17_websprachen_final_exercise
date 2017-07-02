<?php
/**
 * Created by: bierbaumer
 * Date: 6/27/17
 * Time: 9:54 PM
 */

if (!defined("BIERBAUMER")) {
    die("Access forbidden");
}

?>

<h1>JavaScript Feature</h1>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-brand">Please pick a color</div>
        <div class="btn-group">
            <select id="colorselection" onchange="switchBackground(this.value);">
                <option value="green">Green</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
            </select>
        </div>
    </div>
</nav>
<div id="image_container">
    <img src="images/question_mark.jpg" id="color_image"/>
</div>
