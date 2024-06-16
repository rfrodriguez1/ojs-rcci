{**
 * lib/pkp/templates/frontend/components/header.tpl
 *
 * Copyright (c) 2014-2023 Simon Fraser University Library
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Common frontend site header.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

{* Determine whether a logo or title string is being displayed *}
{assign var="showingLogo" value=true}
{if $displayPageHeaderTitle && !$displayPageHeaderLogo && is_string($displayPageHeaderTitle)}
	{assign var="showingLogo" value=false}
{/if}

<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{capture assign="pageTitleTranslated"}{translate key=$pageTitle}{/capture}{/if}
{include file="frontend/components/headerHead.tpl"}

<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo} has_site_logo{/if}">
	<div class="pkp_structure_page">
		<nav id="accessibility-nav" class="sr-only" role="navigation" aria-label="{translate|escape key="plugins.themes.bootstrap3.accessible_menu.label"}">
			<ul>
			  <li><a href="#main-navigation">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.main_navigation"}</a></li>
			  <li><a href="#main-content">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.main_content"}</a></li>
			  <li><a href="#sidebar">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.sidebar"}</a></li>
			</ul>
		</nav>

		{* Header *}
		<header class="navbar navbar-default" id="headerNavigationContainer" role="banner">
			<!--Header Top-->
			{capture assign="secundaryMenu"}
				{load_menu name="secundary" id="main-navigation" ulClass="nav navbar-nav"}
			{/capture}
			<div class="container-fluid topHeader">
                <div class="topnavLogo hidden-xs col-sm-5">
                  <div class="socialBread">
					  {$secundaryMenu}
                  </div>
                </div>
                <div class="col-xs-12 col-sm-7" id="topMenuRight">
                    <nav aria-label="{translate|escape key="common.navigation.user"}">
                        {load_menu name="user" id="navigationUser" ulClass="nav nav-pills menu tab-list pull-right"}
                    </nav>

					<ul class="nav nav-pills menu tab-list pull-right">
						<li class="newDropDown languages" aria-haspopup="true" aria-expanded="false">
							<ul class="list-group list-group-horizontal">
								<li class="list-group-item pe-0 ps-0"><span class="fa fa-globe"></span></li>
								{if $currentLocale == 'es_ES'}
									<li class="list-group-item activeLanguage">Español</li>
								{else}
									<li class="list-group-item inactiveLanguage">
										<a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="setLocale" path='es_ES' source=$smarty.server.REQUEST_URI}">Español</a>
									</li>
								{/if}
								<li class="list-group-item pe-0 ps-0">|</li>
								{if $currentLocale == 'en_US'}
									<li class="list-group-item activeLanguage">English</li>
								{else}
									<li class="list-group-item inactiveLanguage">
										<a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="setLocale" path='en_US' source=$smarty.server.REQUEST_URI}">English</a>
									</li>
								{/if}
							</ul>
						</li>
					</ul>
                  <div class="clearfix"></div>
                </div><!-- .row -->
            </div><!-- .container-fluid -->
			<div class="homepage-image">
				{if $homepageImage}
					<img class="img-responsive" src="{$publicFilesDir}/{$homepageImage['uploadName']}" alt="{$homepageImageAltText|escape}">
				{else} 
					<img class="img-responsive" src="{$baseDir}/homepageImage_es_ES.gif" alt="{$homepageImageAltText|escape}">
				{/if}
			</div>

			<div class="container-fluid p-0">
				<div class="navbar-header">
					<div class="socialBread col-xs-9 hidden-sm hidden-md hidden-lg">
						{$secundaryMenu}
					</div>
					{* Mobile hamburger menu *}
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false" aria-controls="nav-menu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				{* Primary site navigation *}
				{capture assign="primaryMenu"}
					{load_menu name="primary" id="main-navigation" ulClass="nav navbar-nav"}
				{/capture}

				{if !empty(trim($primaryMenu)) || $currentContext}
					<div class="row">
						<nav id="nav-menu" class="navbar-collapse collapse" aria-label="{translate|escape key="common.navigation.site"}">
							{* Primary navigation menu for current application *}
							{$primaryMenu}
							
						</nav>
					</div>
				{/if}
			</div><!-- .pkp_head_wrapper -->
		</header><!-- .pkp_structure_head -->

		{* Wrapper for page content and sidebars *}
		<div class="pkp_structure_content container-fluid">
			<main class="pkp_structure_main col-xs-12 col-sm-12 col-md-9" role="main">
