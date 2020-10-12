        <footer>
                <div class="pagination">
                    {if $strona !=1}
                        <a href="{$conf->action_url}Lista/1/{$szuk->name}{$wh}" class="page">|<</a>
                        <a href="{$conf->action_url}Lista/{$strona-1}/{$szuk->name}{$wh}" class="page"><<</a>
                    {/if}
                    
                    {for $i = $pierwsza to $ostatnia}
                        <a href="{$conf->action_url}Lista/{$i}/{$szuk->name}{$wh}" class="page">{$i}</a>
                    {/for}
                    
                    {if $strona !=$ostatnia} 
                        <a href="{$conf->action_url}Lista/{$strona+1}/{$szuk->name}{$wh}" class="page">>></a>
                        <a href="{$conf->action_url}Lista/{$ostatnia2}/{$szuk->name}{$wh}" class="page">>|</a>
                    {/if}


                </div>

	</footer>


                    <article>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tytuł</th>
                                        <th>Producent</th>
                                        <th><ul style="margin-left:50%">Akcja</ul></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $games as $game}
                                    <tr>
                                        <td><a href="{$conf->action_url}Detale/{$game["idGame"]}/{$game["GameName"]}">{$game["GameName"]}</a></td>
                                        <td><a href="{$conf->action_root}Detale_Prod/{$game["idGame"]}">{$game["ProducentName"]}</td></a>
                                        <td><a class="button special" href="{$conf->action_root}ListaDodaj/{$strona}/{$game["idGame"]}" style="margin-left:50%">Dodaj</a></td>
                                    </tr>
                                    {/foreach}    
                                </tbody>
                            </table>
                    </article>

                                
