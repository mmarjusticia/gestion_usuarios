{"filter":false,"title":"altaPersonal.php","tooltip":"/php/altaPersonal.php","undoManager":{"mark":91,"position":91,"stack":[[{"start":{"row":10,"column":10},"end":{"row":11,"column":8},"action":"insert","lines":["","        "],"id":2}],[{"start":{"row":11,"column":8},"end":{"row":12,"column":86},"action":"insert","lines":["<div id=\"container\">","            <img  id=\"cabecera\" src=\"../estilo/imagenes/cabecera.jpg\" alt=\"cabecera\"/>"],"id":3}],[{"start":{"row":19,"column":15},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":20,"column":8},"end":{"row":20,"column":9},"action":"insert","lines":["<"],"id":5}],[{"start":{"row":20,"column":9},"end":{"row":20,"column":10},"action":"insert","lines":["/"],"id":6}],[{"start":{"row":20,"column":10},"end":{"row":20,"column":11},"action":"insert","lines":["d"],"id":7}],[{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"insert","lines":["i"],"id":8}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"insert","lines":["v"],"id":9}],[{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"insert","lines":[">"],"id":10}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":2},"action":"remove","lines":["<?php","","?>"],"id":11}],[{"start":{"row":19,"column":7},"end":{"row":21,"column":10},"action":"remove","lines":[" <?php","        ","        ?>"],"id":12}],[{"start":{"row":22,"column":7},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":13}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":10},"action":"insert","lines":[" <?php }?>"],"id":14}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":2},"action":"insert","lines":["<?php","    $email=$sesion->get('_Email');","    $usuario=$gestor->get($email);","","    if($email===null){","         echo 'Error de permisos, no es un administrador de la base de datos';","}","else{","?>"],"id":15}],[{"start":{"row":19,"column":8},"end":{"row":19,"column":9},"action":"insert","lines":["<"],"id":16}],[{"start":{"row":19,"column":9},"end":{"row":19,"column":10},"action":"insert","lines":["d"],"id":17}],[{"start":{"row":19,"column":10},"end":{"row":19,"column":11},"action":"insert","lines":["i"],"id":18}],[{"start":{"row":19,"column":11},"end":{"row":19,"column":12},"action":"insert","lines":["v"],"id":19}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"insert","lines":[" "],"id":20}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["i"],"id":21}],[{"start":{"row":19,"column":14},"end":{"row":19,"column":15},"action":"insert","lines":["d"],"id":22}],[{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"insert","lines":["="],"id":23}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["\""],"id":24}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["z"],"id":25}],[{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["o"],"id":26}],[{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["n"],"id":27}],[{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["a"],"id":28}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":21},"action":"remove","lines":["zona"],"id":29},{"start":{"row":19,"column":17},"end":{"row":19,"column":29},"action":"insert","lines":["zonaUsuarioN"]}],[{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"insert","lines":[">"],"id":30}],[{"start":{"row":19,"column":30},"end":{"row":19,"column":35},"action":"remove","lines":["<div>"],"id":31}],[{"start":{"row":25,"column":15},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":32},{"start":{"row":26,"column":0},"end":{"row":26,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":13},"action":"insert","lines":["<div>"],"id":33}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":34}],[{"start":{"row":1,"column":0},"end":{"row":4,"column":32},"action":"insert","lines":["require '../clases/AutoCarga.php';","$sesion= new Session();","$bd= new DataBase();","$gestor= new ManageUsuario($bd);"],"id":35}],[{"start":{"row":4,"column":32},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":36}],[{"start":{"row":4,"column":32},"end":{"row":5,"column":0},"action":"remove","lines":["",""],"id":37}],[{"start":{"row":23,"column":56},"end":{"row":23,"column":62},"action":"remove","lines":["</div>"],"id":38}],[{"start":{"row":23,"column":56},"end":{"row":23,"column":57},"action":"insert","lines":[">"],"id":39}],[{"start":{"row":23,"column":29},"end":{"row":23,"column":30},"action":"insert","lines":["\""],"id":40}],[{"start":{"row":23,"column":57},"end":{"row":23,"column":58},"action":"remove","lines":[">"],"id":41}],[{"start":{"row":23,"column":56},"end":{"row":23,"column":57},"action":"remove","lines":[":"],"id":42}],[{"start":{"row":23,"column":31},"end":{"row":24,"column":12},"action":"insert","lines":["","            "],"id":43}],[{"start":{"row":21,"column":7},"end":{"row":23,"column":31},"action":"remove","lines":[" <div id=\"container\">","            <img  id=\"cabecera\" src=\"../estilo/imagenes/cabecera.jpg\" alt=\"cabecera\"/>","        <div id=\"zonaUsuarioN\">"],"id":44},{"start":{"row":21,"column":7},"end":{"row":25,"column":35},"action":"insert","lines":["<div id=\"container\">","            <img  id=\"cabecera\" src=\"../estilo/imagenes/cabecera.jpg\" alt=\"cabecera\"/>","       ","       ","            <div id=\"zonaUsuarioN\">"]}],[{"start":{"row":33,"column":9},"end":{"row":33,"column":10},"action":"insert","lines":["/"],"id":45}],[{"start":{"row":17,"column":30},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":18,"column":0},"end":{"row":18,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":60},"action":"insert","lines":[" <link rel=\"stylesheet\" href=\"../estilo/estilo.css\">"],"id":47}],[{"start":{"row":27,"column":37},"end":{"row":27,"column":46},"action":"insert","lines":["<br></br>"],"id":48}],[{"start":{"row":29,"column":93},"end":{"row":29,"column":98},"action":"insert","lines":["</br>"],"id":49}],[{"start":{"row":30,"column":88},"end":{"row":30,"column":93},"action":"insert","lines":["</br>"],"id":50}],[{"start":{"row":31,"column":99},"end":{"row":31,"column":104},"action":"insert","lines":["</br>"],"id":51}],[{"start":{"row":29,"column":37},"end":{"row":29,"column":38},"action":"insert","lines":[" "],"id":52}],[{"start":{"row":29,"column":38},"end":{"row":29,"column":39},"action":"insert","lines":[" "],"id":53}],[{"start":{"row":30,"column":29},"end":{"row":30,"column":30},"action":"insert","lines":[" "],"id":54}],[{"start":{"row":30,"column":30},"end":{"row":30,"column":31},"action":"insert","lines":[" "],"id":55}],[{"start":{"row":31,"column":39},"end":{"row":31,"column":40},"action":"insert","lines":[" "],"id":56}],[{"start":{"row":31,"column":40},"end":{"row":31,"column":41},"action":"insert","lines":[" "],"id":57}],[{"start":{"row":6,"column":34},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":58},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":7,"column":4},"end":{"row":9,"column":1},"action":"insert","lines":[" $personal=$usuario->getPersonal();","    if($administrador==1||$personal==1)","{"],"id":59}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":1},"action":"remove","lines":["    if($administrador==1||$personal==1)","{"],"id":60}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":[" "],"id":61}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":13},"action":"remove","lines":["email"],"id":62},{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":["p"]}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["e"],"id":63}],[{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["r"],"id":64}],[{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["s"],"id":65}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["o"],"id":66}],[{"start":{"row":10,"column":7},"end":{"row":10,"column":13},"action":"remove","lines":["$perso"],"id":67},{"start":{"row":10,"column":7},"end":{"row":10,"column":16},"action":"insert","lines":["$personal"]}],[{"start":{"row":10,"column":16},"end":{"row":10,"column":23},"action":"remove","lines":["===null"],"id":68},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"insert","lines":["!"]}],[{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"insert","lines":["="],"id":69}],[{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":["1"],"id":70}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":13},"action":"remove","lines":["personal"],"id":71},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["a"]}],[{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"insert","lines":["d"],"id":72}],[{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"insert","lines":["m"],"id":73}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["i"],"id":74}],[{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":["n"],"id":75}],[{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["i"],"id":76}],[{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"insert","lines":["s"],"id":77}],[{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"insert","lines":["t"],"id":78}],[{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["r"],"id":79}],[{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"insert","lines":["a"],"id":80}],[{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["d"],"id":81}],[{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["o"],"id":82}],[{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["r"],"id":83}],[{"start":{"row":7,"column":32},"end":{"row":7,"column":40},"action":"remove","lines":["Personal"],"id":84},{"start":{"row":7,"column":32},"end":{"row":7,"column":33},"action":"insert","lines":["A"]}],[{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"insert","lines":["d"],"id":85}],[{"start":{"row":7,"column":29},"end":{"row":7,"column":34},"action":"remove","lines":["getAd"],"id":86},{"start":{"row":7,"column":29},"end":{"row":7,"column":45},"action":"insert","lines":["getAdministrador"]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":15},"action":"remove","lines":["persona"],"id":87}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"remove","lines":["l"],"id":88}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":["a"],"id":89}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["d"],"id":90}],[{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["m"],"id":91}],[{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["i"],"id":92}],[{"start":{"row":10,"column":7},"end":{"row":10,"column":12},"action":"remove","lines":["$admi"],"id":93},{"start":{"row":10,"column":7},"end":{"row":10,"column":21},"action":"insert","lines":["$administrador"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":34},"end":{"row":6,"column":34},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1453031824915,"hash":"1bd70f21936275307f351a6bdee612f7ab4c7e31"}