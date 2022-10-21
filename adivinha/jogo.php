<!doctype html>
<html lang="en">
<?php 

session_start();

 ?>
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
        <form method="POST" action="jogo1.php">
        <div class="jogo">
            
        <button type="submit" name="op" value="sim" >Sim</button>
        <table>
           <tr >
                <td>1</td><td>3</td><td>5</td><td>7</td>
            </tr>
        <tr>
            <td>9</td><td>11</td><td>13</td><td>15</td>
        </tr>
        <tr>
            <td>17</td><td>19</td><td>21</td><td>23</td>
        </tr>
        <tr>
            <td>25</td><td>27</td><td>29</td><td>31</td>
        </tr>
        <tr>
            <td>33</td><td>35</td><td>37</td><td>39</td>
        </tr>
        <tr>
             <td>41</td><td>43</td><td>45</td><td>47</td>
            </tr>
        <tr>
            <td>49</td><td>51</td><td>53</td><td>55</td>
        </tr>
        <tr>
            <td>57</td><td>59</td><td>61</td><td>63</td>
        </tr>
    </table>
  <button type="submit" name="op" value="nao">Não</button>
</div>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>