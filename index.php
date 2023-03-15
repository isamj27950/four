
		<!-- header -->
		<?php
		
    	
		include('partials/_header.php')
		?>

		<!-- hero -->
		<div class="" id="hero">
			<h1>Bienvenue au <span class="text_primary">Four</span></h1>
			<p>Nos recettes sont chouettes</p>
			<a href="" class="btn_primary">En savoir plus</a>
			<div class="trait"></div>
		</div>
		<!-- end hero -->

		<!-- body/content -->
		<main>
			<!-- section sucré -->
			<section class="container  pt-24 pb-24">
			<h2 class="section_h2 text-5xl text-[#333A7B]-600 pb-10 font-semibold">Nos gateaux sucrés</h2>
				<div class="section_card flex place-content-between">
					<!-- card1 -->
					<a href="product.php">
						<div class="card_container rounded-3xl shadow-md w-72 bg-white">
							<!-- box image -->
							<div class="image h-56">
								<img src="images/yaourt.jpeg" alt="gateau au yaourt" class="w-full h-full object-over" />
							</div>
							<!-- card body -->
							<div class="card_body px-7 py-5">
								<h3 class="pb-4 font-black">Gateau au yaourt</h3>
								<div class="card_description">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light flex justify-between items-center pt-2">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
					<!-- card2 -->
					<a href="product.php">
						<div class="card_container rounded-2XL shadow-md w-72 bg-white ">
							<!-- box image -->
							<div class="image h-56 ">
								<img
									src="images/gateau_chocolat.jpeg"
									alt="gateau au chocolat"
									class="w-full h-full object-over"
								/>
							</div>
							<!-- card body -->
							<div class="card_bodypx-7 py-5 ">
								<h3 class="pb-4 font-black">Gateau au chocolat</h3>
								<div class="card_description">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light flex justify-between items-center pt-2 ">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
					<!-- card3 -->
					<a href="product.php">
						<div class="card_container rounded-2XL shadow-md w-72 bg-white">
							<!-- box image -->
							<div class="image h-56">
								<img src="images/brownies_couverture.jpg" alt="brownies"class="w-full h-full object-over" />
							</div>
							<!-- card body -->
							<div class="card_bodypx-7 py-5 ">
								<h3 class="pb-4 font-black">Browny</h3>
								<div class="card_description">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
										Accusamus, iure!
									</p>
								</div>
								<div class="card_body_bottom text-gray-light flex justify-between items-center pt-2">
									<p>3 avis</p>
									<p class="text-right text-sm">
										Note : <span class="text-bold-700">3/5</span>
									</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- button more ++ -->
				<div class="btn_moreflex -justify-end items-center pt-10 text-xl text-[ #333A7B] ">
					<a href="">Voir plus</a>
					<i class="fa-solid fa-circle-arrow-right"></i>
				</div>
			</section>
			<!-- section salé -->
			<section class="bg-section-gray">
				<div class="container">
					<h2 class="section_h2 text-5xl text-[#333A7B]-600 pb-10 font-semibold pt-5">Nos gateaux salés</h2>
					<div class="section_card flex place-content-between">
						<!-- card1 -->
						<a href="product.html">
							<div class="card_container rounded-2XL shadow-md w-72 bg-white">
								<!-- box image -->
								<div class="image h-56">
									<img
										src="images/gateau-de-paques-sale.jpg"
										alt="gateau au yaourt"
										class="w-full h-full object-over"
									/>
								</div>
								<!-- card body -->
								<div class="card_body px-7 py-5">
									<h3 class="pb-4 font-black" >Gateau de pâque salé</h3>
									<div class="card_description">
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit.
											Accusamus, iure!
										</p>
									</div>
									<div class="card_body_bottom text-gray-light">
										<p>3 avis</p>
										<p class="text-right text-sm">
											Note : <span class="text-bold-700">3/5</span>
										</p>
									</div>
								</div>
							</div>
						</a>
						<!-- card2 -->
						<a href="product.html">
							<div class="card_container rounded-2XL shadow-md w-72 bg-white ">
								<!-- box image -->
								<div class="image h-56">
									<img src="images/salt_1.jpeg" alt="gateau au chocolat"class="w-full h-full object-over" />
								</div>
								<!-- card body -->
								<div class="card_body px-7 py-5">
									<h3 class="pb-4 font-black">Gateau courgette/champignon/lardon</h3>
									<div class="card_description">
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit.
											Accusamus, iure!
										</p>
									</div>
									<div class="card_body_bottom text-gray-light">
										<p>3 avis</p>
										<p class="text-right text-sm">
											Note : <span class="text-bold-700">3/5</span>
										</p>
									</div>
								</div>
							</div>
						</a>
						<!-- card3 -->
						<a href="product.html">
							<div class="card_container rounded-2XL shadow-md w-72 bg-white">
								<!-- box image -->
								<div class="image h-56">
									<img src="images/salt_fromage.jpeg" alt="brownies"class="w-full h-full object-over"/>
								</div>
								<!-- card body -->
								<div class="card_body px-7 py-5">
									<h3 class="pb-4 font-black" >Gateau au fromage</h3>
									<div class="card_description">
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit.
											Accusamus, iure!
										</p>
									</div>
									<div class="card_body_bottom text-gray-light">
										<p>3 avis</p>
										<p class="text-right text-sm">
											Note : <span class="text-bold-700">3/5</span>
										</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<!-- button more ++ -->
					<div class="btn_more flex -justify-end items-center pt-10 text-xl text-[ #333A7B] ">
						<a href="">Voir plus</a>
						<i class="fa-solid fa-circle-arrow-right m rounded-xl ml-5 "></i>
					</div>
				</div>
			</section>
			<!-- image publicité -->
			<section class="container section_twitch pt-12">
				<!-- card twitch -->
				<div class="box_twitch_container flex bg-[#f7f7f7] p-10 justify-between">
					<!-- box body -->
				<div class="body_box_twitch w-[45%] pt-5 pr-12 ">
						<div class="box_body_title_twitch flex items-center pb-3 text-3xl uppercase text-[#333A7B] font-black">
							<h4>Live Twitch</h4>
							<i class="fa-brands fa-twitch" aria-hidden="true"></i>
						</div> 
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Perspiciatis hic nulla eum tempore, excepturi sequi earum ipsam at
							minus dolore. Lorem ipsum dolor sit amet consectetur adipisicing
							elit. Cumque exercitationem architecto laudantium deserunt tempore
							corporis ipsum ea fugiat nostrum perspiciatis.
						</p>
						<div class="btn_container_twitch mt-5">
							<a href="" class="btn_twitch border-2 boder-[#2d336f96] rounded-3xl text-[#333A7B] p-2.5 hover:[#f5f6ff]">Découvrez nos lives Twitch</a>
						</div>
					</div>
					<!-- box image -->
					<div class="box_img_twitch w-[45%]">
						<a href="https://www.twitch.tv/" target="_blank">
							<img src="images/cooking.avif" alt="" />
						</a>
					</div>
				</div>

				<!-- card live cooking -->
				<div class="box_card_cooking mt-12 flex flex-row-reverse justify-between p-10 bg-[#f7f7f7] shadow mb-10">
					<!-- box body -->
					<div class="body_box_twitch w-[45%] pt-5 pr-12">
						<div class="box_body_title_twitch flex items-center pb-3 text-3xl uppercase text-[#333A7B] font-black">
							<h4>Live Twitch</h4>
							<i class="fa-brands fa-twitch" aria-hidden="true"></i>
						</div>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Perspiciatis hic nulla eum tempore, excepturi sequi earum ipsam at
							minus dolore. Lorem ipsum dolor sit amet consectetur adipisicing
							elit. Cumque exercitationem architecto laudantium deserunt tempore
							corporis ipsum ea fugiat nostrum perspiciatis.
						</p>
						<div class="btn_container_twitch mt-5 ">
							<a href="" class="btn_twitch border-2 boder-[#2d336f96] rounded-3xl text-[#333A7B] p-2.5 hover:[#f5f6ff]">Découvrez nos lives Twitch</a>
						</div>
					</div>
					<!-- box image -->
					<div class="box_img_twitch w-[45%]">
						<a href="https://www.twitch.tv/" target="_blank">
							<img src="images/cooking.avif" alt="" />
						</a>
					</div>
				</div>
			</section>
		</main>
		<!-- end body -->

		<!-- footer -->
		<?php
		
		include('partials/_footer.php');
		?>		