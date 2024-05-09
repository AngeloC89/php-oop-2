<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
   
    <title>Animal Shop</title>

</head>
    <body>
        <header>
            <nav class="d-flex justify-content-around ">
                <div id="navLogo" class="container  m-0 ">
                    <div>
                        <h1>
                            Animal Shop
                        </h1>
    
                    </div>
                    <div>
                        <ul id="menu">
                            <li>
                                <a href="index.php">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="products.php">
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="about.php">
                                    About us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between">
                    <form action="index.php" method="GET">
                            <select name="stats">
                                <option value="all">
                                    Tutti gli animali
                                </option>
                                <option value="0">
                                    Cani
                                </option>
                                <option value="1">
                                    Gatti
                                </option>
                                <option value="2">
                                    Uccelli
                                </option>
                                <option value="3">
                                    Pesci
                                </option>
                            </select>
                        <button type="submit" class="btn btn-warning text-white">
                                Cerca
                        </button>
                    </form>
                </div>
                </div>
                
        </nav>
    </header>