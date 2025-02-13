<?php

/**
 * @file plugins/themes/default/BootstrapThreeThemePlugin.inc.php
 *
 * Copyright (c) 2014-2023 Simon Fraser University Library
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class BootstrapThreeThemePlugin
 * @ingroup plugins_themes_bootstrap3
 *
 * @brief Default theme
 */

use PKP\components\forms\FieldUploadImage;

import('lib.pkp.classes.plugins.ThemePlugin');
import('lib.pkp.classes.plugins.BlockPlugin');

class BootstrapThreeThemePlugin extends ThemePlugin {
	/**
	 * Initialize the theme
	 *
	 * @return null
	 */
	public function init() {

		// Register option for bootstrap themes
		$this->addOption('bootstrapTheme', 'FieldOptions', [
			'type' => 'radio',
			'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.label'),
			'description' => __('plugins.themes.bootstrap3.options.bootstrapTheme.description'),
			'options' => [
				[
					'value' => 'bootstrap3',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.bootstrap3'),
				],
				[
					'value' => 'cerulean',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.cerulean'),
				],
				[
					'value' => 'cleanblog',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.cleanblog'),
				],
				[
					'value' => 'cosmo',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.cosmo'),
				],
				[
					'value' => 'cyborg',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.cyborg'),
				],
				[
					'value' => 'darkly',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.darkly'),
				],
				[
					'value' => 'flatly',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.flatly'),
				],
				[
					'value' => 'journal',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.journal'),
				],
				[
					'value' => 'lumen',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.lumen'),
				],
				[
					'value' => 'paper',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.paper'),
				],
				[
					'value' => 'readable',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.readable'),
				],
				[
					'value' => 'sandstone',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.sandstone'),
				],
				[
					'value' => 'simplex',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.simplex'),
				],
				[
					'value' => 'slate',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.slate'),
				],
				[
					'value' => 'spacelab',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.spacelab'),
				],
				[
					'value' => 'superhero',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.superhero'),
				],
				[
					'value' => 'united',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.united'),
				],
				[
					'value' => 'yeti',
					'label' => __('plugins.themes.bootstrap3.options.bootstrapTheme.yeti'),
				],
			],
		]);

		// Determine the path to the glyphicons font in Bootstrap
		$iconFontPath = Application::get()->getRequest()->getBaseUrl() . '/' . $this->getPluginPath() . '/bootstrap/fonts/';

		$bootstrapTheme = $this->getOption('bootstrapTheme');
		if (empty($bootstrapTheme) || $bootstrapTheme === 'bootstrap3') {
			$this->addStyle('bootstrap', 'styles/bootstrap.less');

			$this->modifyStyle('bootstrap', ['addLessVariables' => '@icon-font-path:"' . $iconFontPath . '";']);
		} else {
			$this->addStyle('bootstrapTheme-' . $bootstrapTheme, 'styles/' . $bootstrapTheme . '.less');
			$this->modifyStyle('bootstrapTheme-' . $bootstrapTheme, ['addLessVariables' => '@icon-font-path:"' . $iconFontPath . '";']);
		}
        $this->addStyle('rc-style-awesome', 'templates/app/fontawesome/font-awesome/css/font-awesome.min.css');
        $this->addStyle('rc-style-all', 'templates/app/all.css');
        $this->addStyle('rc-style', 'templates/app/style.css');

		$locale = AppLocale::getLocale();
		if (AppLocale::getLocaleDirection($locale) === 'rtl') {
			$this->addStyle('bootstrap-rtl', 'styles/bootstrap-rtl.min.css');
		}

		// Load jQuery from a CDN or, if CDNs are disabled, from a local copy.
		$min = Config::getVar('general', 'enable_minified') ? '.min' : '';
		$request = Application::get()->getRequest();
		// Use an empty `baseUrl` argument to prevent the theme from looking for
		// the files within the theme directory
		$jquery = $request->getBaseUrl() . '/lib/pkp/lib/vendor/components/jquery/jquery' . $min . '.js';
		$jqueryUI = $request->getBaseUrl() . '/lib/pkp/lib/vendor/components/jqueryui/jquery-ui' . $min . '.js';

		$this->addScript('jQuery', $jquery, array('baseUrl' => ''));
		$this->addScript('jQueryUI', $jqueryUI, array('baseUrl' => ''));
		$this->addScript('jQueryTagIt', $request->getBaseUrl() . '/lib/pkp/js/lib/jquery/plugins/jquery.tag-it.js', array('baseUrl' => ''));


		// Load Bootstrap
		$this->addScript('bootstrap', 'bootstrap/js/bootstrap.min.js');
		$this->addScript('rc', '/templates/app/rc.js');

		// Add navigation menu aereas for this thme
		$this->addMenuArea(array('primary', 'user'));
		$this->addMenuArea(array('secundary', 'user'));
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return __('plugins.themes.bootstrap3.name');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return __('plugins.themes.bootstrap3.description');
	}

}



