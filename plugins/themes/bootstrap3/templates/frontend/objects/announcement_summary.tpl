{**
 * templates/frontend/objects/announcement_summary.tpl
 *
 * Copyright (c) 2014-2023 Simon Fraser University Library
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a summary view of an announcement
 *
 * @uses $announcement Announcement The announcement to display
 *}
<article class="announcement-summary media">
	<div class="media-body">
		<h2 class="media-heading">
			<a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}">
				{$announcement->getLocalizedTitle()|escape}
			</a>
		</h2>
		<p class="date">
			<span class="fa fa-calendar"></span>
			{$announcement->getDatePosted()|escape}
		</p>
		{$announcement->getLocalizedDescriptionShort()|strip_unsafe_html}
	</div>
</article><!-- .announcement-summary -->
