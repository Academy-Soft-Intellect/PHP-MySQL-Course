SELECT
	Continent,
	AVG(Country.SurfaceArea)
FROM
	world.Country
GROUP BY Continent