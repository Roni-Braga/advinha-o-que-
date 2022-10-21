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
        <form method="POST" action="processa.php">
        <div class="jogo">

        <button type="submit" name="op5" value="sim">Sim</button>
        <input type="hidden" name="op4" value="<?php echo $_POST["op4"]; ?>">
        <input type="hidden" name="op3" value="<?php echo $_POST["op3"]; ?>">
        <input type="hidden" name="op2" value="<?php echo $_POST["op2"]; ?>">
        <input type="hidden" name="op1" value="<?php echo $_POST["op1"]; ?>">
        <input type="hidden" name="op" value="<?php echo $_POST["op"]; ?>">

    <table>
       
       <tr>
                <td>32</td>
                <td>33</td>
                <td>34</td>
                <td>35</td>
       </tr>

        <tr>
                <td>36</td>
                <td>37</td>
                <td>38</td>
                <td>39</td>
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
                <td>48</td>
                <td>49</td>
                <td>50</td>
                <td>51</td>
        </tr>
        
        <tr>
                 <td>52</td>
                 <td>53</td>
                 <td>54</td>
                 <td>55</td>
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

     <button type="submit" name="op5" value="nao">Não</button>
</div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>