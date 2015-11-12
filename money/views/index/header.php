<?php
$servarname = $_SERVER['SERVER_NAME'];
?>
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login">
        <div class="modal-content" style="background-clip: padding-box;
             background-color: rgb(255, 255, 255);
             border-bottom-color: rgba(0, 0, 0, 0.2);
             border-bottom-left-radius: 6px;
             border-bottom-right-radius: 6px;
             border-bottom-style: solid;
             border-bottom-width: 1px;
             border-image-outset: 0px;
             border-image-repeat: stretch;
             border-image-slice: 100%;
             border-image-source: none;
             border-image-width: 1;
             border-left-color: rgba(0, 0, 0, 0.2);
             border-left-style: solid;
             border-left-width: 1px;
             border-right-color: rgba(0, 0, 0, 0.2);
             border-right-style: solid;
             border-right-width: 1px;
             border-top-color: rgba(0, 0, 0, 0.2);
             border-top-left-radius: 6px;
             border-top-right-radius: 6px;
             border-top-style: solid;
             border-top-width: 1px;
             box-shadow: rgba(0, 0, 0, 0.498039) 0px 5px 15px 0px;
             box-sizing: border-box;
             color: rgb(51, 51, 51);
             display: block;
             font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
             font-size: 14px;
             line-height: 20px;
             outline-color: rgb(51, 51, 51);
             outline-style: none;
             outline-width: 0px;
             position: relative;
             width: 330px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="box-sizing: border-box;
                    color: rgb(51, 51, 51);
                    display: block;
                    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    font-size: 18px;
                    font-weight: 500;
                    height: 25px;
                    line-height: 25.7143px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                    margin-right: 0px;
                    margin-top: 0px;
                    text-align: left;
                    width: 298px;">Login with</h4>
            </div>
            <div class="modal-body" style="box-sizing: border-box;
                 color: rgb(51, 51, 51);
                 display: block;
                 font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                 font-size: 14px;
                 line-height: 20px;
                 padding-bottom: 20px;
                 padding-left: 20px;
                 padding-right: 20px;
                 padding-top: 20px;
                 position: relative;
                 width: 328px;">  
                <div class="box">
                    <div class="content">
                        <div class="form loginBox">
                            <?php
                            if (is_array($this->errors)) {
                                foreach ($this->errors as $value) {
                                    $$value = true;
                                }
                            }
                            ?>
                            <!--                            <u><h3>Вход в системата</h3></u>
                                                        <form action="" method="post">
                                                            Потребителско име: <br />
                                                            <input type="text" name="username"/><br />
                                                            Парола: <br />
                                                            <input type="password" name="pass"/><br />
                                                            <font color ='red'><?php echo isset($invaliduser) || isset($invalidpass) ? '<br />Невалидно име или парола<br />' : ''; ?></font><br />
                                                            <input type="submit" name="login" value="Влез" />
                                                        </form>
                                                        <a href="/register/">Нямаш регистрация? Направи си една сега.</a>-->
                            <form method="post" action="">
                                <input id="email" style="-webkit-appearance: none;
                                       -webkit-rtl-ordering: logical;
                                       -webkit-user-select: text;
                                       background-color: rgba(0, 0, 0, 0.0301961);
                                       background-image: none;
                                       border-bottom-color: rgb(51, 51, 51);
                                       border-bottom-left-radius: 3px;
                                       border-bottom-right-radius: 3px;
                                       border-bottom-style: none;
                                       border-bottom-width: 0px;
                                       border-image-outset: 0px;
                                       border-image-repeat: stretch;
                                       border-image-slice: 100%;
                                       border-image-source: none;
                                       border-image-width: 1;
                                       border-left-color: rgb(51, 51, 51);
                                       border-left-style: none;
                                       border-left-width: 0px;
                                       border-right-color: rgb(51, 51, 51);
                                       border-right-style: none;
                                       border-right-width: 0px;
                                       border-top-color: rgb(51, 51, 51);
                                       border-top-left-radius: 3px;
                                       border-top-right-radius: 3px;
                                       border-top-style: none;
                                       border-top-width: 0px;
                                       box-shadow: rgba(0, 0, 0, 0.0901961) 0px 1px 0px 0px inset;
                                       box-sizing: border-box;
                                       color: rgb(51, 51, 51);
                                       cursor: auto;
                                       display: block;
                                       font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                       font-size: 16px;
                                       font-stretch: normal;
                                       font-style: normal;
                                       font-variant: normal;
                                       font-weight: normal;
                                       height: 46px;
                                       letter-spacing: normal;
                                       line-height: 22.8571px;
                                       margin-bottom: 5px;
                                       margin-left: 0px;
                                       margin-right: 0px;
                                       margin-top: 0px;
                                       padding-bottom: 13px;
                                       padding-left: 12px;
                                       padding-right: 12px;
                                       padding-top: 13px;
                                       text-align: start;
                                       text-indent: 0px;
                                       text-rendering: auto;
                                       text-shadow: none;
                                       text-transform: none;
                                       transition-delay: 0s, 0s;
                                       transition-duration: 0.15s, 0.15s;
                                       transition-property: border-color, box-shadow;
                                       transition-timing-function: ease-in-out, ease-in-out;
                                       vertical-align: middle;
                                       width: 288px;
                                       word-spacing: 0px;
                                       writing-mode: lr-tb;
                                       -webkit-writing-mode: horizontal-tb;" class="form-control" type="text" placeholder="Username" name="username">
                                <input id="password" style="-webkit-appearance: none;
                                       -webkit-rtl-ordering: logical;
                                       -webkit-user-select: text;
                                       background-color: rgba(0, 0, 0, 0.0301961);
                                       background-image: none;
                                       border-bottom-color: rgb(51, 51, 51);
                                       border-bottom-left-radius: 3px;
                                       border-bottom-right-radius: 3px;
                                       border-bottom-style: none;
                                       border-bottom-width: 0px;
                                       border-image-outset: 0px;
                                       border-image-repeat: stretch;
                                       border-image-slice: 100%;
                                       border-image-source: none;
                                       border-image-width: 1;
                                       border-left-color: rgb(51, 51, 51);
                                       border-left-style: none;
                                       border-left-width: 0px;
                                       border-right-color: rgb(51, 51, 51);
                                       border-right-style: none;
                                       border-right-width: 0px;
                                       border-top-color: rgb(51, 51, 51);
                                       border-top-left-radius: 3px;
                                       border-top-right-radius: 3px;
                                       border-top-style: none;
                                       border-top-width: 0px;
                                       box-shadow: rgba(0, 0, 0, 0.0901961) 0px 1px 0px 0px inset;
                                       box-sizing: border-box;
                                       color: rgb(51, 51, 51);
                                       cursor: auto;
                                       display: block;
                                       font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                       font-size: 16px;
                                       font-stretch: normal;
                                       font-style: normal;
                                       font-variant: normal;
                                       font-weight: normal;
                                       height: 46px;
                                       letter-spacing: normal;
                                       line-height: 22.8571px;
                                       margin-bottom: 5px;
                                       margin-left: 0px;
                                       margin-right: 0px;
                                       margin-top: 0px;
                                       padding-bottom: 13px;
                                       padding-left: 12px;
                                       padding-right: 12px;
                                       padding-top: 13px;
                                       text-align: start;
                                       text-indent: 0px;
                                       text-rendering: auto;
                                       text-shadow: none;
                                       text-transform: none;
                                       transition-delay: 0s, 0s;
                                       transition-duration: 0.15s, 0.15s;
                                       transition-property: border-color, box-shadow;
                                       transition-timing-function: ease-in-out, ease-in-out;
                                       vertical-align: middle;
                                       width: 288px;
                                       word-spacing: 0px;
                                       writing-mode: lr-tb;
                                       -webkit-writing-mode: horizontal-tb;" class="form-control" type="password" placeholder="Password" name="pass"/>
                                <input class="btn btn-default btn-login" style="-webkit-appearance: none;
                                       -webkit-rtl-ordering: logical;
                                       -webkit-user-select: none;
                                       background-color: rgb(0, 187, 255);
                                       background-image: none;
                                       border-bottom-color: rgb(0, 187, 255);
                                       border-bottom-left-radius: 4px;
                                       border-bottom-right-radius: 4px;
                                       border-bottom-style: solid;
                                       border-bottom-width: 0px;
                                       border-image-outset: 0px;
                                       border-image-repeat: stretch;
                                       border-image-slice: 100%;
                                       border-image-source: none;
                                       border-image-width: 1;
                                       border-left-color: rgb(0, 187, 255);
                                       border-left-style: solid;
                                       border-left-width: 0px;
                                       border-right-color: rgb(0, 187, 255);
                                       border-right-style: solid;
                                       border-right-width: 0px;
                                       border-top-color: rgb(0, 187, 255);
                                       border-top-left-radius: 4px;
                                       border-top-right-radius: 4px;
                                       border-top-style: solid;
                                       border-top-width: 0px;
                                       box-sizing: border-box;
                                       color: rgb(255, 255, 255);
                                       cursor: pointer;
                                       display: block;
                                       font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                       font-size: 14px;
                                       font-stretch: normal;
                                       font-style: normal;
                                       font-variant: normal;
                                       font-weight: normal;
                                       height: 50px;
                                       letter-spacing: normal;
                                       line-height: 20px;
                                       margin-bottom: 0px;
                                       margin-left: 0px;
                                       margin-right: 0px;
                                       margin-top: 0px;
                                       padding-bottom: 15px;
                                       padding-left: 50px;
                                       padding-right: 50px;
                                       padding-top: 15px;
                                       text-align: center;
                                       text-indent: 0px;
                                       text-rendering: auto;
                                       text-shadow: none;
                                       text-transform: uppercase;
                                       vertical-align: middle;
                                       white-space: nowrap;
                                       width: 288px;
                                       word-spacing: 0px;
                                       writing-mode: lr-tb;
                                       -webkit-writing-mode: horizontal-tb;" type="submit" name="login" value="Login" onclick="loginAjax()">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box" >
                    <div class="content registerBox" style="display:none;" >
                        <div class="form">
                            <?php
                            if (is_array($this->errors)) {
                                foreach ($this->errors as $value) {
                                    $$value = true;
                                }
                            }
                            ?>
                            <form method="post" html="{:multipart=>true}" data-remote="true" action="">
                                <input id="username" style="-webkit-appearance: none;
                                       -webkit-rtl-ordering: logical;
                                       -webkit-user-select: text;
                                       background-color: rgba(0, 0, 0, 0.0301961);
                                       background-image: none;
                                       border-bottom-color: rgb(51, 51, 51);
                                       border-bottom-left-radius: 3px;
                                       border-bottom-right-radius: 3px;
                                       border-bottom-style: none;
                                       border-bottom-width: 0px;
                                       border-image-outset: 0px;
                                       border-image-repeat: stretch;
                                       border-image-slice: 100%;
                                       border-image-source: none;
                                       border-image-width: 1;
                                       border-left-color: rgb(51, 51, 51);
                                       border-left-style: none;
                                       border-left-width: 0px;
                                       border-right-color: rgb(51, 51, 51);
                                       border-right-style: none;
                                       border-right-width: 0px;
                                       border-top-color: rgb(51, 51, 51);
                                       border-top-left-radius: 3px;
                                       border-top-right-radius: 3px;
                                       border-top-style: none;
                                       border-top-width: 0px;
                                       box-shadow: rgba(0, 0, 0, 0.0901961) 0px 1px 0px 0px inset;
                                       box-sizing: border-box;
                                       color: rgb(51, 51, 51);
                                       cursor: auto;
                                       display: block;
                                       font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                       font-size: 16px;
                                       font-stretch: normal;
                                       font-style: normal;
                                       font-variant: normal;
                                       font-weight: normal;
                                       height: 46px;
                                       letter-spacing: normal;
                                       line-height: 22.8571px;
                                       margin-bottom: 5px;
                                       margin-left: 0px;
                                       margin-right: 0px;
                                       margin-top: 0px;
                                       padding-bottom: 13px;
                                       padding-left: 12px;
                                       padding-right: 12px;
                                       padding-top: 13px;
                                       text-align: start;
                                       text-indent: 0px;
                                       text-rendering: auto;
                                       text-shadow: none;
                                       text-transform: none;
                                       transition-delay: 0s, 0s;
                                       transition-duration: 0.15s, 0.15s;
                                       transition-property: border-color, box-shadow;
                                       transition-timing-function: ease-in-out, ease-in-out;
                                       vertical-align: middle;
                                       width: 288px;
                                       word-spacing: 0px;
                                       writing-mode: lr-tb;
                                       -webkit-writing-mode: horizontal-tb;" class="form-control" type="text" placeholder="Username" name="username">
                                <input id="email" style="-webkit-appearance: none;
                                       -webkit-rtl-ordering: logical;
                                       -webkit-user-select: text;
                                       background-color: rgba(0, 0, 0, 0.0301961);
                                       background-image: none;
                                       border-bottom-color: rgb(51, 51, 51);
                                       border-bottom-left-radius: 3px;
                                       border-bottom-right-radius: 3px;
                                       border-bottom-style: none;
                                       border-bottom-width: 0px;
                                       border-image-outset: 0px;
                                       border-image-repeat: stretch;
                                       border-image-slice: 100%;
                                       border-image-source: none;
                                       border-image-width: 1;
                                       border-left-color: rgb(51, 51, 51);
                                       border-left-style: none;
                                       border-left-width: 0px;
                                       border-right-color: rgb(51, 51, 51);
                                       border-right-style: none;
                                       border-right-width: 0px;
                                       border-top-color: rgb(51, 51, 51);
                                       border-top-left-radius: 3px;
                                       border-top-right-radius: 3px;
                                       border-top-style: none;
                                       border-top-width: 0px;
                                       box-shadow: rgba(0, 0, 0, 0.0901961) 0px 1px 0px 0px inset;
                                       box-sizing: border-box;
                                       color: rgb(51, 51, 51);
                                       cursor: auto;
                                       display: block;
                                       font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                       font-size: 16px;
                                       font-stretch: normal;
                                       font-style: normal;
                                       font-variant: normal;
                                       font-weight: normal;
                                       height: 46px;
                                       letter-spacing: normal;
                                       line-height: 22.8571px;
                                       margin-bottom: 5px;
                                       margin-left: 0px;
                                       margin-right: 0px;
                                       margin-top: 0px;
                                       padding-bottom: 13px;
                                       padding-left: 12px;
                                       padding-right: 12px;
                                       padding-top: 13px;
                                       text-align: start;
                                       text-indent: 0px;
                                       text-rendering: auto;
                                       text-shadow: none;
                                       text-transform: none;
                                       transition-delay: 0s, 0s;
                                       transition-duration: 0.15s, 0.15s;
                                       transition-property: border-color, box-shadow;
                                       transition-timing-function: ease-in-out, ease-in-out;
                                       vertical-align: middle;
                                       width: 288px;
                                       word-spacing: 0px;
                                       writing-mode: lr-tb;
                                       -webkit-writing-mode: horizontal-tb;" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" style="-webkit-appearance: none;
                                       -webkit-rtl-ordering: logical;
                                       -webkit-user-select: text;
                                       background-color: rgba(0, 0, 0, 0.0301961);
                                       background-image: none;
                                       border-bottom-color: rgb(51, 51, 51);
                                       border-bottom-left-radius: 3px;
                                       border-bottom-right-radius: 3px;
                                       border-bottom-style: none;
                                       border-bottom-width: 0px;
                                       border-image-outset: 0px;
                                       border-image-repeat: stretch;
                                       border-image-slice: 100%;
                                       border-image-source: none;
                                       border-image-width: 1;
                                       border-left-color: rgb(51, 51, 51);
                                       border-left-style: none;
                                       border-left-width: 0px;
                                       border-right-color: rgb(51, 51, 51);
                                       border-right-style: none;
                                       border-right-width: 0px;
                                       border-top-color: rgb(51, 51, 51);
                                       border-top-left-radius: 3px;
                                       border-top-right-radius: 3px;
                                       border-top-style: none;
                                       border-top-width: 0px;
                                       box-shadow: rgba(0, 0, 0, 0.0901961) 0px 1px 0px 0px inset;
                                       box-sizing: border-box;
                                       color: rgb(51, 51, 51);
                                       cursor: auto;
                                       display: block;
                                       font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                       font-size: 16px;
                                       font-stretch: normal;
                                       font-style: normal;
                                       font-variant: normal;
                                       font-weight: normal;
                                       height: 46px;
                                       letter-spacing: normal;
                                       line-height: 22.8571px;
                                       margin-bottom: 5px;
                                       margin-left: 0px;
                                       margin-right: 0px;
                                       margin-top: 0px;
                                       padding-bottom: 13px;
                                       padding-left: 12px;
                                       padding-right: 12px;
                                       padding-top: 13px;
                                       text-align: start;
                                       text-indent: 0px;
                                       text-rendering: auto;
                                       text-shadow: none;
                                       text-transform: none;
                                       transition-delay: 0s, 0s;
                                       transition-duration: 0.15s, 0.15s;
                                       transition-property: border-color, box-shadow;
                                       transition-timing-function: ease-in-out, ease-in-out;
                                       vertical-align: middle;
                                       width: 288px;
                                       word-spacing: 0px;
                                       writing-mode: lr-tb;
                                       -webkit-writing-mode: horizontal-tb;" class="form-control" type="password" placeholder="Password" name="pass">
                                <input id="password_confirmation" style="-webkit-appearance: none;
                                       -webkit-rtl-ordering: logical;
                                       -webkit-user-select: text;
                                       background-color: rgba(0, 0, 0, 0.0301961);
                                       background-image: none;
                                       border-bottom-color: rgb(51, 51, 51);
                                       border-bottom-left-radius: 3px;
                                       border-bottom-right-radius: 3px;
                                       border-bottom-style: none;
                                       border-bottom-width: 0px;
                                       border-image-outset: 0px;
                                       border-image-repeat: stretch;
                                       border-image-slice: 100%;
                                       border-image-source: none;
                                       border-image-width: 1;
                                       border-left-color: rgb(51, 51, 51);
                                       border-left-style: none;
                                       border-left-width: 0px;
                                       border-right-color: rgb(51, 51, 51);
                                       border-right-style: none;
                                       border-right-width: 0px;
                                       border-top-color: rgb(51, 51, 51);
                                       border-top-left-radius: 3px;
                                       border-top-right-radius: 3px;
                                       border-top-style: none;
                                       border-top-width: 0px;
                                       box-shadow: rgba(0, 0, 0, 0.0901961) 0px 1px 0px 0px inset;
                                       box-sizing: border-box;
                                       color: rgb(51, 51, 51);
                                       cursor: auto;
                                       display: block;
                                       font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                       font-size: 16px;
                                       font-stretch: normal;
                                       font-style: normal;
                                       font-variant: normal;
                                       font-weight: normal;
                                       height: 46px;
                                       letter-spacing: normal;
                                       line-height: 22.8571px;
                                       margin-bottom: 5px;
                                       margin-left: 0px;
                                       margin-right: 0px;
                                       margin-top: 0px;
                                       padding-bottom: 13px;
                                       padding-left: 12px;
                                       padding-right: 12px;
                                       padding-top: 13px;
                                       text-align: start;
                                       text-indent: 0px;
                                       text-rendering: auto;
                                       text-shadow: none;
                                       text-transform: none;
                                       transition-delay: 0s, 0s;
                                       transition-duration: 0.15s, 0.15s;
                                       transition-property: border-color, box-shadow;
                                       transition-timing-function: ease-in-out, ease-in-out;
                                       vertical-align: middle;
                                       width: 288px;
                                       word-spacing: 0px;
                                       writing-mode: lr-tb;
                                       -webkit-writing-mode: horizontal-tb;" class="form-control" type="password" placeholder="Repeat Password" name="pass2">
                                <input class="btn btn-default btn-register" style="-webkit-appearance: none;
                                       -webkit-rtl-ordering: logical;
                                       -webkit-user-select: none;
                                       background-color: rgb(0, 187, 255);
                                       background-image: none;
                                       border-bottom-color: rgb(0, 187, 255);
                                       border-bottom-left-radius: 4px;
                                       border-bottom-right-radius: 4px;
                                       border-bottom-style: solid;
                                       border-bottom-width: 0px;
                                       border-image-outset: 0px;
                                       border-image-repeat: stretch;
                                       border-image-slice: 100%;
                                       border-image-source: none;
                                       border-image-width: 1;
                                       border-left-color: rgb(0, 187, 255);
                                       border-left-style: solid;
                                       border-left-width: 0px;
                                       border-right-color: rgb(0, 187, 255);
                                       border-right-style: solid;
                                       border-right-width: 0px;
                                       border-top-color: rgb(0, 187, 255);
                                       border-top-left-radius: 4px;
                                       border-top-right-radius: 4px;
                                       border-top-style: solid;
                                       border-top-width: 0px;
                                       box-sizing: border-box;
                                       color: rgb(255, 255, 255);
                                       cursor: pointer;
                                       display: block;
                                       font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                       font-size: 14px;
                                       font-stretch: normal;
                                       font-style: normal;
                                       font-variant: normal;
                                       font-weight: normal;
                                       height: 50px;
                                       letter-spacing: normal;
                                       line-height: 20px;
                                       margin-bottom: 0px;
                                       margin-left: 0px;
                                       margin-right: 0px;
                                       margin-top: 0px;
                                       padding-bottom: 15px;
                                       padding-left: 50px;
                                       padding-right: 50px;
                                       padding-top: 15px;
                                       text-align: center;
                                       text-indent: 0px;
                                       text-rendering: auto;
                                       text-shadow: none;
                                       text-transform: uppercase;
                                       vertical-align: middle;
                                       white-space: nowrap;
                                       width: 288px;
                                       word-spacing: 0px;
                                       writing-mode: lr-tb;
                                       -webkit-writing-mode: horizontal-tb;" type="submit" value="Create account" name="register">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="clear: both;" >
                <div class="forgot login-footer">
                    <span>Looking to 
                        <a href="javascript: showRegisterForm();">create an account</a>
                        ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="javascript: showLoginForm();">Login</a>
                </div>
            </div>        
        </div>
    </div>
</div>

<nav class="navbar navbar-default" role="navigation-demo" id="demo-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img style="float: left; margin-top: 10px;" src="assets/paper_img/LOGO_sivo.png" height="45 " width="45"><a class="navbar-brand" href="http://<?php echo $servarname ?>">uSaveBucks</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
            <ul class="nav navbar-nav navbar-right">
                <a href="#" class="btn btn-simple">FAQ</a>
                <a class="btn btn-simple" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                <a class="btn btn-simple" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a></div>
        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-->
</nav>         

<div class="wrapper">
    <div class="landing-header" style="background-image: url('assets/paper_img/mackata.jpg');">
        <div class="container">
            <div class="motto">
                <h1 class="title-uppercase">you are your money</h1>
                <h3>Manage it!</h3>
            </div>
        </div>    
    </div>
</div>

