<?PHP
$_OPTIMIZATION["title"] = "Shaxsiy hisob";
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users_a WHERE db_users_a.id = '$user_id'");
$prof_data = $db->FetchArray();
?>
								<div class="s-bk-lf">
									<div class="acc-title">Click.Uz</div>
								</div>
								
								<div class="silver-bk0" align="center"><div class="clr"></div>
<form action="https://my.click.uz/pay/" id="click_form" method="post" target="_blank"> 
  <input id="click_amount_field" type="hidden" name="MERCHANT_TRANS_AMOUNT" value="1000" class="click_input" />
  <input type="hidden" name="MERCHANT_ID" value="1"/>
  <input type="hidden" name="RETURN_URL" value="https://uzchange.ru"/>
  <input type="hidden" name="MERCHANT_ID" value="1"/>
  <input type="hidden" name="MERCHANT_USER_ID" value="11"/>
  <input type="hidden" name="MERCHANT_SERVICE_ID" value="111"/>
  <input type="hidden" name="MERCHANT_TRANS_ID" value="11"/> 
  <input type="hidden" name="MERCHANT_TRANS_NOTE" value="Оплата OOO MERCHANT"/>          
  <input type="hidden" name="MERCHANT_USER_PHONE" value="9989XYYYXXYY"/> 
  <input type="hidden" name="MERCHANT_USER_EMAIL" value="mail@server.com"/> 
  <input type="hidden" name="SIGN_TIME" value="11.01.2018"/>
  <input type="hidden" name="SIGN_STRING" value="212"/>
  <button class="click_logo"><i>1</i>CLICK orqali to`lash</button>         
</form>
<div id="click_button" class="field" style="display: none;">      
  <button type="submit" class="click_logo"><i></i>CLICK orqali to`lash</button>
</div>
 <br>
 <p>Hisobingizga mablag' to'lov tekshirilgandan so'ng qo'shiladi. Odatda bu 15 daqiqadan 12 soatgacha vaqt oladi...</p>
</form>
</font></div>

								<div class="clr"></div>	
								</div>
								
