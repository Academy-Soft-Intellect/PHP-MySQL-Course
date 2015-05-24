(
	SELECT
		CountryCode AS `Code`,
		Percentage AS 'Info'
	FROM
		world.CountryLanguage
	WHERE
		Percentage > 50
	AND
		Percentage < 55
) UNION 
(
	SELECT
		`Code`,
		Continent AS `Info`
	FROM 
		world.Country
	WHERE
		Continent LIKE '%America'
)
ORDER BY `Code`
