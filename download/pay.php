<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Whonix</title>
    <link rel="shortcut icon" href="../img/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="../css/style.css" rel="stylesheet">

  
</head>
<body>

<?php

$amount = !empty($_POST['check_pay_r']) ? $_POST['check_pay_r'] : (!empty($_POST['check_pay']) ? $_POST['check_pay'] : '');

?>

<style>

    <?php if(!$amount) { ?>

    .modal {
        right: 100%;
    }

    input:checked + .modal {
        opacity: 1;
        right: 0;
    }

    <?php }else { ?>

    .modal {
        right: 0;
    }

    input:checked + .modal {
        opacity: 1;
        right: 100%;
    }

    <?php } ?>

</style>

<div class="hero thin-hero">
    <header>
        <div class="clearfix">
            <h1><a href="/"><img width="160" src="../img/Whonix_Logo.png" alt="Whonix"></a></h1>

            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="/download/index.html" class="cc-active">Download</a></li>
                    <li><a href="https://whonix.org/wiki/Main_Page">Wiki</a></li>
                    <li><a href="https://forums.whonix.org/">Forum</a></li>
                    <li><a href="pay.php" class="donate_button">Donate</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2 class="editable">Download Whonix</h2>
    </div>
</div>

<section id="pay_h_section">
    <div class="container subheader" id="pay_h">
        <h3 class="editable">Help shape the future of Whonix</h3>
        <p class="editable">Another text field</p>
    </div>
</section>



<section id="pay_cont_1_section_nonjs">
    <div class="container subheader" id="pay_cont_1">

        <div class="c_0" style="padding-bottom: 15px;">
            <h4 class="editable">Whonix</h4>
            <p class="editable">I support Whonix, and want to donate about</p>

            <form action="pay.php" method="post">
                <label class="label_r">
                    <input type="radio" name="check_pay_r" value="1"  id="radio_pay_1" class="radio"/>
                    <span class="radio-custom"></span>
                    <span class="label_text">$ 1</span>
                </label>
                <label class="label_r" style="display: inline-block;">
                    <input type="radio" name="check_pay_r" value="10" id="radio_pay_2" class="radio"/>
                    <span class="radio-custom"></span>
                    <span class="label_text">$ 10</span>
                </label>
                <label class="label_r" style="display: inline-block;">
                    <input type="radio" name="check_pay_r" value="50" id="radio_pay_3" class="radio"/>
                    <span class="radio-custom"></span>
                    <span class="label_text">$ 50</span>
                </label>
                <label class="label_r" style="display: inline-block;">
                    <input type="radio" name="check_pay_r" value="100" id="radio_pay_4" class="radio"/>
                    <span class="radio-custom"></span>
                    <span class="label_text">$ 100</span>
                </label>
                <label class="label_r" style="display: inline-block;">
                    <input type="radio" name="check_pay_r" value="500" id="radio_pay_5" class="radio"/>
                    <span class="radio-custom"></span>
                    <span class="label_text">$ 500</span>
                </label>
                <label class="label_r" style="display: inline-block;">
                    <input type="radio" name="check_pay_r" value="1000" id="radio_pay_6" class="radio"/>
                    <span class="radio-custom"></span>
                    <span class="label_text">$ 1000</span>
                </label>
                <label class="label_r" style="display: inline-block;">
                    <input type="radio" name="check_pay_r" value="5000" id="radio_pay_7" class="radio"/>
                    <span class="radio-custom"></span>
                    <span class="label_text">$ 5000</span>
                </label>
        </div>
        <div class="c_1">
            <label class="check_pay_text">
                <span class="label_text_2">Or enter the desired amount ($):</span>
                <input type="text" name="check_pay" id="amount_none" value="<?= $amount ?>">
            </label>

            <input name="amount" type="submit" value="Pay" align="left" id="c_1_2" for="zayavka" class="button"
                   style="padding-top: 8px;  padding-bottom: 8px;">
        </div>
        </form>
    </div>
</section>

<!--- pay --->
<input class="hide" type="checkbox" id="zayavka"/>
<div class="modal">
    <label class="modal-x2" for="zayavka"></label>
    <div>
        <label class="modal-x" for="zayavka">&times;</label>

        <div id="body_pay">

            <div class="tabs_01">
                <a href="#pay_text_01">
                    <div class="pay_head_01">
                        <div class="pay_span">
                            <div class="pay_h1">Credit & Debit cards</div>
                            <div class="pay_h2">Transiction fee may apply</div>
                        </div>
                        <div class="pay_img_m"><img src="../img/pay_01.png" style="box-shadow:none;" class="pay_img_m_01"></div>
                    </div>
                </a>
                <div id="pay_text_01">
                    <form name="bank_pay">
                        <div id="pay_visa_h1">Cardholder Name</div>
                        <input type="text" required>
                        <div id="pay_visa_h1">Card Number</div>
                        <input type="text" required>
                        <div class="img_visa"><img src="../img/pay_01_visa.png"></div>
                        <div class="end_date">
                            <div id="pay_visa_h1">End Date</div>
                            <input type="text" placeholder="mm" pattern="[0-9]{2}" class="pay_visa_mm" required> <input
                                    type="text" placeholder="yy" class="pay_visa_yyyy" pattern="[0-9]{2}" required>
                        </div>
                        <div class="pay_cvv">
                            <div id="pay_visa_h1">CVV</div>
                            <input type="text" class="pay_visa_cvv" pattern="[0-9]{3}" placeholder="3 digits" required>
                            <div class="img_cvv"><img src="../img/pay_01_cvv.png"></div>
                        </div>
                        <div id="pay_visa_ok"><input type="checkbox" required>I have read and accept the terms of use
                            and privacy policy
                        </div>
                        <input type="submit" name="bank_pay" value="Pay Now" id="pay_now_button">
                    </form>
                </div>
            </div>

            <div class="tabs_02">
                <a href="#pay_text_02">
                    <div class="pay_head_02">
                        <div class="pay_span">
                            <div class="pay_h1" style="font-size: 14px;">Bank transfer</div>
                            <div class="pay_h2">Free of charge</div>
                        </div>
                        <div class="pay_img_m"><img src="../img/pay_02.png" style="box-shadow:none;"></div>
                    </div>
                </a>
                <div id="pay_text_02">
                    <div id="pay_visa_h1">Patrick Schleizer</div>
                    <div id="pay_visa_h1">IBAN: DE775<wbr>001006<wbr>003204<wbr>73603<BR>BIC: PBNKDEFF</div>
                </div>
            </div>

            <div class="tabs_03">
                <a href="#pay_text_03">
                    <div class="pay_head_03">
                        <div class="pay_span">
                            <div class="pay_h1">Pay with Bitcoin</div>
                            <div class="pay_h2">Free of charge</div>
                        </div>
                        <div class="pay_img_m"><img src="../img/pay_03.png" style="box-shadow:none;"></div>
                    </div>
                </a>
                <div id="pay_text_03">
                    <div id="pay_visa_h1">Bitcoin accepted here</div>
                    <div id="pay_visa_h1">1CWqk<wbr>unp7s<wbr>Xayw<wbr>TMR3<wbr>pzfs<wbr>iikt<wbr>2DZ8<wbr>DuuS</div>
                </div>
            </div>

            <div class="tabs_04">
                <a href="#pay_text_04">
                    <div class="pay_head_04">
                        <div class="pay_span">
                            <div class="pay_h1">Pay with Paypal</div>
                            <div class="pay_h2">Transiction fee may apply</div>
                        </div>
                        <div class="pay_img_m"><img src="../img/pay_04.png" style="box-shadow:none;"></div>
                    </div>
                </a>
                <div id="pay_text_04">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

                        <div id="pay_paypal_h1">Paypal Subscribtion</div>
                        <input type="text" class="paypal_price" name="a3" pattern="\d*" placeholder="20"
                               value="<?= $amount ?>"
                               required>
                        <select class="paypal_price_m" name="currency_code">
                            <option>USD</option>
                            <option>EUR</option>
                            <option>RUB</option>
                        </select>
                        <div class="img_paypal">
                            <img src="../img/pay_04_pay.png" style="box-shadow: none;"></div>

                        <input type="hidden" name="cmd" value="_xclick-subscriptions">
                        <input type="hidden" name="business" value="JD8QS8KA2CLBQ">
                        <input type="hidden" name="lc" value="RU">
                        <input type="hidden" name="item_name" value="Whonix. Subscriptions">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="no_shipping" value="2">
                        <input type="hidden" name="src" value="1">
                        <input type="hidden" name="p3" value="1">
                        <input type="hidden" name="t3" value="M">
                        <input type="hidden" name="bn" value="PP-SubscriptionsBF:button.png:NonHosted">
                        <input type="image" src="../img/button.png" border="0" style="margin-left: -10px;"
                               name="submit" alt="PayPal — более безопасный и легкий способ оплаты через Интернет!">

                    </form>
                    <hr>
                    <div id="pay_visa_h1">Paypal Subscribtion</div>
                    <div id="pay_visa_h1" style="font-size: 14px;"><a href="https://paypal.me/Whonix">https://paypal.me/Whonix</a></div>
                    <hr>

                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <div id="pay_paypal_h1">Paypal Onetime Donation</div>
                        <input type="text" class="paypal_price" name="amount" pattern="\d*" placeholder="20"
                               value="<?= $amount ?>"
                               required>
                        <select class="paypal_price_m" name="currency_code">
                            <option>USD</option>
                            <option>EUR</option>
                            <option>RUB</option>
                        </select>
                        <div class="img_paypal">
                            <img src="../img/pay_04_pay.png" style="box-shadow: none;"></div>

                        <input type="hidden" name="cmd" value="_donations">
                        <input type="hidden" name="business" value="JD8QS8KA2CLBQ">
                        <input type="hidden" name="item_name" value="Whonix. Donation">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="cn" value="Добавить специальные инструкции для продавца:">
                        <input type="hidden" name="no_shipping" value="2">
                        <input type="hidden" name="bn" value="PP-DonationsBF:button.png:NonHosted">
                        <input type="image" src="../img/button.png" border="0" style="margin-left: -10px;"
                               name="submit" alt="PayPal — более безопасный и легкий способ оплаты через Интернет!">

                    </form>
                </div>
            </div>

            <div class="tabs_05">
                <a href="#pay_text_05">
                    <div class="pay_head_05">
                        <div class="pay_span">
                            <div class="pay_h1">Pay with Monero</div>
                            <div class="pay_h2">Transiction fee may apply</div>
                        </div>
                        <div class="pay_img_m"><img src="../img/pay_05.png" style="box-shadow:none;"></div>
                    </div>
                </a>
                <div id="pay_text_05">
                    <div id="pay_visa_h1">Monero accepted here</div>
                    <div id="pay_visa_h1">4AHt<wbr>ZCaH<wbr>Jx8V<wbr>bpKE<wbr>jA1k<wbr>j91G<wbr>jZ94<wbr>XLJz<wbr>fVop<wbr>3pzi<wbr>JVXB<wbr>Jb6s<wbr>HXQ2<wbr>Xz8N<wbr>FNcK<wbr>i5ZQ<wbr>xPbx<wbr>Ex2i<wbr>2iLq<wbr>vfoG<wbr>zURz<wbr>kUSf<wbr>D83d<wbr>BSP</div>
                    </div>
                </div>


            <div class="tabs_06">
                <a href="#pay_text_06">
                    <div class="pay_head_06">
                        <div class="pay_span">
                            <div class="pay_h1">Pay with Dash</div>
                            <div class="pay_h2">Transiction fee may apply</div>
                        </div>
                        <div class="pay_img_m"><img src="../img/pay_06.png" style="box-shadow:none;"></div>
                    </div>
                </a>
                <div id="pay_text_06">
                    <div id="pay_visa_h1">Dash accepted here</div>
                    <div id="pay_visa_h1">XhEA<wbr>JMxS<wbr>JSZF<wbr>WS14<wbr>dYbm<wbr>J1uE<wbr>82pB<wbr>nxa<wbr>sCM</div>
                </div>
            </div>

            <div class="tabs_07">
                <a href="#pay_text_07">
                    <div class="pay_head_07">
                        <div class="pay_span">
                            <div class="pay_h1">Pay with Litecoin</div>
                            <div class="pay_h2">Transiction fee may apply</div>
                        </div>
                        <div class="pay_img_m"><img src="../img/pay_07.png" style="box-shadow:none;"></div>
                    </div>
                </a>
                <div id="pay_text_07">
                    <div id="pay_visa_h1">Litecoin accepted here</div>
                    <div id="pay_visa_h1">LW3w<wbr>gQtZ<wbr>htR2<wbr>G5Uv<wbr>48rSz<wbr>onFd<wbr>1arh<wbr>UfjE9</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- pay --->

<section id="pay_cont_1_section">
    <div class="container subheader" id="pay_cont_3">
        <p class="">Not now, take me to the <a href="#">download</a> > </p>
        <hr>
    </div>
</section>


<section id="pay_h2_section">
    <div class="container subheader" id="pay_h">
        <h3 class="editable">Functionality & Futures</h3>
        <p class="editable">Another text field</p>
    </div>
</section>

<section id="ticket_section">
    <div class="container subheader" id="ticket_cont_1">
        <div id="t_0">

            <div id="t_first_ok">
                <div id="t_span_first_ok"></div>
                <div id="t_number_ok">T161</div>
                <div id="t_text_ok">Whonix running as Qubes DispVM use saved clock</div>
                <div id="clear">
                </div>
            </div>


            <div id="t_first_none">
                <div id="t_span_second_none"></div>
                <div id="t_number_ok">T162</div>
                <div id="t_text_ok">Whonix running as Qubes DispVM use saved clock</div>
                <div id="clear">
                </div>
            </div>

            <div id="t_second">
                <div id="t_line_second_ok"></div>
                <div id="t_span_second_ok"></div>
                <div id="t_number_ok">T163</div>
                <div id="t_text_ok">Tor Browser 7.0a2 broken in stretch based Whonix 14 - jemalloc</div>
                <div id="clear">
                </div>
            </div>

            <div id="t_second">
                <div id="t_line_second_ok"></div>
                <div id="t_span_second_ok"></div>
                <div id="t_number_ok">T164</div>
                <div id="t_text_ok">Speed up libvirt tarball creation time</div>
                <div id="clear">
                </div>
            </div>

            <div id="t_second">
                <div id="t_line_second_ok"></div>
                <div id="t_span_second_ok"></div>
                <div id="t_number_ok">T165</div>
                <div id="t_text_ok">Make sure Qubes-Whonix has no access to clocksource=xen</div>
                <div id="clear">
                </div>
            </div>

            <div id="t_second">
                <div id="t_line_second_ok"></div>
                <div id="t_span_second_ok"></div>
                <div id="t_number_ok">T166</div>
                <div id="t_text_ok">Sdwdate sclockadj change time without spamming logs</div>
                <div id="clear">
                </div>
            </div>

            <div id="t_second_none">
                <div id="t_line_second_none"></div>
                <div id="t_span_second_none"></div>
                <div id="t_number_ok">T167</div>
                <div id="t_text_ok">Use whonixcheck Whonix News to count Whonix users</div>
                <div id="clear">
                </div>
            </div>

            <div id="t_second_none">
                <div id="t_line_second_none"></div>
                <div id="t_span_second_none"></div>
                <div id="t_number_ok">T168</div>
                <div id="t_text_ok">Change bindp compile to postinstall</div>
                <div id="clear">
                </div>
            </div>

            <div id="t_second_none">
                <div id="t_line_second_none"></div>
                <div id="t_span_second_none"></div>
                <div id="t_number_ok">T169</div>
                <div id="t_text_ok">Supress VB error messages</div>
                <div id="clear">
                </div>
            </div>

            <div id="t_second_none">
                <div id="t_line_second_none"></div>
                <div id="t_span_second_none"></div>
                <div id="t_number_ok">T170</div>
                <div id="t_text_ok">Tb-updater onion mirros downloads support</div>
                <div id="clear">
                </div>
            </div>
</section>


<section>
    <div class="container subheader">
        <h3>Share Whonix with your friends:</h3>
        <p><a href="https://twitter.com/intent/tweet?url=https://www.whonix.org&text=&via=Whonix"><img
                        src="../img/twitter.png" class="editable"></a><a> </a><a
                    href="https://facebook.com/sharer.php?u=https://www.whonix.org"><img src="../img/facebook2.png"
                                                                                         class="editable"></a><a> </a><a
                    href="https://plus.google.com/share?url=https://www.whonix.org"><img src="../img/google-plus.png"
                                                                                         class="editable"></a></p>
    </div>
</section>

<footer>
    <div class="container">
        <p><a href="https://www.whonix.org/wiki/Impressum">Impressum</a><a> </a><a
                    href="https://www.whonix.org/wiki/Datenschutz">Datenschutz</a><a> </a><a
                    href="https://www.whonix.org/wiki/Haftungsausschluss">Haftungsausschluss</a><a> </a><a
                    href="https://www.whonix.org/wiki/Donate">Donate</a><a> </a><a
                    href="https://www.whonix.org/wiki/Investors">Investors</a></p>
    </div>


</footer>
</body>
</html>
