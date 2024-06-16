{**
 * templates/frontend/components/navigationMenu.tpl
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Primary navigation menu list for OJS
 *
 * @uses navigationMenu array Hierarchical array of navigation menu item assignments
 * @uses id string Element ID to assign the outer <ul>
 * @uses ulClass string Class name(s) to assign the outer <ul>
 * @uses liClass string Class name(s) to assign all <li> elements
 *}


{if $navigationMenu}
	{if $navigationMenu->_data['areaName'] != 'secundary'}
		<ul id="{$id|escape}" class="{$ulClass|escape}">
			{foreach key=field item=navigationMenuItemAssignment from=$navigationMenu->menuTree}
				{if !$navigationMenuItemAssignment->navigationMenuItem->getIsDisplayed()}
					{continue}
				{/if}
				{assign var="hasChildren" value=false}
				{if !empty($navigationMenuItemAssignment->children)}
					{assign var="hasChildren" value=true}
				{/if}
				<li class="{$liClass|escape} menu-item-{$navigationMenuItemAssignment->getMenuItemId()}{if $hasChildren} dropdown{/if}">
					<a href="{$navigationMenuItemAssignment->navigationMenuItem->getUrl()}"{if $hasChildren} class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"{/if}>
						{if $navigationMenu->_data['areaName'] != 'primary'}
							{assign var="title" value=$navigationMenuItemAssignment->navigationMenuItem->getLocalizedTitle()|explode:"<"}
							<i class="fa fa-{$title[0]|lower}"></i>
						{/if}
						{$navigationMenuItemAssignment->navigationMenuItem->getLocalizedTitle()}
						{if $hasChildren}
							<span class="caret"></span>
						{/if}
					</a>
					{if !empty($navigationMenuItemAssignment->children)}
						<ul class="dropdown-menu {if $id === 'navigationUser'}dropdown-menu-right{/if}">
							{foreach key=childField item=childNavigationMenuItemAssignment from=$navigationMenuItemAssignment->children}
								{if $childNavigationMenuItemAssignment->navigationMenuItem->getIsDisplayed()}
									<li class="{$liClass|escape} menu-item-{$childNavigationMenuItemAssignment->getMenuItemId()}">
										<a href="{$childNavigationMenuItemAssignment->navigationMenuItem->getUrl()}">
											{$childNavigationMenuItemAssignment->navigationMenuItem->getLocalizedTitle()}
										</a>
									</li>
								{/if}
							{/foreach}
						</ul>
					{/if}
				</li>
			{/foreach}
		</ul>
	{else}
		<ul id="main-{$navigationMenu->_data['areaName']}" class="{$ulClass|escape}">
			{foreach key=field item=navigationMenuItemAssignment from=$navigationMenu->menuTree}
				{if !$navigationMenuItemAssignment->navigationMenuItem->getIsDisplayed()}
					{continue}
				{/if}
				{assign var="hasChildren" value=false}
				{if !empty($navigationMenuItemAssignment->children)}
					{assign var="hasChildren" value=true}
				{/if}
				<li class="{$liClass|escape} menu-item-{$navigationMenuItemAssignment->getMenuItemId()}{if $hasChildren} dropdown{/if}">
					<a href="{$navigationMenuItemAssignment->navigationMenuItem->getUrl()}"{if $hasChildren} class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"{/if} target="_blank">
						<i class="fa fa-{$navigationMenuItemAssignment->navigationMenuItem->getLocalizedTitle()|lower}"></i>
					</a>
				</li>
			{/foreach}
		</ul>
	{/if}
{/if}
