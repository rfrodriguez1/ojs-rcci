<?php
/* Smarty version 3.1.39, created on 2024-03-25 15:47:14
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6601d4c244d2b5_76336207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1711323581,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6601d4c244d2b5_76336207 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</main>

		<?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
			<aside id="sidebar" class="pkp_structure_sidebar left col-xs-12 col-sm-12 col-md-3 " role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
				
			<?php if (!$_smarty_tpl->tpl_vars['currentUser']->value && $_smarty_tpl->tpl_vars['requestedPage']->value != 'login') {?>
			<form class="login" id="login" method="post" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/RCCI/login/signIn">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

				<input type="hidden" name="source" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value )) ));?>
" />
		
				<div class="form-group">
					<label for="login-username">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.username"),$_smarty_tpl ) );?>

					</label>
					<input type="text" name="username" class="form-control" id="login-username" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'user.username'),$_smarty_tpl ) );?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['username']->value ));?>
" maxlenght="32" required>
				</div>
		
				<div class="form-group">
					<label for="login-password">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.password"),$_smarty_tpl ) );?>

					</label>
					<input type="password" name="password" class="form-control" id="login-password" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'user.password'),$_smarty_tpl ) );?>
" password="true" maxlength="32" required="$passwordRequired">
				</div>
		
				<div class="form-group">
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login",'op'=>"lostPassword"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.forgotPassword"),$_smarty_tpl ) );?>

					</a>
				</div>
		
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember" id="remember" value="1" checked="$remember"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.rememberUsernameAndPassword"),$_smarty_tpl ) );?>

					</label>
				</div>
		
				<div class="buttons">
					<button type="submit" class="btn btn-primary">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login"),$_smarty_tpl ) );?>

					</button>
		
					<?php if (!$_smarty_tpl->tpl_vars['disableUserReg']->value) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "registerUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register",'source'=>$_smarty_tpl->tpl_vars['source']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<a class="btn btn-default register-button" href="<?php echo $_smarty_tpl->tpl_vars['registerUrl']->value;?>
" role="button">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registerNewAccount"),$_smarty_tpl ) );?>

						</a>
					<?php }?>
				</div>
			</form>
			<?php }?>
			
			<?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>


			<div class="pkp_block">
				<h2 class="title">Indexaciones</h2>
				<div class="columns mt-5">
					<a target="_blank" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_862.png" alt=""></a>
					<a target="_blank" href="https://scielo.sld.cu/scielo.php?script=sci_issues&pid=2227-1899&lng=es&nrm=iso"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_861.png" alt=""></a>
					<a href="https://www.latindex.unam.mx/latindex/ficha?folio=22438"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_860.png" alt=""></a>
				</div>
				<div class="columns">
					<a target="_blank" href="https://v2.sherpa.ac.uk/id/publisher/2034"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_858.png" alt=""></a>
					<a target="_blank" href="http://www.erevistas.csic.es/ficha_revista.php?oai_iden=oai_revista1151"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_857.png" alt=""></a>
					<a target="_blank" href="https://www.redalyc.org/revista.oa?id=3783"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_856.png" alt=""></a>
				</div>
				<div class="columns">
					<a target="_blank" href="https://scholar.google.com.cu/citations?user=JDt_ldMAAAAJ&hl=en"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_854.png" alt=""></a>
				</div>
			</div>

			</aside><!-- pkp_sidebar.left -->
		<?php }?>
	<?php }?>
	</div><!-- pkp_structure_content -->

	
	<div class="pkp_structure_footer_wrapper" role="contentinfo">
	<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>				
		<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

	<?php } else { ?>	
	<div class="pkp_footer_content">

		<div class="pkp_footer_links_content">
			<div class="pkp_footer_link">
				<span class="title">Licencia</span>
				
				<ul>
					<li>tema 1</li>
					<li>tema 2</li>
					<li>tema 3</li>
					<li>tema 4</li>
					<li>tema 5</li>
				</ul>
				
			</div>
			<div class="pkp_footer_link">
				<span class="title">Contacto</span>

				<ul>
					<li>
						<div class="fa fa-envelope"> </div>
						<a href="mailto:esceg@esceg.cu">esceg@esceg.cu</a>
					</li>
					
					<li>
						<div class="fa fa-phone"> </div>
						+53 7 837 2499
					</li>
					
					<li>
						<div class="fa fa-phone"> </div>
						+53 7 837 2574
					</li>
					
					<li>
						<div class="fa fa-map-marker"> </div>
						<small>Carretera a San Antonio de los Baños km 2 1/2 Rpto. Torrens. Boyeros La Habana. CUBA</small>
					</li>

				</ul>
			</div>
			<div class="pkp_footer_link">
				<span class="title">Política de Privacidad</span>
				<ul>
					<li>tema 1</li
					><li>tema 2</li
					><li>tema 3</li
					><li>tema 4</li
					><li>tema 5</li>
				</ul>
			</div>
			<div class="pkp_footer_link">
				<span class="title">Enlaces Recomendados</span>

				<ul>
					<li><a href="https://publicaciones.uci.cu/">Serie Científica</a></li>
					<li><a href="https://uci.cu">Universidad de las ciencias Informáticas</a></li>
					<li><a href="https://repositorio.uci.cu">Repositorio Institucional</a></li>
				</ul>
			</div>
		</div>
		

		<div class="pkp_footer_brand">
			<p class="pkp_footer_text">
				La <a href="https://uci.cu">Universidad de las Ciencias Informáticas</a> (UCI), a través del sello editorial <a href="http://www.uci.cu/investigacion-y-desarrollo/editorial">Ediciones Futuro</a>, publica los contenidos de la <strong>Revista Cubana de Ciencias Informáticas</strong> (RCCI) bajo licencia Creative Commons de tipo <a href="https://creativecommons.org/licenses/by/4.0/">Atribución 4.0 Internacional (CC BY 4.0)</a>. Esta licencia permite a otros distribuir, mezclar, ajustar y construir a partir de su obra, incluso con fines comerciales, siempre que le sea reconocida la autoría de la creación original. 
			</p>
			<div class="pkp_footer_images">
				<div class="pkp_footer_image">

					<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_808.png" alt="">
				</div>
				<div class="pkp_footer_image">
					<a href="https://uci.cu"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_809.png" alt=""></a>
				</div>
				<div class="pkp_footer_image">
					<a href="http://www.uci.cu/investigacion-y-desarrollo/editorial"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/img/v342_810.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="pkp_footer_copyrigth">
		<span class="pkp_footer_copy_images">
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
					<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
				  </svg>
			</div>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
					<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
				  </svg>
			</div>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
					<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
				  </svg>
			</div>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
					<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
				  </svg>
			</div>
		</span>
		<span>
			© 2023 Universidad en Ciencias Informáticas. Todos los derechos
			reservados
		</span>
	</div>
	<?php }?>
				
</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
