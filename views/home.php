<?php

 $data = new TravigoController();
$travell = $data->getAllTravell();
print_r($travell);

?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
              <div class="card-body bg-light">
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">price</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                          <?php foreach($travigo as $travell ):?>
                          <th scope="row"><?php echo $travell['nom'];?></th>
                           <td><?php echo $travell['price'];?></td>
                           <td><?php echo $travell['date'];?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>