
		<!--  header -->
		<?php 
    $title = "La recette";
    include('partials/_header.php')
    ?>
		<!-- body/content -->
		<main class="container">
			<h2 class="title_h2">Titre de la recette</h2>
			<!-- box image -->
			<div class="box_img">
				<img src="images/gateau_chocolat.jpeg" alt="gateau au chocolat" />
			</div>
			<!-- box information de la recette -->
			<div class="box_info_recette">
				<!-- durée recette -->
				<div class="">
					<p>30 min</p>
				</div>
				<!-- dificulté recette -->
				<div class="">
					<p>Facile</p>
				</div>
				<!-- budget recette -->
				<div class="">
					<p>Bon marché</p>
				</div>
			</div>
			<!-- box etape recette -->
			<div class="box_etape_recette">
				<!-- etape 1 -->
				<div class="box_etape">
					<h2>Etape 1</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
						dicta consequuntur incidunt voluptate quis quo soluta quod? Hic
						accusantium error quibusdam necessitatibus, laudantium quam, commodi
						fugit tenetur odit sed deleniti!
					</p>
				</div>
				<!-- etape 2 -->
				<div class="box_etape">
					<h2>Etape 2</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
						dicta consequuntur incidunt voluptate quis quo soluta quod? Hic
						accusantium error quibusdam necessitatibus, laudantium quam, commodi
						fugit tenetur odit sed deleniti!
					</p>
				</div>
			</div>
		</main>

		<!-- footer -->
		<?php
		
		include('partials/_footer.php')
		?>