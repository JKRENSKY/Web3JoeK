
<?php include 'includes/head.php';?>

<?php include 'includes/nav.php';?> 

<div class="jumbotron2 splash" ">

</div>
<h1 class="title">CAPSULES</h1>
<nav class="nav d-flex justify-content-between subbar" >
  <a href="capsule.php" class="btn btn-secondary active btn-lg">Capsules</a>
  <a href="cartridge.php" class="btn btn-secondary  btn-lg">Cartridges</a>
  <a href="tincture.php" class="btn btn-secondary  btn-lg">Tinctures</a>
    <a href="topical.php" class="btn btn-secondary btn-lg">Topicals</a>

        </nav>

        <br>

        <div class="container">
        	<div class="row">
        		
        		<div class="shop col-sm-3 smolchonk">
        			 <ul class="list-group mb-1">
        			 	<li><img class="card-img-top micro" src="img/cap_sm.jpg" alt="Card image cap"></li>
        			 
        			 	<li>
							<img id="imageToSwap" class="profile micro" src="img/op1.svg">
						</li>
       			 		<li>
							<img id="imageToSwap2" class="profile micro" src="img/op2.svg">
						</li>						


					</ul>
        		</div>
        		
        		<div class="shop col-sm-8 chonk">	
        			<h1>Start Your Custom Build!</h1>
        			<p class="lead">Select from the drop down lists below to start building your very own custom blend. If you have any questions about the ingredients check out the Mini Guide popup buttons below!</p>
						<select onchange="$('#imageToSwap').attr('src', this.options[this.selectedIndex].value);">
						    <option value="img/op1.svg" selected>Cannabinoid 1</option>
						    <option value="img/cbc.svg" >CBC</option>
						    <option value="img/cbd.svg">CBD</option>
						    <option value="img/cbdv.svg">CBDV</option>
						    <option value="img/cbg.svg">CBG</option>
						    <option value="img/cbl.svg">CBL</option>
						    <option value="img/cbn.svg">CBN</option>
						</select>
						<br>
						<select onchange="$('#imageToSwap2').attr('src', this.options[this.selectedIndex].value);">
						    <option value="img/op2.svg" selected>Cannabinoid 2</option>
						    <option value="img/cbc.svg" >CBC</option>
						    <option value="img/cbd.svg">CBD</option>
						    <option value="img/cbdv.svg">CBDV</option>
						    <option value="img/cbg.svg">CBG</option>
						    <option value="img/cbl.svg">CBL</option>
						    <option value="img/cbn.svg">CBN</option>
						</select>
						<br>
						<select >
						    <option selected>Terpene 1</option>
						    <option >Humulene</option>
						    <option>Limonene</option>
						    <option >Linalool</option>
						    <option>Myrcene</option>
						    <option >Ocimene</option>
						    <option>Pinene</option>
						</select>
						<br>
						<select >
						    <option selected>Terpene 2</option>
						    <option >Humulene</option>
						    <option>Limonene</option>
						    <option >Linalool</option>
						    <option>Myrcene</option>
						    <option >Ocimene</option>
						    <option>Pinene</option>
						</select>
						<br>
						<select >
						    <option selected>Additional Options</option>
						   
							<option >Cayenne</option>
						    <option  >Ginseng</option>
						    
						    
						    <option >MCT Oil</option>
						    <option >Melatonin</option>
						    <option >Royal Bee Pollen</option>
						</select>
						<hr>
						<select >
						    <option selected>Quantity</option>
						   
							<option >5 - $10</option>
						    <option >10 - $18</option>
						  
						    <option >25 - $35</option>
						    <option >50 - $60</option>
						    <option >100 - $100</option>
						</select>
						<hr>
						 <button class="btn-lg end add">Add to cart</button>
						 <button class="btn-lg end clear">Empty Cart</button>
						 <hr>
						We use 100% organic, vegan capsules, all contents are mixed with organic coconut oil as a binding medium then homogenized to ensure evenly distributed contents. Other binding contents can be arranged for special dietary restrictions on <a href="faq.php"> request</a>.<br>For more information on the ingredients used in your custom blend, check out the Mini guide popup buttons below!

						<hr>

						<button type="button" class="info btn-primary " data-toggle="modal" data-target="#exampleModal">
						  Cannabinoid Mini Guide
						</button>
						<button type="button" class="info btn-primary info" data-toggle="modal" data-target="#exampleModal2">
						  Terpene Mini Guide
						</button>						
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Cannabinoid Reference Guide</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							         <h4 class="card-title">CBD</h4>
						             <p class="card-text"><small class="text-muted">Cannabidiol</small></p>
						            <p class="card-text">Popular for pain relief, anxiety, appetite promotion, general well-being.</p>
							      
							      <hr>
							      <h4 class="card-title">CBC</h4>
						             <p class="card-text"><small class="text-muted">Cannabichromene</small></p>
						            <p class="card-text">Popular for physical recovery, inflammation, brain function.</p>
						            <hr>
					            <h4 class="card-title">CBG</h4>
					             <p class="card-text"><small class="text-muted">Cannabigerol</small></p>
					            <p class="card-text">Promotes homeostatic balance, appetite, fights muscle spasms and contractions.</p>
					            <hr>

					            <h4 class="card-title">CBL</h4>
					             <p class="card-text"><small class="text-muted">Cannabicyclol</small></p>
					            <p class="card-text">A more recently discovered cannabinoid, shows promise as a relaxant and sleep aid.</p>
					            <hr>
					            <h4 class="card-title">CBN</h4>
					             <p class="card-text"><small class="text-muted">Cannabinol</small></p>
					            <p class="card-text">Primarily used as a sleep and rest promoter due to its sedative effects.</p>
					            <hr>

					            <h4 class="card-title">CBDV</h4>
					             <p class="card-text"><small class="text-muted">Cannabidivarin</small></p>
					            <p class="card-text">Used for its relaxant and anti convulsant properties, as well as its anti nausea effects.</p>




						        </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        
							      </div>
							    </div>
							  </div>
							</div>
						<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Terpene Reference Guide</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							      <h4 class="card-title">Humulene</h4>
					            <p class="card-text">Named Humulus Lupulus(hops), this terpene is best known as the primary note in IPAs. This terpene has a woody, earthy, almost spicy aroma, and has been indicated as an appetite suppresant.</p>
								<hr>
								<h4 class="card-title">Limonene</h4>
					            <p class="card-text">Limonene is found in the peels of citrus fruit as well as some cannabis strains. It has notes of lemon and pairs well with Pinene.</p>
					            <hr>

								<h4 class="card-title">Linalool</h4>
					            <p class="card-text">Linalool is most recognizeable as the scent of lavendar. This terpene has antimicrobial properties and is found by some to have relaxing and calming properties.</p>
								<hr>

								<h4 class="card-title">Myrcene</h4>
					            <p class="card-text">In nature Myrcene can be found in mangos, hops, and basil. It has been indicated as a promoter of the relaxant effects of some cannabinoids and contributes to pain relief.</p>
								<hr>
								<h4 class="card-title">Ocimene</h4>
					            <p class="card-text">Ocimene is found in mint, parsley, basil, and is recognizeable for its sweet and fragrant herbal aroma.</p>
					            <hr>
								<h4 class="card-title">Pinene</h4>
					            <p class="card-text">Pinene is the terpene responsible for the smell of pine trees, it is also one of the most abundant terpenes in cannabis plants. It has been indicated as a promoter of focus and alertness.</p>					            



							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        
							      </div>
							    </div>
							  </div>
							</div>
						  
						<br><br>

						
        		</div>



        	</div>

        </div>

<?php include 'includes/footer.php';?> 
