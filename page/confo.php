<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <link href="/gratuto2/page/confo.css" rel="stylesheet" media="all" type="text/css" />
</head>

<body style="background: rgb(0,0,0,0.88)">
<form name="instruction" method="post" action="http://localhost/gratuto2/public/index.php?p=confo">
<div class="container container-input" >	
<div class="row">
<div class="col-lg-4" style="background: rgb(255,102,100,0.12)">

	<div class="form-group">
        <h1><label>	Votre nom : </label></h1>
		<input type="text" name="nom" class= "form-control" id="name" placeholder="Ex: Polo" />	
	</div>
</div>	

<div class="col-lg-4" style="background: rgb(255,102,100,0.12)">
	<div class="form-group">
		<h1><label>Votre ...</label></h1>
	<input type="text" name="unknom" class="form-control" id="ville" placeholder="Ex: .... "/>		
	</div>
</div>

<div class="col-lg-4 " style="background: rgb(255,102,100,0.12)">
	<div class="form-group">
	    <label for="exampleFormControlSelect1"><h1>Votre age: </h1></label>
	    <select class="form-control" id="exampleFormControlSelect1">
	      <option value="16">Moins de 16 ans</option>
	      <?php 
	      	for($i=16;$i<70;$i++){
	      		echo "<option value='$i'>$i ans</option>";
	      	}
	       ?>
	      <option>70</option>
	    </select>
	</div>
</div>
</div>
</div>	





<!-- premier formulaire 1 I) -->
<div class="row justify-content-center" >
<div class="col-lg-12 radiobox1 " <body style="background: rgb(0,0,0,0.88)">
    >
	<h1>Satisfaction vendeur</h1>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="SatisfactionVendeur" id="Excellent" value="4" />
	  <label class="form-check-label" for="Excellent">
	<div class="skillbox">
		<p>Excelent 100%</p>
		<div class="skill">
			<div class="skill_level" style="width: 100%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="SatisfactionVendeur" id="moyen" value="3" />
	  <label class="form-check-label" for="moyen">
		<div class="skillbox">
		<p>Moyen 50%</p>
		<div class="skill">
			<div class="skill_level" style="width: 50%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="SatisfactionVendeur" id="faible" value="2">
	  <label class="form-check-label" for="faible">
	  	<div class="skillbox">
		<p>Excelent 25%</p>
		<div class="skill">
			<div class="skill_level" style="width: 25%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="SatisfactionVendeur" id="nul" value="1">
	  <label class="form-check-label" for="nul">
	  <div class="skillbox">
		<p>faible 2%</p>
		<div class="skill">
			<div class="skill_level" style="width: 2%"></div>
		</div>
	</div>
	  </label>
	</div>
</div>	
</div>
	



<!-- deuxieme formulaire 2 II) -->
<div class="row justify-content-center">
<div class="col-lg-12 radiobox1 ">
	<h1>Satisfaction depôt</h1>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="SatisfactionDepot" id="Excellent1" value="4">
	  <label class="form-check-label" for="Excellent1">
	<div class="skillbox">
		<p>Excelent 100%</p>
		<div class="skill">
			<div class="skill_level" style="width: 100%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="SatisfactionDepot" id="moyen1" value="3">
	  <label class="form-check-label" for="moyen1">
		<div class="skillbox">
		<p>Moyen 50%</p>
		<div class="skill">
			<div class="skill_level" style="width: 50%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="SatisfactionDepot" id="faible1" value="2">
	  <label class="form-check-label" for="faible1">
	  	<div class="skillbox">
		<p>Excelent 25%</p>
		<div class="skill">
			<div class="skill_level" style="width: 25%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="SatisfactionDepot" id="nul1" value="1">
	  <label class="form-check-label" for="nul1">
	  <div class="skillbox">
		<p>faible 2%</p>
		<div class="skill">
			<div class="skill_level" style="width: 2%"></div>
		</div>
	</div>
	  </label>
	</div>
</div>	
</div>




<!-- premier troisieme 3 III) -->
<div class="row justify-content-center">
<div class="col-lg-12 radiobox1 ">
	<h1>Satisfaction caisse</h1>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="Satisfactioncaisse" id="Excellent3" value="4">
	  <label class="form-check-label" for="Excellent3">
	<div class="skillbox">
		<p>Excelent 100%</p>
		<div class="skill">
			<div class="skill_level" style="width: 100%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="Satisfactioncaisse" id="moyen3" value="3">
	  <label class="form-check-label" for="moyen3">
		<div class="skillbox">
		<p>Moyen 50%</p>
		<div class="skill">
			<div class="skill_level" style="width: 50%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="Satisfactioncaisse" id="faible3" value="2">
	  <label class="form-check-label" for="faible3">
	  	<div class="skillbox">
		<p>Excelent 25%</p>
		<div class="skill">
			<div class="skill_level" style="width: 25%"></div>
		</div>
	</div>
	  </label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="Satisfactioncaisse" id="nul3" value="1">
	  <label class="form-check-label" for="nul3">
	  <div class="skillbox">
		<p>faible 2%</p>
		<div class="skill">
			<div class="skill_level" style="width: 2%"></div>
		</div>
	</div>
	  </label>
	</div>
</div>	
</div>




<div class="row">
	<div class="col">
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="MontantAchat" id="achat1" value="1">
	  <label class="form-check-label" for="achat1">
	  	<h3>Achat < 100€</h3>
	  </label>
	</div>
	</div>
		<div class="col">
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="MontantAchat" id="achat2" value="1">
	  <label class="form-check-label" for="achat2">
	  	<h3>Achat < 200€</h3>
	  </label>
	</div>
	</div>
		<div class="col">
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="MontantAchat" id="achat3" value="1">
	  <label class="form-check-label" for="achat3">
	  	<h3>Achat < 300€</h3>
	  </label>
	</div>
	</div>
		<div class="col">
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="MontantAchat" id="achat4" value="1">
	  <label class="form-check-label" for="achat4">
	  	<h3>Achat < 500€</h3>
	  </label>
	</div>
	</div>
		<div class="col">
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="MontantAchat" id="achat5" value="1">
	  <label class="form-check-label" for="achat5">
	  	<h3>Achat < 1000€</h3>
	  </label>
	</div>
	</div>
		<div class="col">
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="MontantAchat" id="achat6" value="1" />
	  <label class="form-check-label" for="achat6">
	  	<h3>Achat > 1000€</h3>
	  </label>
	</div>
	</div>
	
	</div>
</div>

	<div class="form-check ">
		<input type="checkbox" name="exempleCheck1" class="form-check-input" id="exempleCheck1" />
		<label class="form-check-label" for="exempleCheck1">check me !</label>
	</div>

	<button type="button" class="btn btn-primary"><i class="fab fa-500px"></i> button</button>
	<input type="submit" name="submit" class="btn btn-info btn-lg justify-content-center" />
</form>
</body>
</html>