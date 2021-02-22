<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Tapşırıq bir</title>

		<script type="text/javascript">
            function saySoz(str) {
                var basla = 1;
                var foo = str.length;
                for (i = 0; i <= foo; i++) {
                    if (str.charAt(i) == ' ') {
                        basla++;
                    }
                }
                return console.log(basla);
                return document.write(basla);

            }

            saySoz('Bu cumlede tam-tamina 6 soz var');

            function cumleBasla(input, balacaHerfe) {
                input = (input === undefined || input === null) ? '' : input;
                if (balacaHerfe) {
                    input = input.toLowerCase();
                }
                return input.toString().replace(/(^|\. *)([a-z])/g, function (match, separator, char) {
                    return separator + char.toUpperCase();
                });
            }

            console.log(cumleBasla('hello. baki sen gozelsen'));

            var str = ' bu gunlukson tapsiriq';
            var str1 = str.slice(4, 7);

            console.log(str1);


		</script>
	</head>
	<body>
		<form>
			<h1>hello</h1>


		</form>

	</body>
</html>