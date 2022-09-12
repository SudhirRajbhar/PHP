<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            .background{
                background-color: #33d9b2;
                background-size: cover;
            }
        . {
            outline: none;
            transition: border-color .2s;
        }
        .animated infinite pulse{
            text-align: center;
        }
        .screen-body-item{
            text-align: center;
        }
        .app-form-control::placeholder {
            color: #FFF;
        }
        .app-form-control:focus {
            border-bottom-color: #ddd;
        }
        .app-form-button{
            background: #33d9b2;
            border: none;
            font-size: 14px;
            cursor: pointer;
            outline: none;
            padding: 10px 12px;
            border-radius:5px;
            text-transform:uppercase;
        }
        .app-form-button:hover {
            color:#218c74;
        }
        .showdata{
            text-align: center;
            color:#fff;
            font-size: 1.2rem;
            padding-top: -10px;
            padding-bottom: 10px;
        }
        </style>
    </head>
    <body>
        
      <div class="background">
          <div class="container">
              <div class="screen">
                  <div class="screen-body">
                      <div class="screen-body-items left">
                          <div class="app-title">
                              <div class="animated infinite pulse">
                                  PHP <br> Calculator <br>
                              </div>
                          </div>
                      </div>

                      <div class="screen-body-item">
                          <div class="app-form">
                              <form method="POST">
                                  <div class="app-form-group">
                                      <input type="text" class="app-form-control" placeholder="Enter Number" name="num1">
                                  </div>
                                  <div class="app-form-group">
                                      <input type="text" class="app-form-control" placeholder="Enter Number" name="num2">
                                  </div>

                                  <div class="select-style">
                                      <select name="operation">
                                          <option value="add">ADD</option>
                                          <option value="sub">SUB</option>
                                          <option value="mult">MULT</option>
                                          <option value="div">DIV</option>
                                      </select>
                                  </div>  

                                  <div>
                                      <input type="submit" name="submit" value="submit" class="app-form-button">
                                  </div>
                             </form>
                          </div>
                      </div>
                  </div>

                  <div class="app-form-group showdata">
                      <p>
                          <?php 
                           if(isset($_POST['submit'])) {
                               $num1 = $_POST['num1'];
                               $num2 = $_POST['num2'];
                              //echo "{$num1} {$num2}";
                              $operation  = $_POST['operation'];
                              switch($operation){
                                  case "add": $sum = $num1 + $num2;
                                  echo "The addition of two number is {$sum}";
                                  break;
                                  case "sub": $sub = $num1 - $num2;
                                  echo "The subtraction of two number is {$sub}";
                                  break;
                                  case "mult": $mult = $num1 * $num2;
                                  echo "The multiplication of two number is {$mult}";
                                  break;
                                  case "div": $div = $num1 / $num2;
                                  echo "The division of two number is {$div}";
                                  break;
                                  default: echo "Sorry its not exist";
                              }
                           }

                          ?>
                      </p>
                  </div>
              </div>
          </div>
      </div>

    </body>
</html>