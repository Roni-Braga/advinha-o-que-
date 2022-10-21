<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adivinha o que?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <body>
    

    <div class="container-xxl vh-100 game">
      <div class="nav"><p>O Número que você pensou está na tabela abaixou????</p></div>
        <form method="POST" action="jogo4.php">
        <div class="jogo">

           <button type="submit" name="op3" value="sim">Sim</button>
           <input type="hidden" name="op2" value="<?php echo $_POST["op2"]; ?>">
           <input type="hidden" name="op1" value="<?php echo $_POST["op1"]; ?>">
           <input type="hidden" name="op" value="<?php echo $_POST["op"]; ?>">

    <table>
            <tr>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
            </tr>
            <tr>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
        </tr>
        <tr>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
        </tr>
        <tr>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
        </tr>
        <tr>
                <td>40</td>
                <td>41</td>
                <td>42</td>
                <td>43</td>
        </tr>
        <tr>
                <td>44</td>
                <td>45</td>
                <td>46</td>
                <td>47</td>
        </tr>
        <tr>
                <td>56</td>
                <td>57</td>
                <td>58</td>
                <td>59</td>
        </tr>
        <tr>
                <td>60</td>
                <td>61</td>
                <td>62</td>
                <td>63</td>
        </tr>
</table>

         <button type="submit" name="op3" value="nao">Não</button>
</div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>