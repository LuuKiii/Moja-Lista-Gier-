<!DOCTYPE HTML>
{extends file="main.tpl"}


{block name=content}


<body class="is-preload">

<!-- Wrapper -->


    <ul>						
            <br/>
            <br/>
    </ul>



<!-- Nav -->
<nav id="nav">
    <ul class="links">
            <li><a href="{$conf->action_root}Glowna">Główna</a></li>
            <li><a href="{$conf->action_root}Lista">Lista Gier</a></li>
            <li class="active"><a href="{$conf->action_root}Profil">Moja Lista Gier</a></li>
            {if core\RoleUtils::inRole("Admin")}
            <li><a href="{$conf->action_root}DodajMenu">Dodaj Pozycję</a></li>
            {/if}	

    </ul>
    <ul class="icons">
            <li><a href="https://twitter.com/home" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="{$conf->action_root}Logout">Wyloguj się</a></li>
            
            {if core\RoleUtils::inRole("Admin")}
            <li>(Administrator)</li>
            {/if}
    </ul>
</nav>

<!-- Main -->
<div id="main">
    <label for="">{$game[0]["GameName"]}</label>
    
    <form method="post" action="{$conf->action_root}Edytuj2/{$game[0]["idGame"]}">
    <div class="col-12">
       <label for="Mark">Ocena</label>
        <select  name="Mark" id="Mark">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
    
     <label for="IsFavourite"></label>
    <div class="col-6 col-12-small">
       <label for="Favo">Czy Dodać do Ulubionych</label>
        <select  name="IsFavourite" id="IsFavourite">
            <option value="0">Nie</option>
            <option value="1">Tak</option>
        </select>
    </div>
     
    <label for=""></label>
    
    <ul class="actions">
                      <input type="submit" style="margin-left:2%" value="Zatwierdź" />
    </ul>
    </form> 
    
    <ul class="actions">
    <li><a href="{$conf->action_root}Profil">Powrót</a></li>
    </ul>
                                    
{if $msgs->isMessage()}
<div class="messages bottom-margin">
<ul>
{foreach $msgs->getMessages() as $msg}
{strip}
<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
{/strip}
{/foreach}
</ul>
</div>
{/if}                                
                     

</div>

<!-- Copyright -->
<div id="copyright">
    <ul><li>&copy; Moja lista gier</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>

{/block}