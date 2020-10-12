<!DOCTYPE HTML>
{extends file="main.tpl"}


{block name=content}

<body class="is-preload">

		<!-- Wrapper -->
				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="{$conf->action_root}RegisterSave">
								<div class="fields">

									<div class="field">
										<label for="Email">Email</label>
										<input type="text" name="Email" id="Email" />
									</div>
                                                                    	<div class="field">
										<label for="Login">Nazwa użytkownika</label>
										<input type="text" name="Login" id="Login" />
									</div>
                                                                    	<div class="field">
										<label for="Pass">Hasło</label>
										<input type="text" name="Pass" id="Pass" />
									</div>

								</div>
								<ul class="actions">
									<li><input type="submit" value="Zarejestruj się" /></li>
                                                                        
								</ul>
                                                                
                                                            	<ul class="actions">
                                                                    <li><a href="Glowna">Powrót</a></li>
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
                                                            
							</form>
                                                    
                                                    
						</section>
                                                

					</footer>

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