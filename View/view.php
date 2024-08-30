<?php

class View{

    public function
        renderizador($string){
        echo "<h1>";
        echo $string;
        echo "</h1>";

    }

    public function renderiza_form_login($string){
        echo '
        <div class="row">
        <div class="col s12">Formulário de login</div>
        <div class="col s6">'.$string.'</div>
        <div class="col s6">
        <div class="row">
        <form class="col s12">
        <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">lock</i>
        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
        <label for="icon_prefix2">chave</label>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>';
    }

}

?>