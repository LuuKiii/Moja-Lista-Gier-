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
                        </ul>
                </nav>

        <!-- Main -->
                <div id="main">


                        <!-- Posts -->
                                <section class="">

                                        <article>
                                                <header>                                                        
                                                        <h2>{$games[0]["ProducentName"]}</h2>
                                                        <h3>Siedziba : {$games[0]["Local"]} </h3>

                                                </header>
                                        </article>
                                    <p>{$games[0]["DescriptProd"]}</p>

                                 
                        <h3>Wyprodukowane gry</h3>
                               
                                        <article>
                                            {foreach $game as $p}
                                                <header>
                                                        <h2><a href="{$conf->action_url}Detale/{$p["idGame"]}/{$p["GameName"]}">{$p["GameName"]}<br /></a></h2>
                                                </header>
                                            {/foreach}
                                        </article>


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