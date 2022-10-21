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
 <div class="nav">
    <p>O Número que você pensou está na tabela abaixou????</p>
</div>
<form method="POST" action="jogo2.php">
<div class="jogo">

<button type="submit" name="op1" value="sim">Sim</button>
 <input type="hidden" name="op" value="<?php echo $_POST["op"]; ?>">

<table>
        <tr>
                <td>2</td>
                <td>3</td>
                <td>6</td>
                <td>7</td>
            </tr>
        <tr>
                <td>10</td>
                <td>11</td>
                <td>14</td>
                <td>15</td>
            </tr>
        <tr>
                <td>18</td>
                <td>19</td>
                <td>22</td>
                <td>23</td>
            </tr>
        <tr>
                <td>26</td>
                <td>27</td>
                <td>30</td>
                <td>31</td>
            </tr>
        <tr>
                <td>34</td>
                <td>35</td>
                <td>38</td>
                <td>39</td>
            </tr>
        <tr>
                <td>42</td>
                <td>43</td>
                <td>46</td>
                <td>47</td>
            </tr>
        <tr>
                <td>50</td>
                <td>51</td>
                <td>54</td>
                <td>55</td>
            </tr>
        <tr>
                <td>58</td>
                <td>59</td>
                <td>62</td>
                <td>63</td>
        </tr>
       
    
</table>
         <button type="submit" name="op1" value="nao">Não</button>
         
    </form>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>