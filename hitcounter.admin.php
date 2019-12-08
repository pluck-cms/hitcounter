<?php
//Make sure the file isn't accessed directly.
defined('IN_PLUCK') or exit('Access denied!');

require_once 'data/modules/hitcounter/functions.php';

	function hitcounter_pages_admin() {
		global $lang;
		$module_page_admin[] = array(
			'func'  => 'hitcounter_admin',
			'title' => $lang['hitcounter']['title']
		);

		return $module_page_admin;
	}
 
	function hitcounter_page_admin_hitcounter_admin() {
			global $cont1, $lang;
	?>
		<p>
			<strong><?php echo $lang['hitcounter']['manage']; ?></strong>
		</p>
		<br />
			<label class="kop2" for="cont1"><?php echo $lang['hitcounter']['write_word']; ?></label>
			<form method="post" action="">
				<span class="kop4"><?php echo $lang['hitcounter']['write_word_info']; ?></span><br />
				<input name="cont1" id="cont1" type="text" value="<?php echo hitcounter_word(); ?>" />
				<input type="submit" name="submit" value="<?php echo $lang['general']['save']; ?>" />
			</form>
		<?php
		//When form is submitted.
		if (isset($_POST['submit'])) {
				//Sanitize  data for saving.
				$cont1 = trim($cont1);
				$cont1 = sanitize($cont1);
				
				//Create word file.
				save_hitcounter_word($cont1);

				redirect('?module', 0);
		}
	?>
		<p>
			<a href="?action=modules">&lt;&lt;&lt; <?php echo $lang['general']['back']; ?></a>
		</p>
	<?php
	}
?>
