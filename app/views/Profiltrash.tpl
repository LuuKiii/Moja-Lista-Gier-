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
            <li><a href="Glowna">Główna</a></li>
            <li><a href="Lista">Lista Gier</a></li>
            <li class="active"><a href="profil">Moja Lista Gier</a></li>
            {if core\RoleUtils::inRole("Admin")}
            <li><a href="DodajMenu">Dodaj Pozycję</a></li>
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


    <!-- Posts -->
    <h2>Ulubione</h2>
            <section class="">
                    <article>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tytuł</th>
                                        <th>Producent</th>
                                        <th>Ocena</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   {foreach $games as $game}
                                    <tr>
                                        <td><a href="{$conf->action_url}Detale/{$game["idGame"]}/{$game["GameName"]}">{$game["GameName"]}</a></td>
                                    </tr>
                                   {/foreach} 

                                </tbody>
                            </table>
                    </article>

            </section>

   <h2>Wszystkie</h2>
            <section class="">
                    <article>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tytuł</th>
                                        <th>Wszystkie</th>
                                        <th>Ocena</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    {foreach $games as $game}
                                    <tr>
                                        <td><a href="{$conf->action_url}Detale/{$game["idGame"]}/{$game["GameName"]}">{$game["GameName"]}</a></td>
                                        <td><a href="{$conf->action_root}Detale_Prod/{$game["idGame"]}">{$game["ProducentName"]}</td></a>
                                        <td><a class="button special" href="{$conf->action_root}ListaDodaj/1/{$game["idGame"]}" style="margin-left:50%">Dodaj</a></td>
                                    </tr>
                                    {/foreach}    

                                </tbody>
                            </table>
                    </article>

            </section>
                                    
                                    
                                    
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