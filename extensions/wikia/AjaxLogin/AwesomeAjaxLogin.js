/*
 * Author: Maciej Brencz (based on code from Inez Korczynski)
 */
var AjaxLogin = {
	init: function(form) {
		this.form = form;

		// move login/password/remember fields from hidden form to AjaxLogin
		var labels = this.form.find('label');
		$('#wpName1Ajax').insertAfter(labels[0]);
		$('#wpPassword1Ajax').insertAfter(labels[1]);
		$('#wpRemember1Ajax').insertBefore(labels[2]);

		// remove hidden form
		$('#userajaxloginform').remove();
		this.form.attr('id', 'userajaxloginform');

		// add submit event handler for login form
		this.form.submit(this.formSubmitHandler).log('AjaxLogin: init()');

		// ask before going to register form from edit page
		$('#wpAjaxRegister').click(this.ajaxRegisterConfirm);
	},
	formSubmitHandler: function(ev) {
		// Prevent the default action for event (submit of form)
		if(ev) {
			ev.preventDefault();
		}
		AjaxLogin.form.log('AjaxLogin: selected action = '+ AjaxLogin.action);

		var params = [
			'action=ajaxlogin',
			'format=json',
			(AjaxLogin.action == 'password' ? 'wpMailmypassword=1' : 'wpLoginattempt=1'),

			// serialize form fields
			AjaxLogin.form.serialize()
		];

		// Let's block login form (disable buttons and input boxes)
		AjaxLogin.blockLoginForm(true);

		$.getJSON(window.wgScriptPath + '/api.php?' + params.join('&'), AjaxLogin.handleSuccess);
	},
	handleSuccess: function(response) {
		var responseResult = response.ajaxlogin.result;
		switch(responseResult) {
			// TODO: what is this for?
			case 'Reset':
				if(Dom.get('wpPreview') && Dom.get('wpLogin')) {
					if(typeof(ajaxLogin1)!="undefined" && !confirm(ajaxLogin1)) {
						break;
					}
				}
				Dom.get('userajaxloginform').action = wgServer + wgScriptPath + '/index.php?title=Special:Userlogin&action=submitlogin&type=login';
				Event.removeListener('userajaxloginform', 'submit', YAHOO.wikia.AjaxLogin.formSubmitHandler);
				YAHOO.wikia.AjaxLogin.blockLoginForm(false);
				Dom.get('userajaxloginform').submit();
				YAHOO.wikia.AjaxLogin.blockLoginForm(true);
				break;
			case 'Success':
				// we're on edit page
				if($('#wpPreview').length && $('#wpLogin').length) {
					if ($('#wikiDiff').children().length) {
						$('#wpDiff').click();
					} else {
						if ($('#wikiPreview').children().length == 0) {
							$('#wpLogin').attr('value', 1);
						}
						$('#wpPreview').click();
					}
				} else {
					if(wgCanonicalSpecialPageName == "Userlogout") {
						window.location.href = wgServer + wgScriptPath;
					} else {
						window.location.reload(true);
					}
				}
				break;
			case 'NotExists':
				AjaxLogin.blockLoginForm(false);
				$('#wpPassword1n').attr('value', '');
				$('#wpName1').attr('value', '').focus();
			case 'WrongPass':
				AjaxLogin.blockLoginForm(false);
				$('#wpPassword1').attr('value', '').focus();
			default:
				AjaxLogin.blockLoginForm(false);
				AjaxLogin.displayReason(response.ajaxlogin.text);
				break;
		}
	},
	handleFailure: function() {
		AjaxLogin.form.log('AjaxLogin: handleFailure was called');
	},
	displayReason: function(reason) {
		$('#wpError').css('display', '').html(reason + '<br/><br/>');
	},
	blockLoginForm: function(block) {
		AjaxLogin.form.find('input').attr('disabled', (block ? true : false));
	},
	ajaxRegisterConfirm: function(ev) {
		AjaxLogin.form.log('AjaxLogin: ajaxRegisterConfirm()');

		if($('#wpPreview').length && $('#wpLogin').length) {
			if(typeof(ajaxLogin2)!="undefined" && !confirm(ajaxLogin2)) {
				ev.preventDefault();
			}
		}
	}
};
