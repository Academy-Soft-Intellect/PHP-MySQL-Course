SELECT
	Continent,
	MIN(Country.SurfaceArea) AS CountrySurface
FROM
	world.Country
GROUP BY Continent
ORDER BY Continent;


SELECT 
	Continent,
	MAX(Country.SurfaceArea) AS CountrySurface
FROM
	world.Country
GROUP BY Continent
ORDER BY Continent;