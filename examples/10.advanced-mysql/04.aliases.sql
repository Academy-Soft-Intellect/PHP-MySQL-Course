SELECT 
	lang.CountryCode AS `CODE`,
	lang.IsOfficial AS OFFI,
	lang.Percentage AS Pr
FROM
	world.CountryLanguage AS lang
WHERE 
	lang.Percentage > 12