SELECT
	k.KinderGarderID,
	k.Name,
	k.Phone,
	c.ChildID,
	c.Name,
	c.Age
FROM
	kindergarder.kindergarder AS k
LEFT JOIN 
	kindergarder.children AS c ON c.KinderGarderID = k.KinderGarderID
