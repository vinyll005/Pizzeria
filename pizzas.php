<?
session_start();
function menuPizza() {
    include_once("db_connect.php");
    for($i=1; $i<=7; $i++) {
        settype($i, 'string');
        
            $findPizza = $mysqli->prepare("SELECT * FROM pizza WHERE id LIKE ?");
            $findPizza->bind_param("s", $i);
            $findPizza->execute();
            $result = $findPizza->get_result();
            $row = $result->fetch_assoc();
            
            ?>

<div id="gridSystemModal<? echo $row['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <h4 class="modal-title" id="gridModalLabel"><? echo $row['name']?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">×</span></button>
        
      </div>
      <form action="Cart.php" ajax-to="Cart.php" method="POST">
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8"><img src="/images/<? echo $row['img'] ?>" style="max-width: 100%;" alt=""></div>
            <div class="col-md-4"><? echo $row['description'] ?><br>
              Property Name: <strong><? echo $row['name'] ?> pizza</strong>
              <br>
              Cost: <strong><? echo $row['cost']?>$</strong>
              <br>
              Cantimeters: <strong><? echo $row['diametr']?></strong>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="<? $row['id'] ?>" value="1" class="btn btn-primary">Add to cart</button>
      </div>
      <input type="hidden" name="pizzaid" value="<? echo $row['id']?>">
      </form>
    </div>
  </div>
</div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="form-group unit-9">
          <input type="image" class="image btn btn-primary" data-toggle="modal" data-target="#gridSystemModal<? echo $row['id'] ?>" src="images/<? echo $row['img'] ?>" name="<? echo $row['id'] ?>"> 
            <div class="unit-9-content">
              <h2><? echo $row['name'] ?></h2>
              <span><? echo $row['cost']?>$ / <? echo $row['diametr']?> cm</span>
              <!-- <span>with Wendy Matos</span> -->
            </div>
          </input>
        </div>
        </div>
        <?
    

            //header("Location:complete.php");
            //print_r($_SESSION);
    
    };
}



