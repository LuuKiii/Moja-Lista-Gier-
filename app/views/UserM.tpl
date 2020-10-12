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
            <li ><a href="{$conf->action_root}Profil">Moja Lista Gier</a></li>
            {if core\RoleUtils::inRole("Admin")}
            <li class="active"><a  href="{$conf->action_root}DodajMenu">Dodaj Pozycję</a></li>
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
    <h2>Użytkownicy</h2>
            <section class="">
                    <article>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Login</th>
                                        <th>Email</th>
                                        <th>Rola</th>
                                        <th><ul style="margin-left:40%">Akcja</ul></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   {foreach $user as $u}
                                       {if $u['idUser'] != $idUse} 
                                   <tr>
                                        <td>{$u["Login"]}</td>
                                        <td>{$u["Email"]}</td>
                                        <th>{$u["Role"]}</th>
                                             <td><form method="post" action="{$conf->action_root}UserMRola/{$u["idUser"]}">                                     
                                                <select name="Role" id="Role">
                                                    <option value="user">użytkownik</option>
                                                    <option value="Admin">Admin</option>
                                                </select>
                                            <input type="submit" value="Zmień Rolę" class="button special" style="margin-left:25%"/>
                                            </form></td>
                                    </tr>
                                    {/if}
                                   {/foreach} 

                                </tbody>
                            </table>
                    </article>

            </section>
                         
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