# phpVersionCompare
php function to compare two version strings<br />

Example 1: compare '1' and '1.1'<br />
Example 2: compare '1.0' and '1.0.2'<br />
Example 3: compare '1.0.2' and '1.1'<br />
Example 4: compare '1.0.2' and '1.0.2'<br />
Example 4: compare '2.0.1' and '1.0.2' <br />
<br /><br />

$check = compareVersion('abc','3.0.2');<br />
print_r($check);<br />
//-1 = "my version small than request version"<br />
//0 = "my version is same as request version"<br />
//1 = "my version greater than request version"<br />
//2 = "cannot compare" <br />
