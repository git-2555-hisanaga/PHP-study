{"filter":false,"title":"leap_year.php","tooltip":"/leap_year.php","undoManager":{"mark":54,"position":54,"stack":[[{"start":{"row":0,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["<?php","    echo \"身長を入力してください: \";","    $height = trim(fgets(STDIN))/100; //単位をメートルに直す","    echo \"体重を入力してください: \";","    $body_weight = trim(fgets(STDIN));","    ","    $bmi=$body_weight/($height*$height);","    ","    if($bmi<18.5){","        echo \"あなたは、低体重です。\\n\";","    }else if($bmi<25){","        echo \"あなたは、普通体重です。\\n\";","    }else{","        echo \"あなたは、肥満です。\\n\";","    }","?>"],"id":1}],[{"start":{"row":1,"column":10},"end":{"row":1,"column":23},"action":"remove","lines":["身長を入力してください: "],"id":2}],[{"start":{"row":1,"column":10},"end":{"row":1,"column":13},"action":"insert","lines":["\"\";"],"id":3},{"start":{"row":1,"column":10},"end":{"row":1,"column":13},"action":"remove","lines":["\"\";"]}],[{"start":{"row":1,"column":10},"end":{"row":1,"column":13},"action":"insert","lines":["西暦で"],"id":4}],[{"start":{"row":1,"column":13},"end":{"row":1,"column":15},"action":"insert","lines":["年を"],"id":5}],[{"start":{"row":1,"column":15},"end":{"row":1,"column":23},"action":"insert","lines":["入力してください"],"id":6}],[{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"insert","lines":["\\"],"id":7},{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"insert","lines":["n"]}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["t"],"id":8},{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"remove","lines":["h"]},{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"remove","lines":["g"]},{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"remove","lines":["i"]},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"remove","lines":["e"]},{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"remove","lines":["h"]}],[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["y"],"id":9},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["e"]},{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["a"]},{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["r"]}],[{"start":{"row":2,"column":33},"end":{"row":2,"column":34},"action":"remove","lines":["0"],"id":10},{"start":{"row":2,"column":32},"end":{"row":2,"column":33},"action":"remove","lines":["0"]},{"start":{"row":2,"column":31},"end":{"row":2,"column":32},"action":"remove","lines":["1"]},{"start":{"row":2,"column":30},"end":{"row":2,"column":31},"action":"remove","lines":["/"]}],[{"start":{"row":2,"column":31},"end":{"row":7,"column":4},"action":"remove","lines":[" //単位をメートルに直す","    echo \"体重を入力してください: \";","    $body_weight = trim(fgets(STDIN));","    ","    $bmi=$body_weight/($height*$height);","    "],"id":11}],[{"start":{"row":2,"column":31},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["$"],"id":13}],[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["y"],"id":14},{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"insert","lines":["a"]}],[{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"remove","lines":["a"],"id":15}],[{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"insert","lines":["e"],"id":16},{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"insert","lines":["a"]},{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":["r"]}],[{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":[" "],"id":17}],[{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"remove","lines":[" "],"id":18},{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"remove","lines":["r"]},{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"remove","lines":["a"]},{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"remove","lines":["e"]},{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"remove","lines":["y"]},{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"remove","lines":["$"]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"remove","lines":["    "]},{"start":{"row":2,"column":31},"end":{"row":3,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":2,"column":31},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":19},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["i"],"id":20},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":["m"]},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"remove","lines":["b"]}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"insert","lines":["y"],"id":21},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["e"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["a"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["r"]}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["5"],"id":22},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["."]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["8"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["1"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["<"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["%"],"id":23},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["4"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["0"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["0"]}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["="],"id":24},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["="]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["="]},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["0"]}],[{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["5"],"id":25},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["2"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["<"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["i"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["m"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["b"]}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["y"],"id":26},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["e"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["a"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["r"]}],[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["%"],"id":27},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["4"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["="]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["="]}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["="],"id":28},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["0"]}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":[" "],"id":29},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["&"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["&"]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":[" "],"id":30},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["$"]}],[{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["y"],"id":31},{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"insert","lines":["e"]},{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":["a"]},{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"insert","lines":["r"]}],[{"start":{"row":6,"column":33},"end":{"row":6,"column":34},"action":"insert","lines":["%"],"id":32},{"start":{"row":6,"column":34},"end":{"row":6,"column":35},"action":"insert","lines":["1"]}],[{"start":{"row":6,"column":35},"end":{"row":6,"column":36},"action":"insert","lines":["0"],"id":33},{"start":{"row":6,"column":36},"end":{"row":6,"column":37},"action":"insert","lines":["0"]},{"start":{"row":6,"column":37},"end":{"row":6,"column":38},"action":"insert","lines":["!"]}],[{"start":{"row":6,"column":38},"end":{"row":6,"column":39},"action":"insert","lines":["="],"id":34},{"start":{"row":6,"column":39},"end":{"row":6,"column":40},"action":"insert","lines":["="]}],[{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"insert","lines":["0"],"id":35}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":29},"action":"remove","lines":["echo \"あなたは、低体重です。\\n\";"],"id":36}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["e"],"id":37},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["c"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["h"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["o"]}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":[" "],"id":38}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":20},"action":"insert","lines":["入力された年は"],"id":39},{"start":{"row":5,"column":20},"end":{"row":5,"column":21},"action":"insert","lines":["、"]}],[{"start":{"row":5,"column":21},"end":{"row":5,"column":27},"action":"insert","lines":["うるう年です"],"id":40}],[{"start":{"row":5,"column":27},"end":{"row":5,"column":28},"action":"insert","lines":["\""],"id":41}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["\""],"id":42}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":30},"action":"remove","lines":["echo \"あなたは、普通体重です。\\n\";"],"id":43},{"start":{"row":7,"column":8},"end":{"row":7,"column":29},"action":"insert","lines":["echo \"入力された年は、うるう年です\""]}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":28},"action":"remove","lines":[" echo \"あなたは、肥満です。\\n\";"],"id":44},{"start":{"row":9,"column":7},"end":{"row":9,"column":28},"action":"insert","lines":["echo \"入力された年は、うるう年です\""]}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["う"],"id":45},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["る"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":["う"]}],[{"start":{"row":9,"column":21},"end":{"row":9,"column":24},"action":"insert","lines":["平たい"],"id":46}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["い"],"id":47},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["た"]}],[{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":[";"],"id":48}],[{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":[";"],"id":49}],[{"start":{"row":5,"column":29},"end":{"row":5,"column":30},"action":"insert","lines":[";"],"id":50}],[{"start":{"row":5,"column":28},"end":{"row":5,"column":29},"action":"insert","lines":["\\"],"id":51},{"start":{"row":5,"column":29},"end":{"row":5,"column":30},"action":"insert","lines":["n"]}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["\\"],"id":52},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["n"]}],[{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":["\\"],"id":53},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"insert","lines":["n"]}],[{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"remove","lines":["n"],"id":54},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"remove","lines":["\\"]}],[{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"insert","lines":["\\"],"id":55},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":["n"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":4},"end":{"row":2,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1588833352426,"hash":"5034bd74feb2dc2414c19dc57a837c26d0b0734a"}