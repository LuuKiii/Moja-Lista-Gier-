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
                {if count($conf->roles)>0}
                    <li><a href="Profil">Moja Lista Gier</a></li>
                    {/if}	
                    {if core\RoleUtils::inRole("Admin")}
                        <li class="active"><a href="{$conf->action_root}DodajMenu">Dodaj Pozycję</a></li>
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

<section>
    
                <form method="post" action="{$conf->action_root}Dodaj">
                        <div class="fields">

                                <div class="field">
                                        <label for="GameName">Nazwa Gry</label>
                                        <input type="text" name="GameName" id="GameName" />
                                </div>
                                <div class="field">
                                        <label for="Premiere">Premiera [rrrr-mm-dd]</label>
                                        <input type="text" name="Premiere" id="Premiere" />
                                </div>
                                <div class="field">
                                        <label for="Description">Opis</label>
                                        <textarea type="text" name="Description" id="Description" rows="6" ></textarea>
                                </div>

                                <div class="field">
                                        <label for="Image">Nazwa Obrazka</label>
                                        <input type="text" name="Image" id="Image" />
                                </div>
                                <div class="field">
                                    <label for="ProducentName">Producent</label>
                                        <select  name="ProducentName" id="ProducentName" >
                                            <option value="">-Producent-</option>
                                            {foreach $prod as $p name=foo}
                                                <option value="{$p["idProducent"]}">{$p["ProducentName"]}</option>
                                            {/foreach}
                                        </select>
                                </div>

                        </div>
                        <ul class="actions">
                                <li><input type="submit" value="Dodaj" /></li>

                        </ul>

                        <ul class="actions">
                            <li><a href="DodajMenu">Powrót</a></li>
                        </ul>


                    {if $msgs->isMessage()}
                        <div class="messages bottom-margin">
                        <ul>
                        {foreach $msgs->getMessages() as $msg}
                        {strip}
                        <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
                        {/strip}
                        {/foreach}
                        {/if} 
   </ul>
</div>
   

                </form>


        </section>

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