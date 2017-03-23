<? php
/*
=====================================
projet.blade.php
=====================================
*/


?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Projet professionnel</h2>
							<form>
							<!--A router un champ dans la base  
								<label for="libellecourt">Code projet</label>
								<input type="text" id="libellecourt" name="libellecourt" required placeholder="ex. wf3" />
							-->
								<label for="libellelong">Libelle projet</label>
								<input type="text" id="LIBELLEPROJET" name="LIBELLEPROJET" required placeholder="projet, raison sociale" />
								<br />

								<label for="categorie">Catégorie d'activité</label>
								<select id="categorie" name="categorie" required>
									<option value="null" selected disabled>Choisir...</option>
									<option value="B2C">Business to Consumer</option>
									<option value="B2B">Business to Business</option>
									<option value="B2B2C">Business to Business to Consumer</option>
									<option value="B2Gov">Business to Gov</option>
								
								<input type="submit" name="validation" value="Valider" />

								</select>		

							</form>
							
						</div>

					</div>
				</div>

			</div>

		</div>

	</section>
