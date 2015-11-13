<?php 

// Catégorie dans le "MONDE"...
function getTotalPopulation()
{
	//Récupérer la population totale
	$sql = 'SELECT SUM(country.Population) FROM country;';
}

function getNbRegistredCities()
{
	//Récupérer le nombre de villes enregistrées
	$sql = 'SELECT COUNT(*) FROM City;';
}

function getNbCountries()
{
	//Récupérer le nombre de pays
	$sql ='SELECT COUNT(*) FROM country;';
}

function getNbContinent()
{
	//Récupérer le nombre de continents
	$sql = 'SELECT COUNT(DISTINCT country.Continent) FROM country;';
}

function getNbMonarchies()
{
	//Récupérer le nombre de monarchie
}

function getNbMonarchiesNCworld()
{
	//Récupérer les monarchies non constitutionnelles dans le monde
}

function getNbMonarchiesNCAsia()
{
	//Récupérer les monarchies non constitutionnelles en Asie.
}

// LISTE DES CONTINENTS
function getContinentByName()
{
	//Remplir liste déroulante "CONTINENT"
	$sql = 'SELECT DISTINCT(country.Continent) FROM country;';
}

//PARTIE CONTINENT
function nbCountriesByContinent()
{
	//Nombre de pays par continent
}

function nbPopulationByContinent()
{
	//Population par continent
}

function totalAreaByContinent()
{
	//Surface totale par continent
	//Pourcentage de la surface totale habitée ?
}

function averageLifeByContinent()
{
	//Espérance de vie moyenne
}

function EconomyByContinent()
{
	//Richesse crée
}

// LISTE DES PAYS
function getCountryByName($pdo)
{
	//Remplir liste déroulante "PAYS"
	$sql = 'SELECT DISTINCT(country.Name) FROM country;';
	$pdoPrepare = $pdo->query($sql);
	$ctryname = $pdoPrepare->fetchALL(PDO::FETCH_ASSOC);
	//return $ctryname;
	//mise en place foreach et balise option et affichage de la valeur de chaque ligne du tableau/array.
	foreach ($ctryname as $cname)
	{
		echo '<option value ="' .$cname['Name']. '">'.$cname['Name'].'</option>';
	}
} 

//PARTIE PAYS
function getHeadofStateByCountry()
{
	//Capitale par pays
}

function getMostInhabitedcityByCountry()
{
	//Ville la plus habitée du pays
}

function getPIBbyCountry()
{
	//PIB du pays
}


 ?>
