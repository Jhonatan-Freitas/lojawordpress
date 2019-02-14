<?php
/*
Plugin Name: my-plugin
Plugin URI: http://exemplo.org/my-plugin
Description: Um plugin de fommulário didático, use shortcode [formulario] 
Version: 1.0
Autor: Jhonatan Freitas
Author URI: bitscore.com
License: GPLv2
*/

function example_like(){
    return "Hello World";
}
add_shortcode("like","example_like");


function form(){
    echo '
        <form method="post" action="'.plugins_url('admin-post.php',__FILE__).'">
            <div>
                <label>E-mail</label>
                <input name="email" type="email" size="20">
            </div>
            
            <div>
                <label>Assunto</label>
                <input type="text" name="assunto" size="20">
            </div>
            
            <div>
                <label>Mensagem</label>
                <textarea name="mensagem" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-info">Submit</button>
        </form>';
    }
    add_shortcode("formulario","form");

?>