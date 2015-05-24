SELECT 
	Continent,
	COUNT(*)
FROM
	world.Country
GROUP BY Continent;