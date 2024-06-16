{**
 * templates/frontend/pages/indexJournal.tpl
 *
 * UPDATED/CHANGED/MODIFIED: Marc Behiels - marc@elemental.ca - 250416
 *
 * Copyright (c) 2014-2023 Simon Fraser University Library
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the index page for a journal
 *
 * @uses $currentJournal Journal This journal
 * @uses $journalDescription string Journal description from HTML text editor
 * @uses $homepageImage object Image to be displayed on the homepage
 * @uses $additionalHomeContent string Arbitrary input from HTML text editor
 * @uses $announcements array List of announcements
 * @uses $numAnnouncementsHomepage int Number of announcements to display on the
 *       homepage
 * @uses $issue Issue Current issue
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}

<div id="main-content" class="page_index_journal">

	{call_hook name="Templates::Index::journal"}
	{if $numAnnouncementsHomepage && $announcements|count}
		{assign var="class" value="col-md-6"}
	{else}
{*		{assign var="class" value="col-md-10"}*}
		{* {assign var="sectionClass" value="col-sm-11 col-md-10 col-lg-8 pe-0 ps-0"} *}
		{assign var="sectionClass" value=""}
	{/if}
	<div id="section-journalNum" class="section-journalNum pull-left {$sectionClass}">
		{if $journalDescription}
			<div class="infojrnl col-xs-12 {$class}" style="background: #89bbde;">
				<div class="highlightBar">
					<h2>REVISTA CUBANA DE CIENCIAS INFORMÁTICAS</h2>
					<div class="journal-description">
						{$journalDescription}<br>
							<a href="{$baseUrl}/index.php/RCCI/about">{translate key="about.read"}</a>
						</div>
				</div>
			</div>
		{/if}

		{* Additional Homepage Content *}
		{if $additionalHomeContent}
			<div class="additional_content">
				{$additionalHomeContent}
			</div>
		{/if}

		{* Announcements *}
		{if $numAnnouncementsHomepage && $announcements|count}
			<section class="cmp_announcements col-xs-12 {$class}">
{*				<h2>*}
{*					{translate key="announcement.announcements"}*}
{*				</h2>*}
				<div id="carousel-announcements-generic" class="carousel slide carousel-fade" data-ride="carousel">
					<!-- Indicators -->
					{if $announcements|count > 1}
						<ol class="carousel-indicators">
							{foreach name=announcements from=$announcements item=announcement}
								{if $smarty.foreach.announcements.iteration == 1}
									<li data-target="#carousel-announcements-generic" data-slide-to="{$smarty.foreach.announcements.iteration}" class="active"></li>
								{else}
									<li data-target="#carousel-announcements-generic" data-slide-to="{$smarty.foreach.announcements.iteration}"></li>
								{/if}
							{/foreach}
						</ol>
					{/if}
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						{foreach name=announcements from=$announcements item=announcement}
							{if $smarty.foreach.announcements.iteration > $numAnnouncementsHomepage}
								{break}
							{/if}
							{if $smarty.foreach.announcements.iteration == 1}
								<div class="item active">
							{else}
								<div class="item">
							{/if}
								<div class="carousel-caption">
									<h2 class="media-heading">
										{$announcement->getLocalizedTitle()|escape}
									</h2>
{*									{assign var="fechaSeparada" value="{$announcement->getDatePosted()|escape|date_format:"%d-%B-%Y"}"}*}
{*									{assign var="formatFecha" value="{$fechaSeparada|explode:"-"}"}*}
{*									{$fechaSeparada}*}
									{$announcement->getDatePosted()}
									{$announcement->getLocalizedDescriptionShort()|strip_unsafe_html}
									<a class="galley-link btn btn-primary pdf" role="button" href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}">
										{translate key="about.read"}
									</a>
								</div>
							</div>
						{/foreach}
					</div>
				</div>
			</section>
		{/if}
	</div>
	<div class="clearfix"></div>

	{* Latest issue *}
	{if $issue}
		<section class="current_issue">
			<header class="page-header">
				<h2>
					{translate key="journal.currentIssue"}
				</h2>
			</header>
			<p class="current_issue_title lead">
				{$issue->getIssueIdentification()|strip_unsafe_html}
			</p>
			{include file="frontend/objects/issue_toc.tpl"}
			<a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="btn btn-primary read-more">
				{translate key="journal.viewAllIssues"}
				<span class="fa fa-chevron-right"></span>
			</a>
		</section>
	{/if}

	
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
