<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurante Brasa Loca</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,300;8..144,400;8..144,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="Assets/logo-brasa-loca-igor-i-go-restaurant"
      type="image/x-icon"
    />
  </head>
  <body>
    <header>
      <img
        src="Assets/logo-brasa-loca-igor-i-go-restaurant.png"
        alt="Logo del Restaurante"
      />
    </header>

    <section id="Info">
      <div id="ContainerForm" class="row no-gutters bg-dark">
        <div class="col-xl-5 col-lg-12 register-bg"></div>
        <div class="col-xl-7 col-lg-12 d-flex">
          <div class="container align-self-center p-6">
            <h1 class="font-weight-bold">Registrate y Pide!</h1>
            <div class="form-group">
              <p class="text-muted mb-5">
                Ingresa la siguiente informacion para empezar a ordenar.
              </p>

              <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-row mb-3">
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold"
                      >Nombre <span class="text-danger">*</span></label
                    >
                    <input
                      type="text"
                      name="Nombre"
                      class="form-control"
                      placeholder="Tu Nombre"
                      required
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold"
                      >Apellido <span class="text-danger">*</span></label
                    >
                    <input
                      type="text"
                      name="Apellido"
                      class="form-control"
                      placeholder="Tu Apellido"
                      required
                    />
                  </div>
                </div>
                <div class="form-row mb-3">
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold"
                      >Telefono <span class="text-danger">*</span></label
                    >
                    <input
                      type="text"
                      name="Telefono"
                      class="form-control"
                      placeholder="Tu Telefono"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label class="font-weight-bold"
                    >Direccion <span class="text-danger">*</span></label
                  >
                  <input
                    type="text"
                    name="Direccion"
                    class="form-control"
                    placeholder="Tu Direccion"
                    required
                  />
                </div>
                <div class="form-group mb-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" required />
                    <label class="form-check-label text-muted"
                      >Acepto los terminos y condiciones.</label
                    >
                  </div>
                </div>
                
                <div class="Separacion"></div>

                <center><h1 class="font-weight-bold">Menu</h1></center>
        <div class="item_container">
          <img
            src="Assets/hamburguesa-queso-clasico-papas-fritas-bebida-gaseosa-menu-parrilla-barbacoa-fondo-gris_113876-3431.jpg"
            alt="hmaburguesa"
          />
          <div class="col-xl-5 col-lg-12">
            <h3>Combo Hamburguesa Clásica</h3>
            <p class="text-muted">Incluye Papas y Gaseosa</p>
            <p class="font-weight-bold"
              >13.000$ COP <span class="text-danger">*</span></p
            >
            <input
              type="number"
              name="UnidHamburguesa"
              class="form-control unit"
              min="0"
              placeholder="Unidades"
            />
          </div>
        </div>
        <div class="item_container">
          <img src="Assets/IMG_8295-Editar.jpg" alt="hmaburguesa" />
          <div class="col-xl-5 col-lg-12">
            <h3>Combo Hamburguesa Doble</h3>
            <p class="text-muted">Incluye Papas y Gaseosa</p>
            <p class="font-weight-bold"
              >18.000$ COP <span class="text-danger">*</span></p
            >
            <input
              type="number"
              name="UnidHamburguesaDoble"
              class="form-control unit"
              min="0"
              placeholder="Unidades"
            />
          </div>
        </div>
        <div class="item_container">
          <img src="Assets/image-upload1612148916.jpeg" alt="hmaburguesa" />
          <div class="col-xl-5 col-lg-12">
            <h3>Combo Perro Caliente</h3>
            <p class="text-muted">Incluye Papas y Gaseosa</p>
            <p class="font-weight-bold"
              >10.000$ COP <span class="text-danger">*</span></p
            >
            <input
              type="number"
              name="UnidPerro"
              class="form-control unit"
              min="0"
              placeholder="Unidades"
            />
          </div>
        </div>
        <div class="item_container">
          <img
            src="Assets/vista-superior-deliciosas-porciones-pizza_23-2148925191.jpg"
            alt="hmaburguesa"
          />
          <div class="col-xl-5 col-lg-12">
            <h3>Porcion de Pizza</h3>
            <p class="text-muted">
              Viene en sabores Jamón, Hawaiana y Pepperoni.
            </p>
            <p class="font-weight-bold"
              >8.000$ COP <span class="text-danger">*</span></p
            >
            <input
              type="number"
              name="UnidPizza"
              class="form-control unit"
              min="0"
              placeholder="Unidades"
            /><br />
            <input type="radio" name="pizza" />
            <label for="html">Jamon</label><br />
            <input type="radio" name="pizza" />
            <label for="html">Hawaiana</label><br />
            <input type="radio" name="pizza" />
            <label for="html">Pepperoni</label><br />
          </div>
        </div>
        <div class="item_container">
          <img src="Assets/CFAPJBUIJ5DOPLZ5YQTYSLXXVY.jpg" alt="hmaburguesa" />
          <div class="col-xl-5 col-lg-12">
            <h3>Malteada</h3>
            <p class="text-muted">
              Viene en sabores Vainilla, Chocolate y Fresa
            </p>
            <p class="font-weight-bold"
              >8.000$ COP <span class="text-danger">*</span></p
            >
            <input
              type="number"
              name="UnidMalteada"
              class="form-control unit"
              min="0"
              placeholder="Unidades"
            /><br />
            <input type="radio" name="Malteada" />
            <label for="html">Vainilla</label><br />
            <input type="radio" name="Malteada" />
            <label for="html">Chocolate</label><br />
            <input type="radio" name="Malteada" />
            <label for="html">Fresa</label><br />
          </div>
        </div>
        <div class="item_container">
          <img
            src="Assets/depositphotos_9805108-stock-photo-glass-of-cola.jpg"
            alt="hmaburguesa"
          />
          <div class="col-xl-5 col-lg-12">
            <h3>Gaseosa</h3>
            <p class="text-muted">
              Viene en sabores Coca-Cola, Manzana y Sprite
            </p>
            <p class="font-weight-bold"
              >3.000$ COP <span class="text-danger">*</span></p
            >
            <input
              type="number"
              name="UnidGaseosa"
              class="form-control unit"
              min="0"
              placeholder="Unidades"
            /> <br />
            <input type="radio" name="Gaseosa" />
            <label for="html">Coca-Cola</label><br />
            <input type="radio" name="Gaseosa" />
            <label for="html">Manzana</label><br />
            <input type="radio" name="Gaseosa" />
            <label for="html">Sprite</label><br />
          </div>
        </div>
        <center>
          <input class="primary btn btn-secundary btn-burguer" type="submit" values="Hacer Pedido!">
        </center>
              </form>

              <center>
                <small class="d-inline-block text-muted mt-5"
                >Todos los derechos reservados | &copy; 2022 por Juan
                Bossa</small
              >
              </center>

            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                $UnidHamburguesa = $_POST['UnidHamburguesa'];
                                $UnidHamburguesaDoble = $_POST['UnidHamburguesaDoble'];
                                $UnidPerro = $_POST['UnidPerro'];
                                $UnidPizza = $_POST['UnidPizza'];
                                $UnidMalteada = $_POST['UnidMalteada'];
                                $UnidGaseosa = $_POST['UnidGaseosa'];
                                $Nombre = $_POST['Nombre'];
                                $Apellido = $_POST['Apellido'];
                                $Direccion = $_POST['Direccion'];
                                $Telefono = $_POST['Telefono'];
                                $total = 0;

                                if($UnidHamburguesa >= 0){
                                    $total+= 13000 * $UnidHamburguesa;
                                }
                                if($UnidHamburguesaDoble >= 0){
                                    $total+= 18000 * $UnidHamburguesaDoble;
                                }
                                if($UnidPerro >= 0){
                                    $total+= 10000 * $UnidPerro;
                                }
                                if($UnidPizza >= 0){
                                    $total+= 8000 * $UnidPizza;
                                }
                                if($UnidMalteada >= 0){
                                    $total+= 8000 * $UnidMalteada;
                                }
                                if($UnidGaseosa >= 0){
                                    $total+= 3000 * $UnidGaseosa;
                                }
                                
                            }
                        ?>

    <footer>
      <center>
        <h2>Orden</h2>
      </center>
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h4>Nombre: " . $Nombre ." ". $Apellido ."<br />Telefono: ". $Telefono. "<br />Direccion: " .$Direccion."<br /><br /> <center>El costo de su Orden es de $" . $total . " Pesos.</center></h4>";
        }
      ?>
    </footer>

    <!-- <section>
      <div class="mod-container">
        <div class="mod mod-close">
          <p class="cerrar">X</p>
          <div class="modal-textos">
            <h2>Orden</h2>
            <?php echo "<h4>Nombre: " . $Nombre ." ". $Apellido ."<br />Telefono: ". $Telefono. "<br />Direccion: " .$Direccion."<br /><br /> <center>El costo de su Orden es de $" . $total . " pesos</center></h4>" ?>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <script src="main.js"></script> -->

    <!-- Optional JavaScript; -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
      integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
