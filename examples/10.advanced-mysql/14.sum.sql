SELECT 
	Continent,
	SUM(Country.SurfaceArea) AS ContinentSurface
FROM 
	world.Country
GROUP BY Continent
ORDER BY Continent