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
    <li  class="active"><a href="{$conf->action_root}Lista">Lista Gier</a></li>
    {if count($conf->roles)>0}
        <li><a href="{$conf->action_root}Profil">Moja Lista Gier</a></li>
    {/if}	
    {if core\RoleUtils::inRole("Admin")}
        <li><a href="{$conf->action_root}DodajMenu">Dodaj Pozycję</a></li>
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
</nav>

<!-- Main -->
<div id="main">

    <footer>
                 <form id="search" onclick="ajaxPostForm('search','{$conf->action_root}ListaTab','tablica');return false;"  >
                        <div class="field">
                            <input type="text" name="name" id="name" placeholder="{$szuk->name}" value="{$szuk->name}" />
			</div>
  
                        
                        <ul></ul>
                        
                                              
                        <ul class="actions">
                            <input type="submit" style="margin-left:2%" value="Wyszukaj" />
                        </ul>
                        
                 </form>
                        
    </footer>

    <!-- Posts -->
            <section class="" id="tablica">
                {include file="ListaTab.tpl"}
            </section>

    <!-- Footer -->

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