{**
* templates/frontend/pages/userRegister.tpl
*
* Copyright (c) 2014-2023 Simon Fraser University Library
* Copyright (c) 2003-2023 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* User registration form.
*}
{include file="frontend/components/header.tpl" pageTitle="user.register"}

<div id="main-content" class="page page_register">
	<div class="page_register_content">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.register"}

	<form class="pkp_form register" id="register" method="post" action="{url op="register"}">
		{csrf}

		{if $source}
			<input type="hidden" name="source" value="{$source|escape}" />
		{/if}

		<h2>
			{translate key="user.register"}
		</h2>

		{include file="common/formErrors.tpl"}

		<div class="register_form">
		{include file="frontend/components/registrationForm.tpl"}
		</div>
		{* When a user is registering with a specific journal *}
		{if $currentContext}

			<fieldset class="consent">
				{if $currentContext->getSetting('privacyStatement')}
				{* Require the user to agree to the terms of the privacy policy *}
					<div class="form-group optin optin-privacy">
						<label>
							<input type="checkbox" name="privacyConsent" value="1"{if $privacyConsent} checked="checked"{/if}>
							{capture assign="privacyUrl"}{url router=$smarty.const.ROUTE_PAGE page="about" op="privacy"}{/capture}
							{translate key="user.register.form.privacyConsent" privacyUrl=$privacyUrl}
						</label>
					</div>
				{/if}
				{* Ask the user to opt into public email notifications *}
				<div class="form-group optin optin-email">
					<label>
						<input type="checkbox" name="emailConsent" value="1"{if $emailConsent} checked="checked"{/if}>
						{translate key="user.register.form.emailConsent"}
					</label>
				</div>
			</fieldset>

			{* Allow the user to sign up as a reviewer *}
			{assign var=contextId value=$currentContext->getId()}
			{assign var=userCanRegisterReviewer value=0}
			{foreach from=$reviewerUserGroups[$contextId] item=userGroup}
				{if $userGroup->getPermitSelfRegistration()}
					{assign var=userCanRegisterReviewer value=$userCanRegisterReviewer+1}
				{/if}
			{/foreach}
			{if $userCanRegisterReviewer}
				<fieldset class="reviewer">
					<legend>
						{translate key="user.reviewerPrompt"}
					</legend>
					<div class="fields">
						<div id="reviewerOptinGroup" class="form-group optin">
							{foreach from=$reviewerUserGroups[$contextId] item=userGroup}
								{if $userGroup->getPermitSelfRegistration()}
									<label>
										{assign var="userGroupId" value=$userGroup->getId()}
										<input type="checkbox" name="reviewerGroup[{$userGroupId}]" value="1"{if in_array($userGroupId, $userGroupIds)} checked="checked"{/if}>
										{translate key="user.reviewerPrompt.userGroup" userGroup=$userGroup->getLocalizedName()|escape}
									</label>
								{/if}
							{/foreach}
						</div>
					</div>
				</fieldset>
			{/if}
		{/if}

		{include file="frontend/components/registrationFormContexts.tpl"}

		{if !$currentContext}
			{* Require the user to agree to the terms of the privacy policy *}
		<fieldset class="consent">
				{if $siteWidePrivacyStatement}
					<div class="form-group optin optin-privacy">
						<label>
							<input type="checkbox" name="privacyConsent[{$smarty.const.CONTEXT_ID_NONE}]" id="privacyConsent[{$smarty.const.CONTEXT_ID_NONE}]" value="1"{if $privacyConsent[$smarty.const.CONTEXT_ID_NONE]} checked="checked"{/if}>
							{capture assign="privacyUrl"}{url router=$smarty.const.ROUTE_PAGE page="about" op="privacy"}{/capture}
							{translate key="user.register.form.privacyConsent" privacyUrl=$privacyUrl}
						</label>
					</div>
				{/if}

				{* Ask the user to opt into public email notifications *}
				<div class="form-group optin optin-email">
					<label>
						<input type="checkbox" name="emailConsent" value="1"{if $emailConsent} checked="checked"{/if}>
						{translate key="user.register.form.emailConsent"}
					</label>
				</div>
		</fieldset>
		{/if}

		{* recaptcha spam blocker *}
		{if $reCaptchaHtml}
			<fieldset class="recaptcha_wrapper">
				<div class="fields">
					<div class="form-group recaptcha">
						{$reCaptchaHtml}
					</div>
				</div>
			</fieldset>
		{/if}

		<div class="buttons">
			<button class="btn btn-primary submit" type="submit">
				{translate key="user.register"}
			</button>

			{capture assign="rolesProfileUrl"}{url page="user" op="profile" path="roles"}{/capture}
			<a class="btn btn-default" href="{url page="login" source=$rolesProfileUrl}" class="login">
				{translate key="user.login"}
			</a>
		</div>
	</form>
	</div>


{include file="common/frontend/footer.tpl"}
