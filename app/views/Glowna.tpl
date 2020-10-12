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
    <li class="active"><a href="Glowna">Główna</a></li>
    <li><a href="Lista">Lista Gier</a></li>
    {if count($conf->roles)>0}
        <li><a href="Profil">Moja Lista Gier</a></li>
    {/if}	
    {if core\RoleUtils::inRole("Admin")}
        <li><a href="DodajMenu">Dodaj Pozycję</a></li>
    {/if}	
</ul>
<ul class="icons">
    <li><a href="https://twitter.com/home" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
    <li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
    
    {if count($conf->roles)<=0}
        <li><a href="{$conf->action_root}Login">Zaloguj się</a></li>
    {else}	
        <li><a href="{$conf->action_root}Logout">Wyloguj się</a></li>
    {/if}
    
    {if core\RoleUtils::inRole("Admin")}
        <li>(Administrator)</li>
    {/if}
</ul>
</nav>

<!-- Main -->
<div id="main">
    


<!-- Featured Post -->

<!-- Posts -->
    <section class="posts">
        {foreach $games as $game}
            <article>
                    <header>
                            <span class="date">{$game["Premiere"]}</span>
                            <h2><a href="{$conf->action_url}Detale/{$game["idGame"]}/{$game["GameName"]}">{$game["GameName"]}</a></h2>
                        <h5><a href="{$conf->action_root}Detale_Prod/{$game["idGame"]}">{$game["ProducentName"]}</a></h5>
                    </header>
                    <a href="{$conf->action_url}Detale/{$game["idGame"]}/{$game["GameName"]}" class="image fit"><img src="{$conf->action_url}images/{$game["Image"]}.jpg" alt="" /></a>
                    <ul class="actions special">
                            <li><a href="{$conf->action_url}Detale/{$game["idGame"]}/{$game["GameName"]}" class="button large">Szczegóły</a></li>
                    </ul>
            </article>
        {/foreach}
        
        
        

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

    </section>

<!-- Footer -->

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