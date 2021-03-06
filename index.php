<?php require("conexao.php")?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Blockbuster</title>
</head>
<section>

    <header>
        <nav class="navbar -custom">
            <a class="navbar-brand" href="index.php">
              <img src="/assets/Blockbuster_logo.svg.png" width="300" height="160" alt="Blockbuster_logo">
            </a>
          </nav>
    </header>

    <section>
        <div class="row">
            <div class="card-deck">
                <div class="card">
                   <img src="/assets/action.jpg" class="card-img-top" alt="action">
                   <p class="cattittle"> Action </p>
               </div>
               <div class="card">
                   <img src="/assets/animation.jpg" class="card-img-top" alt="animation">
                   <p class="cattittle"> Animation </p>
               </div>
               <div class="card">
                   <img src="/assets/classics.jpg" class="card-img-top" alt="classics">
                   <p class="cattittle"> Classics </p>
               </div>
               <div class="card">
                   <img src="/assets/comedy.jpg" class="card-img-top" alt="comedy">
                   <p class="cattittle"> Comedy </p>
               </div>
           </div>  
        </div>
        <div class="row">
            <div class="card-deck">
                <div class="card">
                   <img src="/assets/documentary.jpg" class="card-img-top" alt="documentary">
                   <p class="cattittle"> Documentary </p>
               </div>
               <div class="card">
                   <img src="/assets/family.jpg" class="card-img-top" alt="family">
                   <p class="cattittle"> Family </p>
               </div>
               <div class="card">
                   <img src="/assets/foreign.jpg" class="card-img-top" alt="foreign">
                   <p class="cattittle"> Foreign </p>
               </div>
               <div class="card">
                   <img src="/assets/games.jpg" class="card-img-top" alt="games">
                   <p class="cattittle"> Games </p>
               </div>
           </div>  
        </div>
        <div class="row">
            <div class="card-deck">
                <div class="card">
                   <img src="/assets/horror.jpg" class="card-img-top" alt="horror">
                   <p class="cattittle"> Horror </p>
               </div>
               <div class="card">
                   <img src="/assets/musical.jpg" class="card-img-top" alt="musical">
                   <p class="cattittle"> Musical </p>
               </div>
               <div class="card">
                   <img src="/assets/scifi.jpg" class="card-img-top" alt="scifi">
                   <p class="cattittle"> Sci-Fi </p>
               </div>
               <div class="card">
                   <img src="/assets/drama.jpg" class="card-img-top" alt="drama">
                   <p class="cattittle"> Drama </p>
               </div>
           </div>  
        </div>
       

        <div class="melhores">
            <h1>MELHORES PREÇOS</h1>
            <div style="overflow-x:auto;" id="table">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Duração</th>
                        <th scope="col">Ano de Lançamento</th>
                        <th scope="col">Classificação</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php 
                        foreach ($filme as $row) { ?>
                            <td><?php echo($row["titulo"]) ?></td>
                            <td><?php echo($row["preco_da_locacao"]) ?></td>
                            <td><?php echo($row["duracao_do_filme"]) ?></td>
                            <td><?php echo($row["ano_de_lancamento"]) ?></td>
                            <td><?php echo($row["classificacao"]) ?></td>
                        
                      </tr>
                      <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        
       
    </section>
    <footer>
        <div class="footerbar">
            <p>
                Blockbuster | &copy; Copyright
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>