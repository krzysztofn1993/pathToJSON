# pathToJSON
**Program that returns structure of directory as JSON format. Program runs through all directories in path you given recursively.**


By default program returns structure of directory in which file index.php is placed. 
You can change it by going into index.php and calling function with other path.

```
$structureJSON = json_encode(getStructure(__DIR__)); // change __DIR__ to your path.
```
Function getStructure(path) returns whole structure as associative array which then is changed to JSON format with built in function json_encode.

*Example of returned JSON format*
```
{
	"path": "C:\\xampp\\htdocs\\Projects\\pathToJSON",
	"type": "dir",
	"components": [{
		"path": "C:\\xampp\\htdocs\\Projects\\pathToJSON\/.vscode",
		"type": "dir",
		"components": [{
			"path": "launch.json",
			"type": "file"
		}]
	}, {
		"path": "index.php",
		"type": "file"
	}, {
		"path": "test.code-workspace",
		"type": "file"
	}]
}
```

Validation of correct generated JSON format was done @https://jsonlint.com/
