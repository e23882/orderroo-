<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Knewave|Shadows+Into+Light" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	
    <title>花連住宿</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<style>
	@import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css);


	a
	{
		color:white;
		font-family:font-family: 'Gloria Hallelujah', cursive;
	}
	.navstyle
	{
		font-family:'cwTeXYen', sans-serif;
		padding-left:5px;
		padding-top:5px;
		padding-bottom:5px;
		padding-right:20px;
		font-size:20px;
		
	}
	</style>
</head>

<body>
    <main id="site-content" role="main" tabindex="-1">
        <div class="_1ta0kyw">
            <section>
                <div data-veloute="landing_page_sections">
                    <div itemprop="itemList" itemscope="" itemtype="http://schema.org/ItemList">
                        <div class="_e296pg" data-veloute="landing_page_header">
                            <div>
								
                                <div class="_bp34sw">
								
                                    <div class="_5rbuw4">
									
                                        <div class="_2o6ibk">
											
											<!--banner img-->
                                            <img class="_154ar5hp" sizes="100vw" srcset="https://a0.muscache.com/airbnb/growth/magic_carpet/hero4_medium.jpg 775w,https://a0.muscache.com/airbnb/growth/magic_carpet/hero4_large.jpg 1550w,https://a0.muscache.com/airbnb/growth/magic_carpet/hero4_large@2x.jpg 3100w">
											<!--end block : banner img-->
                                        </div>
                                    </div>
										<a class="_19rvy71" href="index.php" style="font-family: 'Gloria Hallelujah', cursive;">
											<b>
												Hualien
											</b>
										</a>
									<div class="_19rvy71" style="position:absolute;right:12%;">
									
										<nav style="padding:13px;">
											<a class="navstyle" href="total.php?p_id=1">住宿總覽</a>
											<a class="navstyle" href="recommendDefault.php">推薦住宿</a>
											<a class="navstyle" href="active.php">交通資訊</a>
											<a class="navstyle" href="login.html">登入/註冊</a>											
										</nav>
									</div>
									<?php
										
										try
										{
											session_start();
											if($_SESSION['user']!="")
												echo "<div style='position:absolute;right:5%;top:6%;font-family:微軟正黑體;color:white;'><a href='logout.php'>登出 ".$_SESSION['user']."</a></div>";
											else
												echo "<div style='position:absolute;right:5%;top:6%;font-family:微軟正黑體;color:white;display:none;'><a href='logout.php'>登出 ".$_SESSION['user']."</a></div>";										
										}
										catch(Exceptions $ie)
										{
											echo $ie;
										}
										
										
										
									?>
                                    <div class="_u7mw6s">
                                        <div class="_djxl322">
                                            <div class="_ni9axhe">
                                                <div class="_ovebx1" style="background-color:transparent">
													<!-- main form -->
                                                    <div class="_7f8yg7m">
                                                        <div class="_1yim2mcp">
                                                            <h1 class="_tpbrp">查詢理想住宿</h1>
                                                        </div>
                                                        <div class="_1dt8c2w">
                                                            填寫下面的表格以獲得即時搜尋
                                                        </div>
                                                        <div>
                                                            <div class="_slilk2">
                                                                <form id="MagicCarpetSearchBar" method="POST" action="index.php">
                                                                    <div style="margin-top:16px;margin-bottom:16px">
                                                                        <div id="lp-guestpicker">
                                                                            <div class="_2h22gn">
                                                                                <div class="_iq8x9is">
                                                                                    <div style="margin-bottom:8px">
																						<label class="_rin72m" for="adults">
																					<small class="_13dbiegr">住宿類別</small>
																					</label>
																					</div>
                                                                                    <div class="_9hxttoo">
                                                                                        <div class="_az0uecb">
                                                                                            <div class="_y9ev9r">
																								<select id="type" name="type" class="_10p0m0gl" data-vars-select-name="type">
																									<option selected="" value="民宿">民宿</option>
                                                                                                    <option value="旅館">旅館</option>
																								</select>
																							</div>
																							<span class="_1pzmvmb">
																								<svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height:16px;width:16px;display:block;fill:#484848">
																									<path d="m16.29 4.3a1 1 0 1 1 1.41 1.42l-8 8a1 1 0 0 1 -1.41 0l-8-8a1 1 0 1 1 1.41-1.42l7.29 7.29z" fill-rule="evenodd"></path>
																								</svg>
																							</span>
																						</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="_iq8x9is">
                                                                                    <div style="margin-bottom:8px">
																						<label class="_rin72m" for="adults">
																					<small class="_13dbiegr">住宿地區</small>
																					</label>
																					</div>
                                                                                    <div class="_9hxttoo">
                                                                                        <div class="_az0uecb">
                                                                                            <div class="_y9ev9r">
																								<select id="town" name="town" class="_10p0m0gl" data-vars-select-name="town">
																						<option selected="" value="花蓮">花蓮市</option>
																									<option value="新城">新城鄉</option>
																									<option value="秀林">秀林鄉</option>
																									<option value="吉安">吉安鄉</option>
																									<option value="壽豐">壽豐鄉</option>
																									<option value="鳳林">鳳林鎮</option>
																									<option value="萬榮">萬榮鄉</option>
																									<option value="光復">光復鄉</option>
																									<option value="豐濱">豐濱鄉</option>
																									<option value="瑞穗">瑞穗鄉</option>
																									<option value="玉里">玉里鎮</option>
																									<option value="卓溪">卓溪鄉</option>
																									<option value="富里">富里鄉</option>
																								</select>
																							</div>
																							<span class="_1pzmvmb">
																								<svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height:16px;width:16px;display:block;fill:#484848">
																									<path d="m16.29 4.3a1 1 0 1 1 1.41 1.42l-8 8a1 1 0 0 1 -1.41 0l-8-8a1 1 0 1 1 1.41-1.42l7.29 7.29z" fill-rule="evenodd"></path>
																								</svg>
																							</span>
																						</div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
																	
                                                                    <div style="margin-top:16px;margin-bottom:16px">
                                                                        <div class="_e296pg">
                                                                            <div style="margin-top:8px">
                                                                                <div class="_2h22gn">
                                                                                    <div class="_iq8x9is">
                                                                                        <div style="margin-bottom:8px">
																							<label class="_rin72m" for="checkin_input">
																								<small class="_13dbiegr">入住日期</small>
																							</label>
																						</div>
                                                                                        <div data-veloute="moweb_datepicker_checkin_input">
                                                                                            <div class="_9hxttoo">
                                                                                                <div dir="ltr">
                                                                                                    <div class="_1tx6b0vq">
                                                                                                        <div class="_178faes">
																											<!-- <input type="text" class="_25c3we3" data-veloute="checkin_input" id="checkin_input" name="checkin" placeholder="年-月-日" value="" readonly=""/> -->
																											<input type="date" name="arrive" style="border:0px;width:100%;padding:11px !important;font-size:16px !important;color:light-gray;"/>
																										</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_iq8x9is">
                                                                                        <div style="margin-bottom:8px"><label class="_rin72m" for="checkout_input"><small class="_13dbiegr">退房日期</small></label></div>
                                                                                        <div data-veloute="moweb_datepicker_checkout_input">
                                                                                            <div class="_9hxttoo">
                                                                                                <div dir="ltr">
                                                                                                    <div class="_1tx6b0vq">
                                                                                                        <!-- <div class="_178faes"><input type="text" class="_25c3we3" data-veloute="checkout_input" id="checkout_input" name="checkout" placeholder="年-月-日" value="" readonly=""></div> -->
																										<input type="date" name="leave" style="border:0px;width:100%;padding:11px !important;font-size:16px !important;color:light-gray;"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="margin-top:16px;margin-bottom:16px">
                                                                        <div id="lp-guestpicker">
                                                                            <div class="_2h22gn">
                                                                                <div class="_iq8x9is">
                                                                                    <div style="margin-bottom:8px">
																						<label class="_rin72m" for="price">
																					<small class="_13dbiegr">價格</small>
																					</label>
																					</div>
                                                                                    <div class="_9hxttoo">
                                                                                        <div class="_az0uecb">
                                                                                            <div class="_y9ev9r">
																								<select id="price" name="price" class="_10p0m0gl" data-vars-select-name="price">
																									<option selected="" value="1">0~2000</option>
                                                                                                    <option value="2">2001~4000</option>
                                                                                                    <option value="3">4001~6000</option>
                                                                                                    <option value="4">6000~</option>
																								</select>
																							</div>
																							<span class="_1pzmvmb">
																								<svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height:16px;width:16px;display:block;fill:#484848">
																									<path d="m16.29 4.3a1 1 0 1 1 1.41 1.42l-8 8a1 1 0 0 1 -1.41 0l-8-8a1 1 0 1 1 1.41-1.42l7.29 7.29z" fill-rule="evenodd"></path>
																								</svg>
																							</span>
																						</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="_iq8x9is">
                                                                                    <div style="margin-bottom:8px"><label class="_rin72m" for="Reservation"><small class="_13dbiegr">房型</small></label></div>
                                                                                    <div class="_9hxttoo">
                                                                                        <div class="_14ujy3s2">
                                                                                            <div class="_y9ev9r">
																								<select id="Reservation" name="Reservation" class="_10p0m0gl" data-vars-select-name="Reservation">
																									<option selected="" value="單人房">單人房</option>
                                                                                                    <option value="雙人房">雙人房</option>
                                                                                                    <option value="套房">套房</option>
                                                                                                    <option value="其它">其它</option>
																								</select></div>
																								<span class="_1pzmvmb">
																									<svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height:16px;width:16px;display:block;fill:#484848">
																										<path d="m16.29 4.3a1 1 0 1 1 1.41 1.42l-8 8a1 1 0 0 1 -1.41 0l-8-8a1 1 0 1 1 1.41-1.42l7.29 7.29z" fill-rule="evenodd"></path>
																									</svg>
																								</span>
																						</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
																	
                                                                    <div id="lp-search-button" data-veloute="search_bar_small_search_button"><button type="submit" class="_12cyg0af" aria-busy="false"><span class="_cgr7tc7"><span>搜尋</span></span></button></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
													<?php
														if(isset($_POST['type']))
														{
															echo "<h2 style='padding:10px;background-color:white;height:152px;width:400px;position:absolute;right:3%;top:0px;background: rgba(30%,30%,30%,0.3);color:white;'>".$_POST['town']."一週天氣</h2><div style='background-color:white;height:11 0px;width:400px;position:absolute;right:3%;top:60px;background: rgba(30%,30%,30%,0.3);color:white;' id='weather'></div>";
														}
													?>
													

													<!-- end block main form -->
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div data-veloute="landing_page_section_SEO_HOMES">
                            <div class="_ovebx1" style="background-color:transparent">
                                <div>
                                    <div class="_aov0j6">
									<?php
										require_once 'ConnectionFactory.php';
                                        echo "<section>";
                                            echo "<!--block main title -->";
                                            echo "<div style='margin-bottom:20px'>";
												try
												{
													$conn = ConnectionFactory::getFactory()->getConnection();
													if(isset($_POST['type']))
													{
														echo "<div>";
																echo "<div>";
																	echo "<div class='_z0mpwy'>";
																		echo "<h3 class='_jmmm34f'>";
																			echo "<div>";
																				echo "搜尋結果";
																			echo "</div>";
																		echo "</h3>";
																	echo "</div>";
																echo "</div>";
															echo "</div>";
														echo "</div>";
														echo "<!-- end block main title -->";
														echo "<div>";
															echo "<div>";
																echo "<div>";
																	echo "<div class='_6htn2u'>";
																		echo "<div class='_11iocrd2'>";
																			echo "<!--圖片 標題一 標題二-->";
																			echo "<div class='_xp8unx0'>";
																				echo "<!-- 項目起始block -->";
														if($_POST['price']==1)//0~2000
														{
															$stmt = $conn->prepare("select hotel_id, name, type, address, phone from hotel where name like '%".$_POST['type']."%' and address like'%".$_POST['town']."%' and type like '%".$_POST['Reservation']."%' and max_price < 2000");
															$stmtInsert = $conn->prepare("insert into newLog (city, price, type, roomType, user) values('".$_POST['town']."','0~2000','".$_POST['type']."','".$_POST['Reservation']."','".$_SESSION['user']."')");
														}
														else if($_POST['price']==2)//2001~4000
														{
															$stmt = $conn->prepare("select hotel_id, name, type, address, phone from hotel where name like '%".$_POST['type']."%' and address like'%".$_POST['town']."%' and type like '%".$_POST['Reservation']."%' and max_price < 4000 and min_price < 4000  and max_price > 2000 and min_price > 2000 ");
															$stmtInsert = $conn->prepare("insert into newLog (city, price, type, roomType, user) values('".$_POST['town']."','2001~4000','".$_POST['type']."','".$_POST['Reservation']."','".$_SESSION['user']."')");
														}
														else if($_POST['price']==3)//4001~6000
														{
															$stmt = $conn->prepare("select hotel_id, name, type, address, phone from hotel where name like '%".$_POST['type']."%' and address like'%".$_POST['town']."%' and type like '%".$_POST['Reservation']."%' and max_price < 6000 and min_price > 4000");
															$stmtInsert = $conn->prepare("insert into newLog (city, price, type, roomType, user) values('".$_POST['town']."','4001~6000','".$_POST['type']."','".$_POST['Reservation']."','".$_SESSION['user']."')");
														}
														else if($_POST['price']==4)//6000up
														{
															$stmt = $conn->prepare("select hotel_id, name, type, address, phone from hotel where name like '%".$_POST['type']."%' and address like'%".$_POST['town']."%' and type like '%".$_POST['Reservation']."%' and max_price >6000");
															$stmtInsert = $conn->prepare("insert into newLog (city, price, type, roomType, user) values('".$_POST['town']."','6000 up','".$_POST['type']."','".$_POST['Reservation']."','".$_SESSION['user']."')");
														}
														if($_SESSION['user']!="")
														{
															$stmtInsert->execute();
														}
														
														$stmt->execute();
														
														$result = $stmt->fetchAll(PDO::FETCH_CLASS);
															
														$count = 0;
														foreach ($result as $value) 
														{
															
															echo "<div class='_e7sx5ak'><div class='_15fckrt'><div data-veloute='listings_section_listing_card'><div itemprop='itemListElement' itemscope='' itemtype='http://schema.org/ListItem'><div id='listing-1878938' class='_f21qs6'><div><div><div class='_1dp4576'><div><div aria-hidden='true' class='_e296pg'><div><div class='_o71trrf' style='padding-top:66.6667%;background:#D8D8D8'><div class='_1szwzht'><!-- item img block --><div class='_e296pg' style='width:100%;height:100%'>";

															echo "<div class='_1df8dftk' style='width:100%;height:100%;background-image:url(img//housedemo.jpg)'>";

															echo "</div></div><!--end block item img--></div></div></div></div></div></div><div class='_v72lrv'><!-- 項目主標題 副標題 --><div><a href='detail.php?h_id=".$value->hotel_id."' target='_self' rel='noopener' data-check-info-section='true' class='_15ns6vh'><div><div class='_wuffzwa' style='color:#39576a'><div class='_1etkxf1' style='color:#39576a'><small class='_13dbiegr'><span style='color:#39576a'><span>".$value->name."</span></span></small></div></div></div><div style='margin-top:4px'><div class='_1pkilk3o'><div class='_jnrahhr'><small>".$value->address."</small></div></div></div></a></div><!-- end block 項目主標題 副標題 --></div></div></div></div></div></div></div></div>";
														}
														echo "</hr>";
														echo "<div>";
																echo "<div>";
																	echo "<div class='_z0mpwy'>";
																		echo "<h3 class='_jmmm34f'>";
																			echo "<div>";
																				echo "近期活動";
																			echo "</div>";
																		echo "</h3>";
																	echo "</div>";
																echo "</div>";
															echo "</div>";
														echo "</div>";
														$stmtActive = $conn->prepare("select * from activity where from_date >'".$_POST['arrive']."' and to_date < '".$_POST['leave']."'");
														$stmtActive->execute();
														$resultAct = $stmtActive->fetchAll(PDO::FETCH_CLASS);
														$conn = null;	
														
														foreach ($resultAct as $value) 
														{
															echo "<div class='_e7sx5ak'><div class='_15fckrt'><div data-veloute='listings_section_listing_card'><div itemprop='itemListElement' itemscope='' itemtype='http://schema.org/ListItem'><div id='listing-1878938' class='_f21qs6'><div><div><div class='_1dp4576'><div><div aria-hidden='true' class='_e296pg'><div><div class='_o71trrf' style='padding-top:66.6667%;background:#D8D8D8'><div class='_1szwzht'><!-- item img block --><div class='_e296pg' style='width:100%;height:100%'>";

															echo "<div class='_1df8dftk' style='width:100%;height:100%;background-image:url(img//actCom.jpg)'>";

															echo "</div></div><!--end block item img--></div></div></div></div></div></div><div class='_v72lrv'><!-- 項目主標題 副標題 --><div><div><div class='_wuffzwa' style='color:#39576a'><div class='_1etkxf1' style='color:#39576a'><small class='_13dbiegr'><span style='color:#39576a'><span>".$value->location."</span></span></small></div></div></div><div style='margin-top:4px'><div class='_1pkilk3o'><div class='_jnrahhr'><small>".$value->title."</small></div></div></div></div><!-- end block 項目主標題 副標題 --></div></div></div></div></div></div></div></div>";
														
														}
													}
													else
													{
														echo "<div>";
																echo "<div>";
																	echo "<div class='_z0mpwy'>";
																		echo "<h3 class='_jmmm34f'>";
																			echo "<div>";
																				echo "最新的花蓮活動";
																			echo "</div>";
																		echo "</h3>";
																	echo "</div>";
																echo "</div>";
															echo "</div>";
														echo "</div>";
														echo "<!-- end block main title -->";
														echo "<div>";
															echo "<div>";
																echo "<div>";
																	echo "<div class='_6htn2u'>";
																		echo "<div class='_11iocrd2'>";
																			echo "<!--圖片 標題一 標題二-->";
																			echo "<div class='_xp8unx0'>";
																				echo "<!-- 項目起始block -->";
														$stmt = $conn->prepare('select a_id, name, image, detail from active');
														$stmt->execute();
														$result = $stmt->fetchAll(PDO::FETCH_CLASS);
														$conn = null;
														foreach ($result as $value) 
														{
															
															echo "<div class='_e7sx5ak'><div class='_15fckrt'><div data-veloute='listings_section_listing_card'><div itemprop='itemListElement' itemscope='' itemtype='http://schema.org/ListItem'><div id='listing-1878938' class='_f21qs6'><div><div><div class='_1dp4576'><div><div aria-hidden='true' class='_e296pg'><div><div class='_o71trrf' style='padding-top:66.6667%;background:#D8D8D8'><div class='_1szwzht'><!-- item img block --><div class='_e296pg' style='width:100%;height:100%'>";

															echo "<div class='_1df8dftk' style='width:100%;height:100%;background-image:url(img/".$value->image.")'>";

															echo "</div></div><!--end block item img--></div></div></div></div></div></div><div class='_v72lrv'><!-- 項目主標題 副標題 --><div><a href='activeDetail.php?a_id=".$value->a_id."' target='_self' rel='noopener' data-check-info-section='true' class='_15ns6vh'><div><div class='_wuffzwa' style='color:#39576a'><div class='_1etkxf1' style='color:#39576a'><small class='_13dbiegr'><span style='color:#39576a'><span>".$value->name."</span></span></small></div></div></div><div style='margin-top:4px'><div class='_1pkilk3o'><div class='_jnrahhr'><small>".$value->detail."</small></div></div></div></a></div><!-- end block 項目主標題 副標題 --></div></div></div></div></div></div></div></div>";
														}
													}
													
													
												}
												catch (PDOException $e) 
												{
													echo "<a href='index.php'>查詢不到物件</a>";
												}
											
																	
																	echo "<!-- 項目結束block -->";
																
																echo "</div>";
                                                                echo "<!--end block 圖片 標題一 標題二-->";
                                                            echo "</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo "</div>";
                                            echo "</div>";
											
											
                                        echo "</section>";
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<script>
		function makeRequest() 
		{
		  xhr = new XMLHttpRequest();
		  xhr.onload = function() {
			   console.log(this.responseText);
			var response = JSON.parse(this.responseText);
			var city = response.city.name + ', ' + response.city.country;
			var weatherTitle = response.list[0].weather[0].main;
			var temp = response.list[0].main.temp + '°';
			var weather=['','','','','','','','',''];
			var temp=['','','','','','','','','']
			
			var i;
			for(i=1;i<8;i++)
			{
				if(response.list[i].weather[0].main=="Clear")
				{
					weather[i]="<img src='sun.png' style='width:50px;' />";
				}
				else if(response.list[i].weather[0].main=="Clouds")
				{
					weather[i]="<img src='cloud.png' style='width:50px;' />";
				}
				else if(response.list[i].weather[0].main=="Rain")
				{
					weather[i]="<img src='rain.png' style='width:50px;' />";
				}
				temp[i]=response.list[i].main.temp + "°";
			}
		  
			var weatherContainer = document.querySelector("#weather");
			weatherContainer.innerHTML = 
			
			"<table style='font-weight:bold;padding:3px;bac'>"+
			"<tr><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>Sun</td>"+
			"<tr>"+
			"<td>"+weather[1]+"</td>"+
			"<td>"+weather[2]+"</td>"+
			"<td>"+weather[3]+"</td>"+
			"<td>"+weather[4]+"</td>"+
			"<td>"+weather[5]+"</td>"+
			"<td>"+weather[6]+"</td>"+
			"<td>"+weather[7]+"</td>"+
			"</tr>"+
			"<tr>"+
			"<td>"+temp[1]+"</td>"+
			"<td>"+temp[2]+"</td>"+
			"<td>"+temp[3]+"</td>"+
			"<td>"+temp[4]+"</td>"+
			"<td>"+temp[5]+"</td>"+
			"<td>"+temp[6]+"</td>"+
			"<td>"+temp[7]+"</td>"+
			"</tr>"+
			"<table>";
		  };
		  xhr.open(
			"GET",
			<?php
				if(isset($_POST['town']))
				{
					if($_POST['town']=="花蓮")
					{
						echo "'https://api.openweathermap.org/data/2.5/forecast?q=Hualien,tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
					}
					else if($_POST['town']=="新城")
					{
						echo "'https://api.openweathermap.org/data/2.5/forecast?q=Xincheng,tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
					}
					else if($_POST['town']=="秀林")
					{
						echo "'https://api.openweathermap.org/data/2.5/forecast?q=Xiulin,tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
					}
					else if($_POST['town']=="壽豐")
					{
						echo "'https://api.openweathermap.org/data/2.5/forecast?q=Shoufeng,tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
					}
					else if($_POST['town']=="鳳林")
					{
						echo "'https://api.openweathermap.org/data/2.5/forecast?q=FengLin,tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
					}
					else if($_POST['town']=="萬榮")
					{
						echo "'https://api.openweathermap.org/data/2.5/forecast?q=Wanrong,tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
					}
					else if($_POST['town']=="光復")
					{
						echo "'https://api.openweathermap.org/data/2.5/forecast?q=Guangfu,tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
					}
					else
					{
						echo "'https://api.openweathermap.org/data/2.5/forecast?q=Hualien,tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
					}
					
					
				}
				
				
			?>
			true
		  );
		  xhr.send();
		}
		makeRequest();
	</script>
        </div>
        </div>
        </div>

    </main>


</body>

</html>