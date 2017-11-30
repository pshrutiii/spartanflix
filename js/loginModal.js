
/* #####################################################################
   #
   #   Project       : Modal Login with jQuery Effects
   #   Author        : Rodrigo Amarante (rodrigockamarante)
   #   Version       : 1.0
   #   Created       : 07/29/2015
   #   Last Change   : 08/04/2015
   #
   ##################################################################### */
   
$(function() {
    
    var $viewerFormLogin = $('#viewer-login-form');
    var $viewerFormLost = $('#viewer-lost-form');
    var $viewerFormRegister = $('#viewer-register-form');
    var $viewerDivForms = $('#viewer-div-forms');
	
	var $contentProviderFormLogin = $('#contentProvider-login-form');
    var $contentProviderFormLost = $('#contentProvider-lost-form');
    var $contentProviderFormRegister = $('#contentProvider-register-form');
	var $contentProviderDivForms = $('#contentProvider-div-forms');
	
	var $adProviderFormLogin = $('#adProvider-login-form');
    var $adProviderFormLost = $('#adProvider-lost-form');
    var $adProviderFormRegister = $('#adProvider-register-form');
	var $adProviderDivForms = $('#adProvider-div-forms');
	
	var $adminFormLogin = $('#admin-login-form');
    var $adminFormLost = $('#admin-lost-form');
    var $adminFormRegister = $('#admin-register-form');
	var $adminDivForms = $('#admin-div-forms');
	
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    /*$("form").submit(function () {
        switch(this.id) {
            case "login-form":
                var $lg_username=$('#login_username').val();
                var $lg_password=$('#login_password').val();
                if ($lg_username == "ERROR") {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
                } else {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                }
                return false;
                break;
            case "lost-form":
                var $ls_email=$('#lost_email').val();
                if ($ls_email == "ERROR") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
                }
                return false;
                break;
            case "register-form":
                var $rg_username=$('#register_username').val();
                var $rg_email=$('#register_email').val();
                var $rg_password=$('#register_password').val();
                if ($rg_username == "ERROR") {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
                } else {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
                }
                return false;
                break;
            default:
                return false;
        }
        return false;
    });*/
    
    $('#viewer-login_register_btn').click( function () { modalAnimate($viewerFormLogin, $viewerFormRegister, $viewerDivForms); });
    $('#viewer-register_login_btn').click( function () { modalAnimate($viewerFormRegister, $viewerFormLogin, $viewerDivForms); });
    $('#viewer-login_lost_btn').click( function () { modalAnimate($viewerFormLogin, $viewerFormLost, $viewerDivForms); });
    $('#viewer-lost_login_btn').click( function () { modalAnimate($viewerFormLost, $viewerFormLogin, $viewerDivForms); });
    $('#viewer-lost_register_btn').click( function () { modalAnimate($viewerFormLost, $viewerFormRegister, $viewerDivForms); });
    $('#viewer-register_lost_btn').click( function () { modalAnimate($viewerFormRegister, $viewerFormLost, $viewerDivForms); });   
	
	$('#contentProvider-login_register_btn').click( function () { modalAnimate($contentProviderFormLogin, $contentProviderFormRegister, $contentProviderDivForms);});
    $('#contentProvider-register_login_btn').click( function () { modalAnimate($contentProviderFormRegister, $contentProviderFormLogin, $contentProviderDivForms); });
    $('#contentProvider-login_lost_btn').click( function () { modalAnimate($contentProviderFormLogin, $contentProviderFormLost, $contentProviderDivForms); });
    $('#contentProvider-lost_login_btn').click( function () { modalAnimate($contentProviderFormLost, $contentProviderFormLogin, $contentProviderDivForms); });
    $('#contentProvider-lost_register_btn').click( function () { modalAnimate($contentProviderFormLost, $contentProviderFormRegister, $contentProviderDivForms); });
    $('#contentProvider-register_lost_btn').click( function () { modalAnimate($formRegister, $contentProviderFormLost, $contentProviderDivForms); });
	
	$('#adProvider-login_register_btn').click( function () { modalAnimate($adProviderFormLogin, $adProviderFormRegister, $adProviderDivForms);});
    $('#adProvider-register_login_btn').click( function () { modalAnimate($adProviderFormRegister, $adProviderFormLogin, $adProviderDivForms); });
    $('#adProvider-login_lost_btn').click( function () { modalAnimate($adProviderFormLogin, $adProviderFormLost, $adProviderDivForms); });
    $('#adProvider-lost_login_btn').click( function () { modalAnimate($adProviderFormLost, $adProviderFormLogin, $adProviderDivForms); });
    $('#adProvider-lost_register_btn').click( function () { modalAnimate($adProviderFormLost, $adProviderFormRegister, $adProviderDivForms); });
    $('#adProvider-register_lost_btn').click( function () { modalAnimate($formRegister, $adProviderFormLost, $adProviderDivForms); });
	
	
	$('#admin-login_register_btn').click( function () { modalAnimate($adminFormLogin, $adminFormRegister, $adminDivForms); });
    $('#admin-register_login_btn').click( function () { modalAnimate($adminFormRegister, $adminFormLogin,$adminDivForms); });
    $('#admin-login_lost_btn').click( function () { modalAnimate($adminFormLogin, $adminFormLost,$adminDivForms); });
    $('#admin-lost_login_btn').click( function () { modalAnimate($adminFormLost, $adminFormLogin, $adminDivForms); });
    $('#admin-lost_register_btn').click( function () { modalAnimate($adminFormLost, $adminFormRegister, $adminDivForms); });
    $('#admin-register_lost_btn').click( function () { modalAnimate($adminFormRegister, $adminFormLost, $adminDivForms); });
	
	
    function modalAnimate ($oldForm, $newForm, $divForms) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
  		}, $msgShowTime);
    }
});